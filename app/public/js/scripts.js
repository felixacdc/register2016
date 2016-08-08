function optionSemester(value, element, param) {
    var options = ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto', 'Septimo', 'Octabo', 'Noveno', 'Decimo', 'Onceavo', 'Dosceavo'];

    if ( options.indexOf(value) >= 0 ) {
        return true;
    } else {
        return false;
    }
}

$.validator.addMethod("optionSemester", optionSemester, "Seleccione un semestre correcto.");

function injectTrim(handler) {
    return function (element, event) {
        if (element.tagName === "TEXTAREA" || (element.tagName === "INPUT" && element.type !== "password")) {
            element.value = $.trim(element.value);
        }
        return handler.call(this, element, event);
    };
}


$(".button-collapse").sideNav();
$('.scrollspy').scrollSpy();
$('select').material_select();

 $("#formValidate").validate({
    onfocusout: injectTrim($.validator.defaults.onfocusout),
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email:true
        },
        phone: {
            required: true,
            minlength: 8
        },
        semester: {
            optionSemester: true
        }
    },
    messages: {
        name:{
            required: "Escriba el nombre."
        },
        email: {
            required: "Escriba el correo electronico.",
            email: "Escriba un correo electronico valido."
        },
        phone: {
            required: "Escriba el telefono.",
            minlength: "Escriba al menos 8 caracteres."
        },
        semester: {
            required: "Seleccione el semestre"
        }
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
 });