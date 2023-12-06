
	/* HEADER Y FOOOTER DINAMICO*/

	const header = document.querySelector("header");

	header.innerHTML = `
	<a href="index.html" class="logo">FYG</a>
	<ul class="navlist">
		<li><a href="misjuegos.html">Mis juegos</a></li>
		<li><a href="trends.html">Trends</a></li>
		<li><a href="Nosotros.html">Nosotros</a></li>
		<li><a href="indexBlog.html">Blog</a></li>
	</ul>
	<ul class="login-y-registro">
			
			<li class="registro-boton"><a class="register-a" href="registro.php">Registrate</a></li>
			<li class="registro-boton"><a class="register-a" href="login.php">Login</a></li>

	</ul>

	<div class="bx bx-menu" id="menu-icon"></div>
			`;

	let menu = document.querySelector('#menu-icon');
	let navlist = document.querySelector('.navlist')

	menu.onclick = () => {
		menu.classList.toggle('bx-x');
		navlist.classList.toggle('open');
	};

	const sr = ScrollReveal({
		distance: '65px',
		duration: 2600,
		delay: 450,
		reset: true
	})

	sr.reveal('.hero-text', { delay: 200, origin: 'top' })
	sr.reveal('.hero-img', { delay: 450, origin: 'top' })
	sr.reveal('.icons', { delay: 500, origin: 'left' })
	sr.reveal('.scroll-down', { delay: 500, origin: 'right' })







	/* TODO LO QUE VIENE ES PARA EL CHATBOT */
	function getCurrentTimestamp() {
		return new Date();
	}
	function renderMessageToScreen(args) {
		//variables
		let displayDate = (args.time || getCurrentTimestamp()).toLocaleString('en-IN', {
			month: 'short',
			day: 'numeric',
			hour: 'numeric',
			minute: 'numeric',
		});
		let messagesContainer = $('.messages');
		// init 
		let message = $(`
		<li class="message ${args.message_side}">
			<div class="avatar"></div>
			<div class="text_wrapper">
				<div class="text">${args.text}</div>
				<div class="timestamp">${displayDate}</div>
			</div>
		</li>
		`);
		// agregar mensaje
		messagesContainer.append(message);
		// animacion
		setTimeout(function () {
			message.addClass('appeared');
		}, 0);
		messagesContainer.animate({ scrollTop: messagesContainer.prop('scrollHeight') }, 300);
	}
	/**
	mostrar el mensaje de usuario */
	function showUserMessage(message, datetime) {
		renderMessageToScreen({
			text: message,
			time: datetime,
			message_side: 'right',
		});
	}
	/**
	mostrar mensaje de bot */
	function showBotMessage(message, datetime) {
		renderMessageToScreen({
			text: message,
			time: datetime,
			message_side: 'left',
		});
	}
	/**
	al hacer click en enviar mandar mensaje */
	// Variables para almacenar las respuestas
	let respuesta1, respuesta2, respuesta3, respuesta4;
	function showMultipleChoiceQuestion(question, options, callback) {
		// Mostrar la pregunta
		showBotMessage(question);
		// Crear un div para las opciones
		let optionsDiv = $('<div class="options-container"/>');
		// Para cada opción, crear un botón
		options.forEach(function (option, index) {
			let optionButton = $(`<button class="option-button">${option}</button>`);
			optionButton.on('click', function (e) {
				// Cuando se hace clic en una opción, mostrar la elección del usuario y deshabilitar todos los botones de opción
				showUserMessage(option);
				$('.option-button').attr('disabled', 'disabled');

				// Almacenar la respuesta del usuario
				if (callback) {
					callback(option);
				}
			});
			optionsDiv.append(optionButton);
		});
		// Agregar las opciones a la ventana de mensajes
		$('.messages').append(optionsDiv);
	}
	function showAnswersInConsole() {
		console.log("Respuesta 1: " + respuesta1);
		console.log("Respuesta 2: " + respuesta2);
		console.log("Respuesta 3: " + respuesta3);
		console.log("Respuesta 4: " + respuesta4);
		// Llama a getCompletion después de mostrar las respuestas
		getCompletion();
	}
	const API_KEY = 'AQUI VA LA KEY';
	// Función para conectar
	async function getCompletion() {
		try {
			const res = await fetch('https://api.openai.com/v1/chat/completions', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'Authorization': 'Bearer ' + API_KEY
				},
				body: JSON.stringify({
					model: 'gpt-3.5-turbo',
					messages: [
						{
							role: "system",
							content: "Eres un asistente inteligente que recomienda videojuegos."
						},
						{
							role: "user",
							content: `Recomiendame cuatro videojuegos ten en cuenta que al jugar busco ${respuesta1}, ademas de disfrutar los juegos mas por ${respuesta2}, en cuanto a si el juego es nuevo o viejo opino al 100% - ${respuesta3} - y en los juegos siempre me fijo en ${respuesta4} no entres en detalles de los juegos solo dame los nombres de los juegos e inicia con el siguiente texto: Los juegos que yo te recomendaria son:`
						}
					],
					max_tokens: 120,
				})
			});
			const data = await res.json();

			// Accede a la respuesta del modelo
			const modelResponse = data.choices[0].message.content;

			showBotMessage(modelResponse); // Muestra la respuesta del modelo como un mensaje del bot
		} catch (error) {
			console.error('Error:', error);
		}
		}
		$('#send_button').on('click', function (e) {
			// obtener el mensaje y resetearlo
			showUserMessage($('#msg_input').val());
			$('#msg_input').val('');

			// mostrar mensaje del bot
			setTimeout(function () {
				showBotMessage("Hola, para ayudarte a elegir un videojuego te hare un breve test:)", getCurrentTimestamp());
				// Agregar una pausa antes de la primera pregunta
				setTimeout(function () {
					showMultipleChoiceQuestion('Cuando juegas videojuegos ¿Que buscas?', ['Relajarme', 'Competir', 'Jugar con amigos', 'Algo desafiante'], function (answer) {
						respuesta1 = answer;
						setTimeout(function () {
							showMultipleChoiceQuestion('¿Los juegos los disfsrutas por?', ['Su jugabilidad', 'Su historia', 'Sus graficos', 'Sus mecanicas'], function (answer) {
								respuesta2 = answer;
								setTimeout(function () {
									showMultipleChoiceQuestion('¿Que te importa mas en un juego?', ['Que sea nuevo', 'Que sea retro', 'Me da igual'], function (answer) {
										respuesta3 = answer;
										setTimeout(function () {
											showMultipleChoiceQuestion('¿Al escoger un juego por que te guias?', ['Que sea popular', 'Que tenga multiplayer', 'Que tenga buenas reseñas', 'Que sea poco conocido'], function (answer) {
												respuesta4 = answer;
												showAnswersInConsole(); // Mostrar las respuestas en la consola
											});
										}, 1000);
									});
								}, 1000);
							});
						}, 1000);
					});
				}, 3000); // 3000 milisegundos = 3 segundos
				
			}, 300);
			
		});
		/**
		 * mostrar mensaje inicial
		 */
		let opciones = [
			"Minecraft",
			 "Call Of Duty",
			 "Valorant",
			 "League Of Legends",
			 "Super Mario Wonder",
			 "The Legend Of Zelda Breath of the wild",
			 "Gran Turismo",
			 "Pokemon: Escarlata y Purpura",
			 "Dragon Ball fighterZ",
			 "God of war: Ragnarok",
			 "Bloons TD6",
			 "Cuphead",
			 "Stardey Valley",
			 "Portal 2",
			 "Pizza Tower",
			 "Terraria"
		 ];
		 
		function obtenerDosRecomendaciones() {			
	let indices = [];
	while(indices.length < 2){
		let indiceAleatorio = Math.floor(Math.random() * opciones.length);
		if(!indices.includes(indiceAleatorio)){
			indices.push(indiceAleatorio);
		}
	}
	let opcionSeleccionada1 = opciones[indices[0]];
	let opcionSeleccionada2 = opciones[indices[1]];

	return [opcionSeleccionada1, opcionSeleccionada2];
}

function showAnswersInConsole() {
	let recomendaciones = obtenerDosRecomendaciones();
	console.log("Recomendación 1: " + recomendaciones[0]);
	console.log("Recomendación 2: " + recomendaciones[1]);
	setTimeout(function() {
		showBotMessage("Los videojuegos que te recomiendo son: "+ recomendaciones.join(' y '));
	}, 2000);
}

		$(window).on('load', function () {
			showBotMessage('Bienvenido :D');
		});
		$('#msg_input').on('keypress', function (e) {
			if (e.which == 13) {  // Detecta la tecla Enter
				$('#send_button').click();  // Simula un clic en el botón de enviar
				return false;  // Previene la acción por defecto de la tecla Enter
			}
		});

