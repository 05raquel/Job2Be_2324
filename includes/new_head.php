<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEBM-IST - Núcleo de Engenharia Biomédica do IST</title>
  <meta name="description" content="Site Oficial do Núcleo de Engenharia Biomédica do Instituto Superior Técnico.">
  <meta name="author" content="NEBM 23/24">
  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon-23.png"/>

  <!--Styles-->

  <link rel="stylesheet" type="text/css" href="assets/styles/style_geral.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_menu.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_footer.css">

    <!-- styles das restantes páginas -->
  <link rel="stylesheet" type="text/css" href="assets/styles/style_homepage.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_repositorio.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_calendario.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_sobre.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style_equipa2324.css">

    <!-- fonte dos títulos -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />

    <!-- icon do menu responsive!! -->
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- icons do footer -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <!--Scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.11/semantic.min.js"></script>
  <script type='text/javascript'>

  $(document).ready(function() {
    var pathname = window.location.pathname;
    pathname=pathname.substring(pathname.lastIndexOf('/')+1);
    $('.menu a[href="'+pathname+'"]').addClass('active');
  })

  $(document).ready(function() {
    $('.ui.dropdown')
    .dropdown();
  })

  $(document).ready(function() {
    $('.menu .item')
    .tab();
  })

  </script>
</head>
