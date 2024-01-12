const cadForm = document.getElementById("cad-patrimonio-form");
const msgAlertErroCad = document.getElementById("msgAlertErroCad");
const msgAlert = document.getElementById("msgAlert");

cadForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const dadosForm = new FormData(cadForm);

  try {
    const dados = await fetch("cad_patrimonio.php", {
      method: "POST",
      body: dadosForm,
    });

    if (dados.ok) {
      const resposta = await dados.json();

      if (resposta["erro"]) {
        msgAlertErroCad.innerHTML = resposta["msg"];
      } else {
        msgAlert.innerHTML = resposta["msg"];
        cadForm.reset();
      }
    } else {
      console.error("Erro na requisição:", dados.status, dados.statusText);
    }
  } catch (erro) {
    console.error("Erro durante a requisição:", erro);
  }
});
