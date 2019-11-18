<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cart</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
    	body {
    		padding: 50px 0;
    	}
    	.container {
		  width: auto;
		  max-width: 680px;
		  padding: 0 15px;
		}
		.container .text-muted {
		  margin: 20px 0;
		}
    </style>
  </head>
  <body>
      <br><br><br>
  	<div class="container">
  		<div class="col-sm-12">
    		@yield('content')
    	</div>
    </div>
      <br><br><br><br><br><br><br><br>
  </body>
</html>

@include('frontend/front_layout/footer');