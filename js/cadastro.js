const cadForm = document.getElementById("cad-usuario-form")


cadForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    const dadosForm = new FormData(cadForm)

    const dados = await fetch("cad_usuarios.php", {
        method: "POST",
        body: dadosForm 
    })

    const resposta = await dados.json()

    console.log(resposta)
})
    
