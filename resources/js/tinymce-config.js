// resources/js/tinymce-config.js
import 'tinymce';
import 'tinymce/themes/silver';

tinymce.init({
    selector: 'textarea#editor', // Selecciona el textarea por su ID
    plugins: 'autoresize link image',
    toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
});
