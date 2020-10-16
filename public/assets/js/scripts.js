/*Boton borrar compos del formulario*/
$(document).ready(function(){
    //Cerrar las alertas automaticamente
    $('.alert[data-auto-dismiss').each(function (index, element) {
        const $element = $(element),
        timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout );
      });
      //TOOLTIPS
      $('body').tooltip({
          trigger: 'hover',
          selector: 'tooltipC',
          placement: 'top',
          html: true,
          container: 'body'
      });
});