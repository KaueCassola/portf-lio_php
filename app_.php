<?php

header("Content-Type: application/json");
    // CONEXÃO COM BANCO DE DADOS
    $conn = new PDO('mysql:host=localhost;dbname=api_php', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* REQUISIÇÃO GET CONTATOS
        GET_CONTATO_KEY MANDAR VIA GET PARA CONFIRMAÇÃO DE CONHECIMENTO
        GET_ID PARA PEGAR UM CONTATO ESPECIFICO
    */
    $key = "kaue";
if(isset($_GET['get_contato_key'])){
    if($_GET['get_contato_key'] == $key){
        // CASO ENTRAR COM ID
        if(isset($_GET["id"])){
            try {
                $stmt = $conn->prepare('SELECT * FROM contatos WHERE id = :id');
                $stmt->bindParam(':id', $_GET["id"], PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                echo json_encode($row);
            }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            }
        }else{
            // CASO NÃO ENTRE COM NENHUM GET_ID RETORNAR TODOS CONTATOS
            $contato_array = array();
            $consulta = $conn->query('SELECT * FROM contatos;');
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                array_push($contato_array, $linha);
            }
            echo json_encode($contato_array);
        }
    }else{
        echo "fail key";
    }
}

    /*  REQUISIÇÃO GET PARA POSTS
        GET_POSTS_KEY MANDAR VIA POST PARA INSERIR
    */
if(isset($_GET['get_post_key'])){
    if($_GET['get_post_key'] == $key){
            $posts_array = array();
            $consulta = $conn->query('SELECT * FROM posts;');
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                array_push($posts_array, $linha);
            }
            echo json_encode($posts_array);
    }else{
        echo "fail key";
    }
}

    /*  REQUISIÇÃO POST PARA POSTS
        POST_POSTS_KEY MANDAR VIA POST PARA INSERIR
    */
if(isset($_POST['post_posts_key'])){
    if($_POST['post_posts_key'] == $key){
        $conteudo = [
            'titulo' => $_POST['titulo'],
            'conteudo' => $_POST['conteudo']
        ];
        $stmt= $conn->prepare('INSERT INTO posts (titulo, conteudo, dt_post) VALUES (:titulo, :conteudo, NOW())');
        $stmt->execute($conteudo);
        echo "sucess";
    }else{
        echo "fail key";
    }
}

    /*  REQUISIÇÃO POST CONTATOS
        POST_CONTATO_KEY MANDAR VIA POST PARA INSERIR
    */
if(isset($_POST['post_contato_key'])){
        if($_POST['post_contato_key'] == $key){
            $contato = [
                'nome' => $_POST['nome'],
                'numero' => $_POST['numero'],
                'email' => $_POST['email'],
            ];
            $stmt= $conn->prepare('INSERT INTO contatos (nome, numero, email) VALUES (:nome, :numero, :email)');
            $stmt->execute($contato);
            echo "sucess";
        }else{
            echo "fail key";
        }
}
?>