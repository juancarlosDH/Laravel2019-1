var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

window.onload = function () {
    var form = document.querySelector('form');

    var email = document.querySelector('#email');
    var password = document.querySelector('#password');

    email.onblur = function () {
        if (regexEmail.test(this.value)) {
            this.classList.remove('is-invalid');
        }
    }

    form.onsubmit = function (event) {
        if (!regexEmail.test(email.value)) {
            email.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Email invalido';
            var div = email.parentElement;
            if (div.children[1]) {
                div.removeChild(div.children[1]);
            }
            div.append(error);
            event.preventDefault();
        }

        if (password.value.trim() == '') {
            password.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Debe de estar lleno';
            var div = password.parentElement;
            if (div.children[1]) {
                div.removeChild(div.children[1]);
            }
            div.append(error);
            event.preventDefault();
            password.value = '';
        }

        if (regexEmail.test(email.value) && password.value.trim() != '') {
            //hice la peticion a la api que esta en laravel, mandando por query string el valor del email
            fetch ('http://localhost:8000/api/buscarEmail?email=' + email.value)
                //.then( function(response) { return response.json() } )
                .then( (response) => { return response.json(); } )
                .then( (datos) => {
                    //aqui me va a responder en json
                    if ( datos.existe == false) {
                        alert('usuario o clave invalidos');
                    }
                    console.log(datos);
                } )
                .catch( (error) => {
                    console.log(error);
                });


        }


        console.log('se esta enviando');

    }
}
