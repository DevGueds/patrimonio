const cadForm = document.getElementById("cad-usuario-form")
const msgAlertErroCad = document.getElementById("msgAlertErroCad")
// console.log(cadForm)

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    // console.log(e)

    const dadosForm = new FormData(cadForm)


    const dados = await fetch("cad_usuarios.php", {
        method: "POST",
        body: dadosForm 
    })

    const resposta = await dados.json()

    console.log(resposta)

    if(resposta['erro']){
        msgAlertErroCad.innerHTML = resposta['msg']
    }else{
        
    }
})
    
