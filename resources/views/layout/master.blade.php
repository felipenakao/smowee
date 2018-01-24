
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- URL FACEBOOK -->
      <meta property="og:url"                content="{{ $ogUrl }}" />
      <!-- TIPO DE POST (WEBSITE ou ARTICLE) FACEBOOK -->
      <meta property="og:type"               content="{{ $ogType }}" />
      <!-- TITULO FACEBOOK -->
      <meta property="og:title"              content="{{ $ogTitle }}" />
      <!-- DESCRICAO FACEBOOK -->
      <meta property="og:description"        content="{{ $ogDescription }}" />
      <!-- IMAGEM FACEBOOK -->
      <meta property="og:image"              content="{{ $ogImage }}" />
      <meta  />

      <title>Smowee 420 - Queimando Preconceitos</title>

      <!-- Favicon -->
      <link rel="icon" href="/img/favicon.ico" sizes="16x16">

      <!-- Bootstrap Core CSS -->
      <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

      <!-- Theme CSS -->
      <link href="/css/smowee.css" rel="stylesheet">
      <link href="/css/news.css" rel="stylesheet">
      <link href="/css/sorteio.css" rel="stylesheet">


  </head>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112146516-1"></script>

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-112146516-1');
  </script>

  <!-- Facebook Comments -->
  <div id="fb-root"></div>

  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1929564893964363';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <body id="page-top" class="index">
    @include('layout.nav')

    @yield('content')

    @include ('layout.footer')
  </body>
</html>
