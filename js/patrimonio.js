const cadForm = document.getElementById("cad-patrimonio-form")
const msgAlertErroCad = document.getElementById("msgAlertErroCad")
const msgAlert = document.getElementById("msgAlert")
// const cadModal = new bootstrap.Modal(document.getElementById("modal"))
console.log(cadForm)

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    console.log(e)

    const dadosForm = new FormData(cadForm)


    const dados = await fetch("cad_patrimonio.php", {
        method: "POST",
        body: dadosForm 
    })

    const resposta = await dados.json()

    // console.log(resposta)

    if(resposta['erro']){
        msgAlertErroCad.innerHTML = resposta['msg']
    }else{
        msgAlert.innerHTML = resposta['msg']
        cadForm.reset();
        // cadModal.hide()
    }
})
    
