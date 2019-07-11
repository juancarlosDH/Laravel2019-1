window.onload = () => {
    var formGenre = document.querySelector('#form-genre');

    formGenre.onsubmit = function(event) {
        this.action;
        event.preventDefault();
        var elementos = formGenre.elements;
        for (elemento of elementos) {
            if (elemento.type == 'text' && elemento.name == 'name' && validarVacio(elemento)) {
                return false;
            }
        }
        //aqui hago la llamada fetch para que guarde en ruta de laravel
            //, esta vez no va a ser a una api sino a una ruta en web.php
        var token = this.querySelector('input[name="_token"]').value;

        var campos = { 'name' : this.querySelector('input[name="name"]').value };

        var opciones = {
            method: 'POST',
            body: JSON.stringify(campos),
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
            }
        };
        fetch(this.action, opciones)
        .then(function(response){
            return response.json();
        })
        .then(function(datos){
            console.log(datos)
            var listado = document.querySelector('#genres-list');
            var a = document.createElement('a');
            a.setAttribute('href', `/genres/${datos.genero.id}`);
            a.innerText = datos.genero.name;
            listado.append(a);
            alert('Genero guardado exitosamente, puedo mostrar un alert de bootstrap');
            $('#myModal').modal('hide');
        })
        .catch(function(error){
            console.log(error);
        })
    }
}
