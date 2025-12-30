const btnRealizarMarcacion = document.getElementById("btn_marcacion_remoto");
const btnHistorialMarcacion = document.getElementById('btn_marcacion_historial');

const MODAL_ID = "modal_agregar_marcacion_empleado_remoto";
const MODAL_MARCACIONES = "modal_historial_marcaciones";
const modalEl = document.getElementById(MODAL_ID);
const modalMarcaciones = document.getElementById(MODAL_MARCACIONES);
const name_fecha_inicio = `select_fecha_inicio_${MODAL_MARCACIONES}`;
const name_fecha_fin = `select_fecha_fin_${MODAL_MARCACIONES}`;
const video = document.getElementById(`video_${MODAL_ID}`);
const canvas = document.getElementById(`canvas_${MODAL_ID}`);
const photo = document.getElementById(`photo_${MODAL_ID}`);
const inputFoto = document.getElementById(`input_foto_${MODAL_ID}`);
const btnTomarFoto = document.getElementById(`btn_tomar_foto_${MODAL_ID}`);
const btnNuevaFoto = document.getElementById(`btn_nueva_foto_${MODAL_ID}`);
const selectCamara = document.getElementById(`select_camara_${MODAL_ID}`);
const selectTipoMarcacion = document.getElementById(`select_tipo_marcacion_${MODAL_ID}`);
const btnSearchMarcacion = document.getElementById(`btn_search_marcaciones_${MODAL_MARCACIONES}`);
const btnGuardarMarcacion = document.getElementById('btn_registar_marcacion_empleado_remoto');

let currentStream = null;


$(document).ready(function () {
    configure_select_two_dates(`select_fecha_inicio_${MODAL_MARCACIONES}`, `select_fecha_fin_${MODAL_MARCACIONES}`);
    setInputValidations(inputFoto.id, ['notEmpty'], []);
});

// Pedir permiso primero, enumerar, llenar select y arrancar con la primera
async function prepararCamaras() {
    try {
        // 1) Pedir permiso “suave” para que enumerateDevices funcione bien
        const temp = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        temp.getTracks().forEach(t => t.stop());

        // 2) Enumerar
        const devices = await navigator.mediaDevices.enumerateDevices();
        const cams = devices.filter(d => d.kind === 'videoinput');

        // 3) Llenar select
        selectCamara.innerHTML = cams.map((c, i) =>
            `<option value="${c.deviceId}">${c.label || ('Cámara ' + (i + 1))}</option>`
        ).join('');

        // 4) Iniciar con la primera si hay
        if (cams.length > 0) await iniciarConCamara(cams[0].deviceId);

    } catch (e) {
        console.error('Error preparando cámaras:', e);
    }
}

async function iniciarConCamara(deviceId) {
    try {
        // Detener stream anterior
        if (currentStream) currentStream.getTracks().forEach(t => t.stop());

        // Pedir por deviceId únicamente (sin facingMode exact)
        const stream = await navigator.mediaDevices.getUserMedia({
            video: { deviceId: { exact: deviceId } },
            audio: false
        });

        currentStream = stream;
        video.srcObject = stream;

        // En móviles esto ayuda
        await video.play();

        // Ajustar canvas al tamaño real del video
        if (video.videoWidth && video.videoHeight) {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
        }
    } catch (e) {
        console.error('No se pudo iniciar la cámara seleccionada:', e);
    }
}

// Cambiar cámara desde el select
selectCamara.addEventListener('change', e => iniciarConCamara(e.target.value));

// Capturar foto
btnTomarFoto.addEventListener("click", () => {
    const ctx = canvas.getContext("2d");
    const w = canvas.width || 320, h = canvas.height || 240;
    ctx.drawImage(video, 0, 0, w, h);
    const dataURL = canvas.toDataURL("image/png");
    photo.src = dataURL;
    inputFoto.value = dataURL;

    video.classList.add("oculto");
    btnTomarFoto.classList.add("oculto");
    btnNuevaFoto.classList.remove("oculto");
    photo.classList.remove("oculto");
});

btnNuevaFoto.addEventListener("click", () => {
    video.classList.remove("oculto");
    btnTomarFoto.classList.remove("oculto");
    btnNuevaFoto.classList.add("oculto");
    photo.classList.add("oculto");
    inputFoto.value = "";
});

modalMarcaciones.addEventListener('shown.bs.modal', () => {

});

// Abrir modal: prepara cámaras cuando el modal ya es visible
modalEl.addEventListener('shown.bs.modal', async () => {
    await prepararCamaras();
});

// Cerrar modal: libera la cámara
modalEl.addEventListener('hidden.bs.modal', () => {
    if (currentStream) {
        currentStream.getTracks().forEach(t => t.stop());
        currentStream = null;
    }
    video.srcObject = null;
});

btnSearchMarcacion.addEventListener("click", () => {
    $.ajax({
        url: `/marcaciones_empleado/get_marcaciones/${$(`#${name_fecha_inicio}`).val().replaceAll("-", "")}/${$(`#${name_fecha_fin}`).val().replaceAll("-", "")}`,
        type: 'GET',
        dataType: 'json',
        headers: {},
        contentType: false,
        processData: false,
        success: function (response) {
            let html = configureTableHtml("table_marcaciones_empleado",
                ['FECHA MARCACIÓN', 'TIPO MARCACIÓN', 'IP', 'ARCHIVO EVIDENCIA'
                ],
                [{
                    align: 'center',
                    class: 'color-td',
                    functionValue: function (item) {
                        return `${item.me_fecha_marcacion.substr(0, 19)}`;
                    }
                }, {
                    align: 'center',
                    class: 'color-td',
                    functionValue: function (item) {
                        let tipo_marcacion = "SALIDA";
                        if (item.me_tipo_marcacion == 1) {
                            tipo_marcacion = "ENTRADA";
                        }
                        if (item.me_tipo_marcacion == 2) {
                            tipo_marcacion = "SALIDA AL ALMUERZO";
                        }
                        if (item.me_tipo_marcacion == 3) {
                            tipo_marcacion = "ENTRADA DEL ALMUERZO";
                        }
                        return `${tipo_marcacion}`;
                    }
                }, 'me_ip', {
                    align: 'center',
                    class: 'color-td',
                    functionValue: function (item) {
                        return `<a href="/marcaciones_empleado/get_imagen/${item.me_archivo_evidencia_marca}" alt="${item.me_archivo_evidencia_marca}" target="blank">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </button>
                        </a>
                        `;
                    }
                }
                ], response
            );

            $(`#div_table_marcaciones_empleado_${MODAL_MARCACIONES}`).html(html);

            $("#table_marcaciones_empleado").DataTable({
                "order": [[0, 'desc']]
            });
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
            alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
            alert('Internal Server Error [500]. Intente nuevamente');
        } else if (textStatus === 'timeout') {
            alert('Time out error.');
        } else if (textStatus === 'abort') {
            alert('Ajax request aborted.');
        }
    });
});


btnRealizarMarcacion.addEventListener("click", () => {
    $.ajax({
        url: '/marcaciones_empleado/get_last_marcacion',
        type: 'GET',
        dataType: 'json',
        headers: {},
        contentType: false,
        processData: false,
        success: function (response) {
            selectTipoMarcacion.value = response;
            clearMarcacion();
            $(`#${MODAL_ID}`).modal('show');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
            alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
            alert('Internal Server Error [500]. Intente nuevamente');
        } else if (textStatus === 'timeout') {
            alert('Time out error.');
        } else if (textStatus === 'abort') {
            alert('Ajax request aborted.');
        }
        btnGuardarMarcacion.disabled = false;
        clearMarcacion();
    });
});

btnGuardarMarcacion.addEventListener("click", () => {
    let errores = '';

    errores += inputFoto.validateInput();

    if (errores.trim() != "") {
        Swal.fire(
            'Tomar Foto!',
            'Por favor asegurese de tomarse una foto para la marcación',
            'error'
        );
    }
    else {
        $(`#${btnGuardarMarcacion.id} `).html("<span class='color-btn-nuevo spinner-border spinner-border-sm margin-spiner' role='status' aria-hidden='true'></span><span class='color-btn-nuevo'>Guardando Marcación...</span>");
        btnGuardarMarcacion.disabled = true;
        const token = $(`#csrf_token_${MODAL_ID}`).val();
        const datos = new FormData($(`#form_${MODAL_ID} `)[0]);

        $.ajax({
            url: '/marcaciones_empleado/guardar',
            type: 'POST',
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': token },
            contentType: false,
            processData: false,
            data: datos,
            success: function (response) {
                if (response.respuesta == "true") {
                    $(`#${btnGuardarMarcacion.id} `).html("<i class='fa fa-save'></i> Guardar");
                    Swal.fire(
                        'Buen Trabajo!',
                        'Su marcacion se registro correctamente',
                        'success'
                    );
                    $(`#${MODAL_ID}`).modal('hide');
                    btnGuardarMarcacion.disabled = false;
                    clearMarcacion();
                } else if (response.respuesta == "false" && response.cod && response.cod == "NOT_ENOUGH_TIME") {
                    $(`#${btnGuardarMarcacion.id} `).html("<i class='fa fa-save'></i> Guardar");
                    Swal.fire(
                        'Espera un momento!',
                        'Haz realizado una marcación recientemente, por favor espera un tiempo prudente para realizar la próxima',
                        'error'
                    );
                    $(`#${MODAL_ID}`).modal('hide');
                    btnGuardarMarcacion.disabled = false;
                    clearMarcacion();
                } else {
                    $(`#${btnGuardarMarcacion.id} `).html("<i class='fa fa-save'></i> Guardar");
                    Swal.fire(
                        'Algo inesperado ocurrio!',
                        'Por favor contactace con sistemas',
                        'error'
                    );
                    $(`#${MODAL_ID}`).modal('hide');
                    btnGuardarMarcacion.disabled = false;
                    clearMarcacion();
                }
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                alert('Not connect: Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500]. Intente nuevamente');
            } else if (textStatus === 'timeout') {
                alert('Time out error.');
            } else if (textStatus === 'abort') {
                alert('Ajax request aborted.');
            }
            btnGuardarMarcacion.disabled = false;
            clearMarcacion();
        });
    }
});

function clearMarcacion() {
    inputFoto.value = "";
    btnNuevaFoto.dispatchEvent(new Event("click"));
}

btnHistorialMarcacion.addEventListener("click", () => {
    const selectFechaInicio = document.getElementById(name_fecha_inicio);
    const selectFechaFin = document.getElementById(name_fecha_fin);
    const fechaHoy = new Date();
    selectFechaInicio.value = `${fechaHoy.getFullYear()}-${(fechaHoy.getMonth() + 1).toString().padStart(2, '0')}-${fechaHoy.getDate().toString().padStart(2, '0')}`;
    selectFechaFin.value = `${fechaHoy.getFullYear()}-${(fechaHoy.getMonth() + 1).toString().padStart(2, '0')}-${fechaHoy.getDate().toString().padStart(2, '0')}`;
    btnSearchMarcacion.dispatchEvent(new Event("click"));
    $(`#${MODAL_MARCACIONES}`).modal('show');
});

