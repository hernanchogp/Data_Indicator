function actualizaValor(id) {
    /**
     * Captura de valores del formulario
     */
    var cumplenForm = $('#cumplenForm_' + id).val();
    var totalForm = $('#totalForm_' + id).val();
    var idForm = $('#idForm_' + id).val();
    $.ajax({
        url: 'php/actualizar.php',
        type: 'POST',
        data: {
            'cumplenForm': cumplenForm,
            'totalForm': totalForm,
            'idForm': idForm
        }
    }).done(function (result) {
        if (result == null) {
            alert('No es posible actualizar el registro');
        } else {
            console.log(result);
            switch (result.codigo) {
                case 'ok':
                    alert(result.mensaje);
                    break;
                case 'error':
                    alert(result.mensaje);
                    break
                default:
                    console.log('error');
            }
        }

    }).fail(function () {
        console.log('error')
    })
}