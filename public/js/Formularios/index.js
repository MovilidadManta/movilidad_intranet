const btnAbrirProyecto = document.getElementById('btn_abrir_proyecto');
const msjConfirmOpenProject = document.getElementById('msj_modal_confirm_open_formulario');
const btnOpenFormulario = document.getElementById('btn_confirm_open_formulario');
const btnCancelOpenFormulario = document.getElementById('btn_cancel_open_formulario');
let idFormulario = 0;

btnAbrirProyecto.addEventListener('click', (e) => {
    e.preventDefault();

    if (e.target.dataset.id_usuario) {
        window.location = "/formularios/" + e.target.dataset.id;
        return;
    }

    msjConfirmOpenProject.innerText = `Esta seguro de empezar la prueba: ${e.target.dataset.proyecto}, una vez empezada tendra ${e.target.dataset.minutes} minutos para concluirla.`;
    $("#modal_confirm_open_formulario").modal("show");
    idFormulario = e.target.dataset.id;
});

btnOpenFormulario.addEventListener('click', () => {
    window.location = "/formularios/" + idFormulario;
    $("#modal_confirm_open_formulario").modal("hide");
});


btnCancelOpenFormulario.addEventListener('click', () => {
    $("#modal_confirm_open_formulario").modal("hide");
});