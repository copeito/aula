<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
    	.table {
    		border-top: 2px solid #ccc;

    	}
        .copeito_form{
            display:block;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="margin-top: 100px">
        @yield('content')
    </div>
    <script>
        $('form').attr({
            role: 'form',
            method: 'POST'
        });

        $('form input, form button').each(function (){
                $('<div>').insertBefore($(this));
                $('<div>').insertAfter($(this));

                $(this).attr('name', $(this).attr('id'));

                if ($(this).attr('type') == undefined){
                    $(this).attr(
                        'type',
                        ($(this).is(":button")) ? 'submit' : 'text'
                    );
                }

                if ($(this).attr('label')){
                    $('<label for="'+$(this).attr('id')+'">'+$(this).attr('label')+'</label>').insertBefore($(this));
                    $(this).removeAttr('label');
                }

                if ($(this).attr('help')){
                    var idHelper = $(this).attr('id')+'HelpBlock';

                    $(this).attr('aria-describedby', idHelper);

                    $('<small id="'+idHelper+'">'+$(this).attr('help')+'</small>').insertAfter($(this));

                    $(this).removeAttr('help');
                }

                if ($(this).attr('msgOnInvalid')){
                    $(this).attr('oninvalid', 'this.setCustomValidity("'+$(this).attr('msgOnInvalid')+'")');
                    $(this).removeAttr('msgOnInvalid');
                }

                switch(($(this).attr('type'))){
                    case 'text':
                    case 'email':
                    case 'tel':
                        $(this).attr('maxlength','191');
                        break;
                }

                if ($(this).attr('required') && ($(this).attr('type') == 'text')){
                    $(this).attr('onchange', 'this.setCustomValidity("")');
                }

        });

        $("form div").addClass("form-group");
        $("form input").addClass("form-control");
        $("form small").addClass("form-text text-muted");
        $("form button").addClass("btn btn-primary");


        $("form input").addClass("form-control");
    </script>
</body>
</html>
