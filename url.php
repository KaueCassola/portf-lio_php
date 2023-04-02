<?php
    //var_dump($_SERVER['REQUEST_URI']);

    /* $URL ESTA PEGANDO O PATH EX.'/INDEX.PHP/ITEMS',
    O PROTOCOL TA PEGANDO HTTP PARA CONVERTER EM HTTPS,
    SWITCH TA ESCOLHENDO OS CASOS DA URL PARA ESCOLHER O CONTEUDO DAS PAGINAS.
    */
    $URL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //echo "<h1>". $URL."</h1><br>";
    
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] === 443 ? "https://" : "http://";
    if($protocol == "http://"){
        header("Location: https://kauecassola.ga/index.php");
    }
    switch($URL){
        case "/";
        case "/index.php";
            $conteudo_ = '<main>
            <div class="px-4 my-5 text-center">
                    <h1 class="display-5 fw-bold text-body-emphasis">Bem vindo ao meu Portfólio/Web</h1>
                        <div class="col-lg-6 mx-auto">
                            <p class="lead mb-4">
                                Vou postar alguns estudos e projetos que ando acompanhando com algumas matérias na area de ADS,
                                deixando aberto o site para referencias relacionas essa area complexa de conteudo 
                                ou contatos para serviços de TI como logicá de programação, algoritimo, banco de dados, 
                                softwares, redes, iot e ia entre outras areas;
                            </p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="/index.php/contato" type="button" class="btn btn-primary btn-lg px-4 gap-3">Contato</a>
                                <a href="/index.php/posts" type="button" class="btn btn-outline-secondary btn-lg px-4">Posts</a>
                            </div>
                        </div>
                    </div>
            </main>';
            break;

        case "/index.php/sobre";
            $conteudo_ = '<div class="container px-4" id="custom-cards">
            <h2 class="pb-2 border-bottom">Sobre mim</h2>
            <p>
            Bom tenho 25 anos gosto de ficar fazendo pesquisa na internet até achar aquilo que realmente me ajude de alguma forma alcançar as soluções de projetos em que acho que consigo realizar para aperfeiçoar meu estudo, e não só ficar de teoria. Sempre procuro cursos online de engenharia, arquitetura e softwares para me atualizar o máximo, pois atualmente é primordial se manter atualizado dos produtos que se encontrão em alta.
            </p>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              <div class="col">
                <div id="card1" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Sistemas operacional em questão de ter mais convívio Windows também por ser fácil a adotação na utilização de softwares, mas Linux as distribuições em que estudo são Red Hat e Debian.</h3>
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div id="card2" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Gosto de estudar linguagens de programação e suas funções, mesmo sabendo que os paradigmas são mais importantes.</h3>
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div id="card3" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Curto jogos FPS e Ação online, já desisti do LOL(Mentira) :P</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>';
            break;

        case "/index.php/posts";
            $conteudo_ = "PAGINA DE POSTS ESTA EM CONSTRUÇÃO";
            break;

        case "/index.php/contato";
                $conteudo_ = '<main>
                <div id="painel_contato">
                    <div id="painel_contato2">
                        <h1>Deixe seu contato</h1>
                        <p>Enviaremos informações o mais rápido possivel.</p>
                            <form method="post">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome">
                            <label for="numero">Numero</label>
                            <input type="tel" name="numero" id="numero">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"><br>
                            <input type="submit" value="Enviar contato" onclick="click_contato()">
                            </form>
                        <p id="resposta"></p>
                    </div>
                </div>
            </main>';
            break;

        default;
            echo "<h1>busca não encotrada.</h1>";
            break;
    }
?>