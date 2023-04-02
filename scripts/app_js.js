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