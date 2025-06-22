<section>
    <h2>Formulário de Contato</h2>
    <form action="" method="post" class="form-container">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required> <br>
            
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required> <br>
            
    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="5" required></textarea><br><br><br>
            
    <button id="botao" type="submit">Enviar</button>
</form>

</section>

<script> 
 
    document.getElementById("botao").onclick = function() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var mensagem = document.getElementById("mensagem").value;

    if (nome === "" && email === "" && mensagem === "") {
        alert("Por favor, preencha todos os campos.");
    } else {
        
        if(nome == ""){
            alert("Infome seu nome!");
        }

        if(email == ""){
            alert("Infome seu email!");
        }
        
        if (!email.includes("@")) {
            alert("Por favor, insira um e-mail válido com '@'.");
        }

        if(mensagem == ""){
            alert("Infome sua mensagem!");
        }
    }

    if (nome !== "" && email !== "" && email.includes("@") && mensagem !== "") {
        alert("Mensagem enviada com sucesso!");
        
    }
}
</script>