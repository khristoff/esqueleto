function isNumber(evt) {
	evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

/*
$(function(){
	$('input.isMoney').on('change',function(){
		var val = $('.isMoney').val();
	});
	$('input.isMoney').number(true);
});
*/

$('input.isAlphanumeric').bind('keypress', function (event) {
	var keyCode = event.keyCode || event.which

    if (keyCode == 8 || keyCode == 32 || (keyCode >= 35 && keyCode <= 40)) {
        return;
    }

    var regex = new RegExp("^[ña-zÑA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$('input.isKey').bind('keypress', function (event) {
	var keyCode = event.keyCode || event.which

    if (keyCode == 8 || keyCode == 32 || (keyCode >= 35 && keyCode <= 40)) {
        return;
    }

    var regex = new RegExp("^[a-zA-Z0-9_-]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$('input.isText').bind('keypress', function (event) {
	var keyCode = event.keyCode || event.which

    if (keyCode == 8 || keyCode == 32 || (keyCode >= 35 && keyCode <= 40)) {
        return;
    }

    var regex = new RegExp("^[ña-zÑA-Z0-9 \,]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$('input.isEmail').bind('keypress', function (event) {
	var keyCode = event.keyCode || event.which

    if (keyCode == 8 || (keyCode >= 35 && keyCode <= 40)) {
        return;
    }

    var regex = new RegExp("^[a-zA-Z0-9_\\-@\\.]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$('#login-form').validate({
	ignore: ":hidden",
	rules: {
		usuario: {
			required: true,
			minlength: 6,
			maxlength: 128,
			email: true
		},
		contrasena: {
			required: true,
			minlength: 8,
			maxlength: 20
		}
	},
	messages: {
		usuario: {
			required: "Escribe tu usuario",
			minlength: "El usuario debe tener 2 caracteres como mínimo",
			maxlength: "El usuario debe tener 128 caracteres como máximo",
			email: "El usuario debe ser un correo electrónico válido"
		},
		contrasena: {
			required: "Escribe tu contraseña",
			minlength: "La contraseña debe tener 8 caracteres como mínimo",
			maxlength: "La contraseña debe tener 20 caracteres como máximo"
		}
	},
    submitHandler: function(form) {
	    $.ajax({
			type: $(form).attr('method'),
			url: $(form).attr('action'),
			data: $(form).serialize(),
			dataType: 'json',
			timeout: 10000,
			beforeSend: function() {
				$('.login-submit').prepend('<i class="fa fa-spinner fa-spin fa-fw"></i><span class="sr-only">Cargando...</span>');
		    },
		    success: function(response) {
				if(response.status == 'success'){
					window.location = response.data.redirect;
				} else {
					$('input[name="contrasena"]').val('');
					swal("", response.data.message);
				}
		    },
		    error: function(xhr) {
		        console.log("Error occured. Please try again");
		        console.log(xhr.statusText);
		        console.log(xhr.responseText);
		    },
		    complete: function() {
			    $('.login-submit > .fa-spinner, .login-submit > span.sr-only').remove();
		    }
		});
		return false;
	}
});