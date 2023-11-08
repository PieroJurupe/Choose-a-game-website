import axios from 'axios';
export default async function handler(req, res) {
	if (req.method === 'GET') {
		const options = {
			method: 'GET',
			url: 'https://gaming-news.p.rapidapi.com/news',
			headers: {
				'x-rapidapi-host': 'gaming-news.p.rapidapi.com',
				'x-rapidapi-key': "G8x5kPRCW6bYOHJJ3cVXT3BlbkFasf4658"
			}
		};
		axios
			.request(options)
			.then(function (response) {
				res.status(200).json(response.data);
			})
			.catch(function (error) {
				console.error(error);
			});
	} else {
		res.status(400);
	}
}