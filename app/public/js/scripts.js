"use strict";

$.validator.addMethod("optionSemester", optionSemester, "Seleccione un semestre correcto.");
$.validator.addMethod("optionPlan", optionPlan, "Seleccione un plan correcto.");
$.validator.addMethod("emailVal", emailVal, "Escriba un correo electronico valido.");

$(document).ready(function() {

    (new WOW).init();

    $(".button-collapse").sideNav();
    $('.scrollspy').scrollSpy();

    if ( typeof(success) != "undefined" ) Materialize.toast(success, 4000);
    if ( typeof(error) != "undefined" ) Materialize.toast(error, 4000);
    if ( typeof(errors) != "undefined" ) {
        var content = '<ul>';
        $.each(errors, function( index, value ) {
            content += '<li>' + value + '</li>';
        });
        content += '</li>';
        Materialize.toast(content, 4000);
    }

    $("#code").keydown(function() {
        $('#messageError').css('display', 'none');
    });

    $("#formValidate").validate({
        onfocusout: injectTrim($.validator.defaults.onfocusout),
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                emailVal: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 8
            },
            semester: {
                optionSemester: true
            },
            plan: {
                optionPlan: true
            },
            course: {
                required: true
            },
            code: {
                required: true
            }
        },
        messages: {
            name:{
                required: "Escriba el nombre."
            },
            email: {
                required: "Escriba el correo electronico."
            },
            phone: {
                required: "Escriba el telefono.",
                digits: "Escriba solo numeros.",
                minlength: "Escriba al menos 8 caracteres."
            },
            semester: {
                required: "Seleccione el semestre."
            },
            plan: {
                required: "Seleccione un plan."
            },
            course: {
                required: "Escriba un curso."
            },
            code: {
                required: "Escriba un codigo."
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
        },
        submitHandler: function(form) {
            $("form .btn").prop('disabled', true);
            $('#messageError').css('display', 'none');

            var verification_data = new Verification($("#code").val(), $("#token").val(), "/verify_code");

            verification_data.verify(function(err) {
                if (err) {
                    $("form .btn").prop('disabled', false);
                    $("#messageError").html(err);
                    $('#messageError').css('display', 'block');
                } else form.submit();
            });
        }
    });
});

// Opciones validas para el semestre
 function optionSemester(value, element, param) {
     var options = ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto', 'Septimo', 'Octabo', 'Noveno', 'Decimo', 'Onceavo', 'Dosceavo'];

     if ( options.indexOf(value) >= 0 ) {
         return true;
     } else {
         return false;
     }
 }

// Opciones validas para el plan
 function optionPlan(value, element, param) {
     var options = ['Diario', 'Fin de Semana'];

     if ( options.indexOf(value) >= 0 ) {
         return true;
     } else {
         return false;
     }
 }

// validar email
function emailVal(value, element, param) {
    var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    if ( $(element).attr("value").match(exp) ) {
        return true;
    } else {
        return false;
    }
}

function injectTrim(handler) {
    return function (element, event) {
         if (element.tagName === "TEXTAREA" || (element.tagName === "INPUT" && element.type !== "password")) {
             element.value = $.trim(element.value);
         }
         return handler.call(this, element, event);
     };
 }
