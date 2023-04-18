function click_contato(){
    event.preventDefault();

    nome = document.getElementById('nome').value;
    numero = document.getElementById('numero').value;
    email = document.getElementById('email').value;

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        document.getElementById('resposta').innerHTML = this.responseText;
    }
    xhttp.open("POST", "../app_.php", true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nome="+nome+"&numero="+numero+"&email="+email+"&post_contato_key=kaue");
    alert('Contato registrado.');
    limpa_form();
}

function limpa_form(){
    document.getElementById('nome').value = '';
    document.getElementById('numero').value = '';
    document.getElementById('email').value = '';
}


    async function posts_() {
        const response = await fetch("../app_.php?get_post_key=kaue");
        const jsonData = await response.json();
        for (let index = 0; index < jsonData.length; index++) {
            const post = jsonData[index];
            const h2 = document.createElement("h2");
            const p = document.createElement("p");
            const p2 = document.createElement("p");
            p.classList.add("lead");
            p2.classList.add("lead");
            const titulo = document.createTextNode(post.titulo);
            const data_post = document.createTextNode(post.dt_post);
            const conteudo = document.createTextNode(post.conteudo);
            //html_post ="<h2 class='blog-post-title mb-1'>"+post.titulo+"</h2><p class='blog-post-meta'>"+post.dt_post+"</p><p>"+post.conteudo+"</p><hr>";
            h2.appendChild(titulo)
            p.appendChild(data_post)
            p2.appendChild(conteudo)
            document.getElementById('blog').appendChild(h2)
            document.getElementById('blog').appendChild(p)
            document.getElementById('blog').appendChild(p2)
        }
      }
