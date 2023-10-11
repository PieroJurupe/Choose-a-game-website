// Por favor funciona
function makeGptApiRequest(prompt) {
    // API GPT
    const apiUrl = 'https://api.openai.com/v1/engines/davinci-codex/completions';
  
    // VALOR KKK
    const apiKey = 'NO:TENEMOS KEY :D (AUN)';
    // Por favor acepta
    const requestData = {
      prompt: prompt,
      max_tokens: 100,
    };
  
    // funcion fetch
    fetch(apiUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apiKey}`,
      },
      body: JSON.stringify(requestData),
    })
      .then(response => response.json())
      .then(data => {
        // Reponse
        console.log('GPT API Response:', data.choices[0].text);
      })
      .catch(error => {
        // No por favor
        console.error('Error making the GPT API request:', error);
      });
  }
  
  // Llamado
  const prompt = 'Translate the following English text to French: "{text}"';
  makeGptApiRequest(prompt);
  
  //una prueba kkkkk
  completion = openai.ChatCompletion.create(
    model="gpt-3.5-turbo",
    messages=[
      {"role": "system", "content": "Are u there?"}, 
      {"role": "user", "content": "Can you say a jojoreference?"} //jojoreference

      
      // Se usara una funcion para traducirlo asi si se escribe en ingles no da errores
      //[{"role": "user", "content": 'Translate the following English text to French: "{text}"'}]


    ]
   //se genra una pregunta base y se llamara constantente
    /*response = openai.Completion.create(
        model="gpt-3.5-turbo-instruct",
        prompt="¿Me puedes ayuadr a elegir un juego?"
      )*/

  )
  