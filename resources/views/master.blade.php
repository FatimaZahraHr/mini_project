<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons">
  </head>
  
<body>
    <div id="app">
<example-component></example-component>
</div>
      

<script src="js/app.js" type="text/javascript"></script>


@yield('javascripts')

</body>

</html>
