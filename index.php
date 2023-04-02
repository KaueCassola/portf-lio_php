<?php
include 'url.php';
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauê Cassola - Portfolio/Web Site</title>  
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
  </head>
<body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img style="width:80px;" src="/img/mago.png" alt="">
              <p style="text-shadow: 4px 3px 5px rgba(199,81,236,0.67);color:#7945E6;font-weight: 600;" class="fs-4">Kauê Cassola</p>
              </a>
              <ul class="nav nav-pills d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <li class="nav-item"><a href="/index.php" class="nav-link" aria-current="page">Inicio</a></li>
                <li class="nav-item"><a href="/index.php/posts" class="nav-link">Posts</a></li>
                <li class="nav-item"><a href="/index.php/sobre" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="/index.php/contato" class="nav-link">Contato</a></li>
              </ul>
            </header></div>

            <?php
            // VARIAVEL QUE DEPENDENDO DA URL MUDA O CONTEUDO.
            echo $conteudo_;
            ?>
    <script src="/scripts/app_js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/index.php" class="nav-link" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="/index.php/posts" class="nav-link">Posts</a></li>
        <li class="nav-item"><a href="/index.php/sobre" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="/index.php/contato" class="nav-link">Contato</a></li>
      </ul>
      <p class="text-center text-muted">© 2023 Kaue Cassola</p>
      <p>Creditos de imagens ->></p>
            <a href="https://www.flaticon.com/br/stickers-gratis/livro-de-feiticos" title="livro de feitiços figurinhas">Livro de feitiços figurinhas criadas por Stickers - Flaticon</a>
          
    </footer>
  </div>

</body>

</html>