import lightGallery from 'lightgallery';
import 'lightgallery/css/lightgallery.css';
document.addEventListener('DOMContentLoaded', function() {
    const el = document.getElementById('lightgallery');
    if (el) {
        lightGallery(el);
    }
});