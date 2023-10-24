/* //Para no llamar la llave a cada rato 
const API_KEY = 'AQUI VA EL API'
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
HEAD
 */
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
$('#send_button').on('click', function (e) {
	// obtener el mensaje y mandarlo
	showUserMessage($('#msg_input').val());
	$('#msg_input').val('');

	// mostrar mensaje del bot
	setTimeout(function () {
		showBotMessage(randomstring());
	}, 300);
});

/**
prueba para el bot (mensajes randoms) */
function randomstring(length = 20) {
	let output = '';

	// random
	var randomchar = function () {
		var n = Math.floor(Math.random() * 62);
		if (n < 10) return n;
		if (n < 36) return String.fromCharCode(n + 55);
		return String.fromCharCode(n + 61);
	};

	while (output.length < length) output += randomchar();
	return output;
}

/**
 * mostrar mensaje inicial
 */
$(window).on('load', function () {
	showBotMessage('Hola soy Dios :D');
});

