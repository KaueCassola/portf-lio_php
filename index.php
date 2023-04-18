<?php
include 'url.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauê Cassola - Portfolio/Web Site</title>  
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/style/style.css">
  </head>
<body><script src="/scripts/app_js.js"></script>
            <header class="container d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img style="width:80px;" src="/img/mago.png" alt="">
              <p style="text-shadow: 4px 3px 5px rgba(199,81,236,0.67);color:#7945E6;font-weight: 600;font-size: 40px;" class="mb-2">Kauê Cassola</p>
              </a>
              <ul class="nav nav-pills d-flex align-items-center text-decoration-none">
                <li class="nav-item"><a href="/index.php" class="nav-link" aria-current="page">Inicio</a></li>
                <li class="nav-item"><a href="/index.php/posts" class="nav-link">Posts</a></li>
                <li class="nav-item"><a href="/index.php/sobre" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="/index.php/contato" class="nav-link">Contato</a></li>
              </ul>
            </header>

            <?php
            // VARIAVEL QUE DEPENDENDO DA URL MUDA O CONTEUDO.
            echo $conteudo_;
            ?> 


    <footer class="container py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/index.php" class="nav-link" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="/index.php/posts" class="nav-link">Posts</a></li>
        <li class="nav-item"><a href="/index.php/sobre" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="/index.php/contato" class="nav-link">Contato</a></li>
      </ul>
      <div id="rede-sociais" class="zoom">
        <a href="https://pt-br.facebook.com/kaue.cassola/" target="_blank" rel="noopener noreferrer"><img src="../img/rede-social/Facebook.png" alt="rede social facebook"></a>
        <a href="https://www.instagram.com/kaue_cassola/" target="_blank" rel="noopener noreferrer"><img src="../img/rede-social/Instagram.png" alt="rede social instagram"></a>
        <a href="https://br.linkedin.com/in/kau%C3%AA-cassola" target="_blank" rel="noopener noreferrer"><img src="../img/rede-social/LinkedIn.png" alt="rede social linkedin"></a>
        <a href="https://api.whatsapp.com/send?phone=5511945830731&text=Pode%20deixa%20sua%20mensagem" target="_blank" rel="noopener noreferrer"><img src="../img/rede-social/WhatsApp.png" alt="rede social whatsapp"></a>
        <a href="https://www.youtube.com/@TutoriaisEmHD100/" target="_blank" rel="noopener noreferrer"><img src="../img/rede-social/Youtube.png" alt="rede social youtube"></a>
      </div>
      <p class="text-center text-muted">© 2023 Kaue Cassola</p>
      <?php
        $txt = "visualizacao.txt";
        $ler_arq = fopen($txt, 'r');
        $leitura = fgets($ler_arq);
        fclose($ler_arq);
        $atualiza = fopen($txt, 'w');
        fwrite($atualiza, $leitura + 1);
        echo "<p>Contagem de visualizações: ". $leitura. '</p>';
      ?>
      <p>Creditos de imagens ->></p>
            <p><a href="https://www.flaticon.com/br/stickers-gratis/livro-de-feiticos" title="livro de feitiços figurinhas">Livro de feitiços figurinhas criadas por Stickers - Flaticon</a>
          Imagem de <a href="https://br.freepik.com/vetores-gratis/desenvolvedores-web-desenhados-a-mao_12063795.htm#query=linux&position=13&from_view=search&track=sph">Freepik</a>
          <a href="https://br.freepik.com/fotos-gratis/vista-traseira-do-programador-trabalhando-a-noite-toda_5698334.htm#query=linux&position=27&from_view=search&track=sph">Imagem de pressfoto</a> no Freepik
          <a href="https://br.freepik.com/vetores-gratis/computador-tecnologia-isometric-icone-servidor-sala-digital-dispositivo-jogo-elemento-para-desenho-pc-laptop_4103157.htm#query=linux&position=40&from_view=search&track=sph">Imagem de fullvector</a> no Freepik
          <a href="https://br.freepik.com/vetores-gratis/rodovia-da-cidade-moderna-em-lampadas-de-rua-luz-neon-cartoon-ilustracao-vetorial_4394141.htm#page=2&query=cidade%20digital&position=14&from_view=keyword&track=ais">Imagem de vectorpouch</a> no Freepik
  </p></footer>
 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>