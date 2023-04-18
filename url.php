<?php
require('./view.php');

    //var_dump($_SERVER['REQUEST_URI']);

    /* $URL ESTA PEGANDO O PATH EX.'/INDEX.PHP/ITEMS',
    O PROTOCOL TA PEGANDO HTTP PARA CONVERTER EM HTTPS,
    SWITCH TA ESCOLHENDO OS CASOS DA URL PARA ESCOLHER
    QUAL PROPRIEDADE DO OBJETO VIEW EXIBIR.
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
        $view = new view_site();
        $conteudo_ = $view->index_();
            break;

        case "/index.php/sobre";
        $view = new view_site();
        $conteudo_ = $view->sobre_();
            break;

        case "/index.php/posts";
        $view = new view_site();
        $conteudo_ = $view->posts_();
            break;

        case "/index.php/contato";
        $view = new view_site();
        $conteudo_ = $view->contato_();
            break;

        default;
            echo "<h1>busca não encotrada.</h1>";
            break;
    }
?>