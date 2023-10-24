/* async function getCompletion() {
    const res = await fetch('https://api.openai.com/v1/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + API_KEY
        },
        body: JSON.stringify({
            model: 'text-davinci-003',
            prompt: "Recomiendame tres juegos de aventura no agregues detalles solo los nombres",
            max_tokens: 20,
        })
    })

    const data = await res.json()
    console.log(data)
}
getCompletion()
HEAD */