
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta  />

      <title>Smowee 420 - Queimando Preconceitos</title>

      <!-- Favicon -->
      <link rel="icon" href="/img/favicon.ico" sizes="16x16">

      <!-- Bootstrap Core CSS -->
      <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link href="/css/hover.css" rel="stylesheet" media="all">

      <!-- Theme CSS -->
      <link href="/css/smowee.css" rel="stylesheet">
      <link href="/css/news.css" rel="stylesheet">
  </head>

  <body id="page-top" class="index">
    @include('layout.nav')

    @yield('content')

    @include ('layout.footer')
  </body>
</html>
