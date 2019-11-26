<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/cssfile.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <title>{{ env('APP_NAME' )}}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">


</head>
<body>

    <div class="my-container">
        <div>
            @include('layouts._navbar')
            <div class="container my-content-container">
                @yield('content')
            </div>
            <div>
                @include('layouts._footer')
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="html2pdf.bundle.min.js"></script>
    <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Bootstrap js -->
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Propeller textfield js -->
  <script type="text/javascript" src="dist/js/propeller.min.js"></script>

  <!-- Datepicker moment with locales -->
  <script type="text/javascript" language="javascript" src="datetimepicker/js/moment-with-locales.js"></script>

  <!-- Propeller Bootstrap datetimepicker -->
  <script type="text/javascript" language="javascript" src="datetimepicker/js/bootstrap-datetimepicker.js"></script>
>
    <script>
    // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("password");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
</script>
    <script>
        $('.btn-refresh').click(function(){
            $.ajax({
              type: 'GET',
              url : '{{url('/refresh_captcha')}}',
              success : function(data){
                $('.captcha span').html(data);
              }
            })
        });
    </script>

</body>


</html>
