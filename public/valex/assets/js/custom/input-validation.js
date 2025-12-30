function setInputValidations(id, arrayValidationsSimple, arrayValidationsPersonalizadas, arrayWarnings = []) {
    let input = document.getElementById(id);
    let showError = document.querySelector(`[data-for="${id}"]`);


    input.validateInput = (() => {
        showError.innerHTML = '';
        arrayValidationsSimple.map(e => {
            if (e == 'notEmpty' && input.value.trim() == "") {
                showError.innerHTML += `${input.dataset.label} no puede ser vació \n`;
            }
        });
        arrayValidationsPersonalizadas.map(e => {
            if (e.function(input)) {
                showError.innerHTML += e.message;
            }
        });
        return showError.innerHTML;
    });

    input.validateWarnings = (() => {
        let warnings = '';
        arrayWarnings.map(e => {
            if (e.function(input)) {
                warnings += e.message;
            }
        });
        return warnings;
    });
}