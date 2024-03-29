<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="/js/copeitoFormPopulator.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

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

        $('.copeitoGrid').each(
            function (){
                $(this).DataTable();
            }
        )
        $(document).ready(
            function (){
                $('.copeitoGrid').each(
                    function (){
                        $(this).DataTable();
                    }
                );
            }
        );

        copeitoFormPopulator.populateAll();

        $("form div").addClass("form-group");
        $("form input").addClass("form-control");
        $("form small").addClass("form-text text-muted");
        $("form button").addClass("btn btn-primary");


        $("form input").addClass("form-control");
    </script>
</body>
</html>
