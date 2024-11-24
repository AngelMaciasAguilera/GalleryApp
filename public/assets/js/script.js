(function () {
    const container = document.getElementById('formDelete');
    
    if (container) {
        container.addEventListener('click', (event) => {
            const target = event.target;
            event.preventDefault();
            // Verificar si el botón tiene la clase 'borrar'
            if (target.classList.contains('borrar')) {
                // Confirmar antes de eliminar
                if (confirm('Confirm delete?')) {
                    const form = target.closest('form');
                    const url = target.dataset.href; 
                    if (form && url) {
                        form.action = url;
                        form.submit();
                    }
                }
            }
        });
    }
})();
