<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shurjopay Integration (Laravel-personal-project)</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/">

    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>


  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Shurjopay Integration (Laravel-rayhan-khan ridoy)</h3>
      </div>

      <div class="jumbotron">
            <img src="{{asset('images/shurjopay-payment-gateway-integration.png') }}" width="100%"alt="shurjopay-image">
        <br>
        <br>

        <form method="POST" action="{{url('/paymentGateway')}}">
            @csrf
            <div class="form-group text-center" style="margin-top: 10px;">
                <input type="submit"  class = "btn btn-success" value="Pay Now">
            </div>
        </form>



      </div>



      <footer class="footer">
        <p>&copy; 6-10-2022 RAYHAN KHAN RIDOY</p>
      </footer>

    </div>

    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
