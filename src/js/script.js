function submitForm() {
    var formulario = document.getElementById('meuFormulario');
    
    var opcoes = ["vasco", "flamengo", "botafogo", "fluminense", "saopaulo", "palmeiras", "corinthians", "santos"];
    var opcaoMarcada = opcoes.some(opcao => document.querySelector(`input[name="time"][value="${opcao}"]`).checked);

    if (opcaoMarcada) {
      formulario.submit();
    } else {
      alert("Nenhum voto computado, favor selecione um time.");
    }
  }