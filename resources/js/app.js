import './bootstrap';
function copiarDatos() {
    // Selecciona el contenido de la div con la clase "cuerpo"
    var contenido = document.querySelector('.cuerpo');
    var seleccion = window.getSelection();
    var rango = document.createRange();
    rango.selectNodeContents(contenido);
    seleccion.removeAllRanges();
    seleccion.addRange(rango);

    // Intenta copiar el contenido seleccionado
    try {
        document.execCommand('copy');
        alert('Datos copiados exitosamente');
    } catch (err) {
        console.error('Error al intentar copiar los datos:', err);
        alert('Error al intentar copiar los datos');
    }

    // Limpia la selección
    seleccion.removeAllRanges();
}
