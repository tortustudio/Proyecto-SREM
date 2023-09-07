window.addEventListener('load', function () {
    var modal = document.getElementById('miModal');
    var btnMostrarModal = document.getElementById('mostrarModal');
    var btnCancelar = document.getElementById('cancelar');

    btnMostrarModal.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    btnCancelar.addEventListener('click', function () {
        modal.style.display = 'none';
    });

});