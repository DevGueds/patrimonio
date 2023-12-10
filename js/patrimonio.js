const cadFormPatrimonio = document.getElementById("cad-patrimonio-form")
const msgAlertErroCadPatrimonio = document.getElementById("msgAlertErroCadPatrimonio")
const msgAlertPatrimonio = document.getElementById("msgAlertPatrimonio")
// const cadModal = new bootstrap.Modal(document.getElementById("modal"))
console.log(cadFormPatrimonio)

cadFormPatrimonio.addEventListener("submit", async (e) => {
    e.preventDefault()

    console.log(e)

    const dadosFormPatrimonio = new FormData(cadFormPatrimonio)


    const dados = await fetch("cad_patrimonio.php", {
        method: "POST",
        body: dadosFormPatrimonio 
    })

    const resposta = await dados.json()

    // console.log(resposta)

    if(resposta['erro']){
        msgAlertErroCadPatrimonio.innerHTML = resposta['msg']
    }else{
        msgAlertPatrimonio.innerHTML = resposta['msg']
        cadFormPatrimonio.reset();
        // cadModal.hide()
    }
})
    
