$(document).ready(function() {
    console.log('si jala');
    const IniciarSesion = document.getElementById('IniciarSesion')
    $('#IniciarSesion').submit(function(e) {
        e.preventDefault();
        const datos = {
            Correo: $('#Correo').val(),
            Password: $('#Password').val()
        };

        $.post('Php/Iniciar Sesion.php', datos, function(r) {
            if (r == 1) {
                console.log(r);
                IniciarSesion.reset();
            } else {
                console.log(r);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops',
                    text: 'Error'
                });
                IniciarSesion.preventDefault();
            }
        });
    });

})