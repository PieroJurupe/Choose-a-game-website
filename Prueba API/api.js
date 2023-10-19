//Para no llamar la llave a cada rato xd
const API_KEY = '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'
//funcion  para conectar
async function getCompletion() {
    const res = await fetch('https://api.openai.com/v1/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + API_KEY
        },
        body: JSON.stringify({
            model: 'text-davinci-003',
            prompt: "Recomiendame tres juegos de aventura",
            max_tokens: 5,
        })
    })

    const data = await res.json()
    console.log(data)
}
getCompletion()