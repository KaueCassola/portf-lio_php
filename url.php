<?php
    //var_dump($_SERVER['REQUEST_URI']);

    /* $URL ESTA PEGANDO O PATH EX.'/INDEX.PHP/ITEMS',
    O PROTOCOL TA PEGANDO HTTP PARA CONVERTER EM HTTPS,
    SWITCH TA ESCOLHENDO OS CASOS DA URL PARA ESCOLHER O CONTEUDO DAS PAGINAS.
    */
    $URL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //echo "<h1>". $URL."</h1><br>";
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] === 443 ? "https://" : "http://";
    //if($protocol == "http://"){
    //    header("Location: https://kauecassola.ga/index.php");
    //}
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
                                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Contato</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Posts</button>
                            </div>
                        </div>
                    </div>
            </main>';
            break;

        case "/index.php/sobre";
            $conteudo_ = "PAGINA DE SOBRE ESTA EM CONSTRUÇÃO";
            break;

        case "/index.php/posts";
            $conteudo_ = "PAGINA DE POSTS ESTA EM CONSTRUÇÃO";
            break;

        case "/index.php/contato";
                $conteudo_ = '<main>
                <div id="painel_contato">
                    <div id="painel_contato2">
                        <h1>App_</h1>
                        <p>Registro de contato API php&mysql</p>
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