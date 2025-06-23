
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<section class="container4 my-5">
  <h2 class="text-center mb-4">Formulário de Contato</h2>

  <div id="alerta"></div>

  <form class="form-container">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(00) 91234-5678" required>
    </div>

    <div class="mb-3">
      <label for="origem" class="form-label">Como nos conheceu?</label>
      <select class="form-select" id="origem" name="origem" required>
        <option value="">Selecione uma opção</option>
        <option value="Instagram">Instagram</option>
        <option value="Facebook">Facebook</option>
        <option value="YouTube">YouTube</option>
        <option value="Site">Site</option>
        <option value="Igreja">Igreja</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="aniversario" class="form-label">Data de Aniversário:</label>
      <input type="date" id="aniversario" name="aniversario" class="form-control" required>
    </div>

    <div class="mb-4">
      <label for="mensagem" class="form-label">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="5" class="form-control" placeholder="Digite sua mensagem" required></textarea>
    </div>

    <div class="text-center">
      <button class="aLeia rounded-pill px-4 py-2" id="botao" type="submit">Enviar</button>
    </div>
  </form>
</section>

<script>
  document.getElementById("botao").onclick = function (e) {
    e.preventDefault();

    const alerta = document.getElementById("alerta");
    alerta.innerHTML = "";

    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefone = document.getElementById("telefone").value.trim();
    const origem = document.getElementById("origem").value.trim();
    const aniversario = document.getElementById("aniversario").value.trim();
    const mensagem = document.getElementById("mensagem").value.trim();

    function mostrarAlerta(msg, tipo = "danger") {
      alerta.innerHTML = `
        <div class="alert alert-${tipo} alert-dismissible fade show" role="alert">
          ${msg}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>`;
    }

    
    if (!nome || nome.length < 3) {
      mostrarAlerta("Informe um nome válido com pelo menos 3 caracteres.");
      return;
    }

    if (!email || email.length < 5) {
      mostrarAlerta("Informe um email válido com pelo menos 5 caracteres.");
      return;
    }

    if (!email) {
      mostrarAlerta("O campo de e-mail está vazio.");
      return;
    }
    if (!email.includes("@")) {
      mostrarAlerta("O e-mail precisa conter o caractere <strong>@</strong>.");
      return;
    }
    if (!email.includes(".")) {
      mostrarAlerta("O e-mail precisa conter um ponto (.) após o <strong>@</strong>.");
      return;
    }

   
    const numeros = telefone.replace(/\D/g, ''); 
    if (numeros.length < 10) {
      mostrarAlerta("Informe um telefone válido com DDD (2 dígitos) e número completo.");
      return;
    }

    const ddd = numeros.substring(0, 2);
    let restoNumero = numeros.substring(2);

    
    if (restoNumero.startsWith('9')) {
      restoNumero = restoNumero.substring(1);
    }

    if (restoNumero.length !== 8) {
      mostrarAlerta("O número deve conter exatamente 8 dígitos, excluindo o DDD e o 9.");
      return;
    }


    if (!origem) {
      mostrarAlerta("Por favor, selecione como nos conheceu.");
      return;
    }

    
    const hoje = new Date();
    const dataNasc = new Date(aniversario);

    if (isNaN(dataNasc.getTime())) {
      mostrarAlerta("Data de nascimento inválida.");
      return;
    }

    if (dataNasc > hoje) {
      mostrarAlerta("A data de nascimento não pode ser no futuro.");
      return;
    }

    let diffAnos = hoje.getFullYear() - dataNasc.getFullYear();
    const mesAtual = hoje.getMonth();
    const diaAtual = hoje.getDate();
    const mesNasc = dataNasc.getMonth();
    const diaNasc = dataNasc.getDate();

    
    if (!mensagem || mensagem.length < 5) {
      mostrarAlerta("Escreva uma mensagem mais completa.");
      return;
    }

    mostrarAlerta("Mensagem enviada com sucesso!", "success");

    setTimeout(() => {
      document.querySelector("form").submit();
    }, 2000);
  };
</script>
