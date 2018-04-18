$(document).ready(function(){
    $("form .input").addClass('input-field');   // Agrega la clase que se necesita para que Materialize funcione

    $(".input.select").each(function(){             // cambia el orden del select y el label para que funcionen con materialize
        var lab = $(this).find('label:first');
        var sel = $(this).find('select:first');
        $(lab).before($(sel));
    });
    $('select').formSelect();
})
