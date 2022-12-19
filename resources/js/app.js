import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// NOTIFICAÇÕES DE ALERTAS
import Swal from 'sweetalert2';
window.Swal = Swal;

window.addEventListener('Swal:modal', event => {
    Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        imageUrl: event.detail.imageUrl,
        imageWidth: event.detail.imageWidth,
        imageHeight: event.detail.imageHeight,
        imageAlt: 'Admin Help',
    });
});

