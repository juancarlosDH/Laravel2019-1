function validarEmailRepetido(email) {
    console.log('durante')

}

window.onload = function () {
    var form = document.querySelector('form');

    var dni = document.querySelector('#dni');
    dni.onkeydown = function (event) {
        if ((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 8) {

        } else {
            event.preventDefault();
        }
    }

    var button = document.querySelector('form button.botonEnviar');

    button.onclick = function () {
        let errores = 0;

        var name = document.querySelector('#name');
        var email = document.querySelector('#email');
        var dni = document.querySelector('#dni');
        var password = document.querySelector('#password');
        var passwordConfirm = document.querySelector('#password-confirm');

        name.classList.remove('is-invalid');
        email.classList.remove('is-invalid');
        dni.classList.remove('is-invalid');
        password.classList.remove('is-invalid');
        passwordConfirm.classList.remove('is-invalid');

        if (validarVacio(name)) {
            errores++;
        }

        if (!regexEmail.test(email.value)) {
            pintarError(email, 'Email invalido');
            errores++;
        }


        // if (elemento.name == 'password') {
        //     var confirm = document.querySelector('#password-confirm');
        //     if (elemento.value.length < 8) {
        //         pintarError(elemento, 'El password debe tener minimo 8 caracters');
        //         return false;
        //     } else if (elemento.value != confirm.value) {
        //         pintarError(elemento, 'Los pass no coinciden');
        //         return false;
        //     }
        // }
        console.log('voy por aqui');

        if (errores === 0 ) {
            form.submit();
        }

    }
}
