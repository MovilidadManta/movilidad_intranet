const btnConfirmGuardarRevision = document.getElementById("btn_confirm_send_formulario");
const btnCancelGuardarRevision = document.getElementById("btn_confirm_send_formulario");
const btnConfirmGuardarCloseRevision = document.getElementById("btn_confirm_close_formulario");
const lblMessageCloseRevision = document.getElementById("message_close");
const btnsGuardarFormulario = document.getElementById("btns_guardar_formulario");
const body = document.getElementById('body_formulario');
const pdfContainer = document.getElementById('pdf_formulario');
const pdfContainerView = document.getElementById('pdf_formulario_view');
const btnsRegresarFormulario = document.getElementById("btns_pdf_formulario");
const btnRegresarFormulario = document.getElementById("btn_regresar_formulario");
const btnAbrirOtroFormulario = document.getElementById("btn_abrir_otro_formulario");
const btnGuardarFormulario = document.getElementById('btn_guardar_formulario');
let id_pre_ficha = 0;
let tiempo_prueba = document.getElementById('time_prueba');
let isSave = false;

function buscar_preguntas(id_opcion, id_pregunta) {
    //alert(id_opcion);
    $.ajax({
        url: '/formularios/get_pregunta_ad/' + id_opcion,
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            console.log(res);
            let pregunta_add = "";
            var con = ""
            $.each(res, function (i, v) {
                con = i + 1
                pregunta_add += "<table class='table table-bordered marg-ta'>"
                pregunta_add += "<tr>"
                pregunta_add += "<td align='center'><strong>" + con + ") PREGUNTA DE LA OPCION</strong></td>"
                pregunta_add += "</tr>"
                pregunta_add += "<tr>"
                pregunta_add += "<td>" + con + ")" + v.pregunta + "</td>"
                pregunta_add += "</tr>"
                $.each(v.opciones, function (i, vv) {
                    pregunta_add += "<tr>"
                    pregunta_add += "<td>"
                    pregunta_add += " <div class='radio-list'><label class='radio'>"
                    pregunta_add += " <input class='question_radios' type='radio' id=' " + v.id_pregunta + "' name='radios" + v.id_pregunta + "' value='9'><span></span>" + vv.value + "</label></div>";
                    pregunta_add += "</td>"
                    pregunta_add += "</tr>"
                });
                pregunta_add += "</table>"
            });
            $("#form_subpregunta_" + id_pregunta).html(pregunta_add);
        }
    })
}

$("#btn_guardar_formulario").click(function () {


    let contador = 0;
    $("#frmDatos").find(':input.text_d').each(function () {
        const elemento = this;
        if (elemento.value == "") {
            contador++;
            return false;
        }
    });


    if (contador > 0) {
        //alert("No se puede guardar por que hay preguntas cuandros de textos sin responder");
        Swal.fire("Alerta", "No se puede guardar por que hay preguntas cuandros de textos sin responder", "warning")

        return false;
    }
    var d = $('.question_checkbox:checked');
    var r = $('.question_radio:checked');
    var r_list = $('.question_radio');

    // Obtener valores únicos del atributo "name"
    var uniqueNames = [...new Set(r_list.map(function () {
        return $(this).attr('name');
    }).get())];

    if (r.length !== uniqueNames.length) {
        //alert("No se puede guardar por que hay preguntas sin responder");
        Swal.fire("Alerta", "No se puede guardar por que hay preguntas sin responder", "warning")

        return;
    } else {
        $("#modal_confirm_send_formulario").modal("show");
    }

});

$("#btn_cancelar_formulario").click(function () {
    window.location = "/formularios";
});

btnConfirmGuardarRevision.addEventListener('click', () => {
    isSave = true;
    store_preguntas_fichas();
});

function store_preguntas_fichas() {
    btnGuardarFormulario.disabled = true;
    let array_result = [];
    let array_text_resul = [];

    $("#frmDatos").find(':input.text_d').each(function () {

        const elemento = this;

        let obj_text_items = {
            'id_pregunta': elemento.id,
            'respuesta': elemento.value,
        }
        array_text_resul.push(obj_text_items);
    });



    $('.question_checkbox:checked').each(function () {
        let obj_items = {
            'id_pregunta': $(this).prop("id"),
            'id_opcion': $(this).val(),
            'observacion': $("#ip_observacion_" + $(this).prop("id")).val(),
        }
        array_result.push(obj_items);
    });

    $('.question_radio:checked').each(function () {
        let obj_items = {
            'id_pregunta': $(this).prop("id"),
            'id_opcion': $(this).val(),
            'observacion': $("#ip_observacion_" + $(this).prop("id")).val(),
        }
        array_result.push(obj_items);
    });

    // Obtener los nombres ya incluidos en array_result
    let savedNames = array_result.map(item => $(`#${item.id_pregunta}`).attr('name'));

    // Identificar los elementos no seleccionados y que no pertenezcan a los nombres guardados
    $('.question_radio, .question_checkbox').not(':checked').each(function () {
        if (!savedNames.includes($(this).attr('name'))) {
            savedNames.push($(this).attr('name'));
            let obj_items = {
                'id_pregunta': $(this).prop("id"),
                'id_opcion': null, // Valor para los no seleccionados
                'observacion': null, // O lo que desees asignar
            };
            array_result.push(obj_items);
        }
    });

    array_text_resul = JSON.stringify(array_text_resul);
    array_result = JSON.stringify(array_result);
    console.log('array_result', array_result);
    console.log('array_text_resul', array_text_resul);
    var token = $("#token").val();


    $.ajax({
        url: '/formularios/store_ficha',
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': token
        },
        data: {
            array_result: array_result,
            id_ficha: id_pre_ficha,
            array_text_resul: array_text_resul,
            is_save: isSave
        },
        success: function (res) {
            if (isSave) {
                $("#modal_confirm_send_formulario").modal("hide");
                if (res.respuesta) {
                    lblMessageCloseRevision.innerHTML = `Su calificación es ${res.calificacion}/${res.nota_examen}`;
                    $("#modal_confirm_close_formulario").modal("show");
                    pdfContainerView.src = "/formularios/get_pdf_calificacion/" + res.id_ficha;
                    pdfContainer.style.display = "block";
                    btnsRegresarFormulario.style.display = "flex";
                    body.style.display = "none";
                    btnsGuardarFormulario.style.display = "none";
                } else {
                    //alert(res.tipo)
                    $("#modal_confirm_close_formulario").modal("hide");
                    Swal.fire("Alerta", "Error al guardar los datos", "danger")

                }
            }
            btnGuardarFormulario.disabled = false;
        }
    })
}

btnCancelGuardarRevision.addEventListener('click', () => {
    $("#modal_confirm_send_formulario").modal("hide");
});

btnConfirmGuardarCloseRevision.addEventListener('click', () => {
    $("#modal_confirm_close_formulario").modal("hide");
});

function getFichaUsuario() {
    id_pregunta = document.getElementById('txt_p_id').value;
    $.ajax({
        url: '/formularios/get_ficha/' + id_pregunta,
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            console.log(res);

            if (res.minutes_end == null) {
                store_pre_ficha();
                //body.style.display = "block";
                //btnsGuardarFormulario.style.display = "flex";
                return;
            }
            id_pre_ficha = res.id;
            if (res.estado) {
                lblMessageCloseRevision.innerHTML = `Su calificación es ${res.total}/${res.nota}`;
                $("#modal_confirm_close_formulario").modal("show");
                pdfContainerView.src = "/formularios/get_pdf_calificacion/" + res.id;
                pdfContainer.style.display = "block";
                btnsRegresarFormulario.style.display = "flex";
            }
            else if (res.minutes_end > 0) {
                body.style.display = "block";
                btnsGuardarFormulario.style.display = "flex";
                let minutos_restantes = res.minutes_end;
                tiempo_prueba.innerText = minutos_restantes;
                const controlsCheckox = document.querySelectorAll('.question_radio');
                setInterval(() => {
                    minutos_restantes -= 1;
                    tiempo_prueba.innerText = minutos_restantes;
                    if (minutos_restantes == 0) {
                        //window.location = "/formularios";
                        isSave = true;
                        store_preguntas_fichas();
                    }
                }, 60000);

                controlsCheckox.forEach(c => {
                    c.addEventListener('change', () => {
                        store_preguntas_fichas();
                    });
                });
            }
            else {
                lblMessageCloseRevision.innerHTML = `El tiempo de la prueba ha expirado`;
                $("#modal_confirm_close_formulario").modal("show");
                isSave = true;
                store_preguntas_fichas();
            }
        }
    })
}

function store_pre_ficha() {
    var token = $("#token").val();
    $.ajax({
        url: '/formularios/store_pre_ficha',
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': token
        },
        data: {
            id_proyecto: $("#ip_proyecto").val(),
        },
        success: function (res) {
            if (res.respuesta == true) {
                id_pre_ficha = res.id_ficha;
                getFichaUsuario();
            }
        }
    })
}

btnRegresarFormulario.addEventListener('click', () => {
    window.location = "/formularios";
});

btnAbrirOtroFormulario.addEventListener('click', () => {
    const aref = document.createElement('a');
    aref.href = pdfContainerView.src;
    aref.target = "_blank";
    document.body.appendChild(aref); // Agregar al DOM
    aref.click(); // Simula el clic
    document.body.removeChild(aref); // Eliminar del DOM
    console.log('click');
});




getFichaUsuario();