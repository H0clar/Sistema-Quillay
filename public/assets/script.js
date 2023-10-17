document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.eliminar-button');

    buttons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Realizar la acción de eliminación, por ejemplo, redireccionar a la URL de eliminación
                    const deleteUrl = button.getAttribute('data-delete-url');
                    window.location.href = deleteUrl;
                }
            });
        });
    });
});
