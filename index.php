<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Me</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #e3e6fc; /* Light background */
			font-family: 'Arial', sans-serif;
			color: #212529;
		}
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}
		.card {
			background: #ffffff;
			border-radius: 20px;
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
			padding: 20px;
			max-width: 900px;
			display: flex;
			flex-wrap: wrap;
			overflow: hidden;
		}
		.profile-pic {
			flex: 1;
			max-width: 45%;
		}
		.profile-pic img {
			width: 100%;
			border-radius: 10px;
		}
		.info-section {
			flex: 1;
			padding: 20px;
		}
		.info-section h1 {
			font-weight: bold;
			color: #d90467; /* Highlight color */
		}
		.info-section h2 {
			font-size: 1.2rem;
			color: #6c757d;
		}
		.info-section p {
			font-size: 1rem;
			color: #495057;
			margin-top: 20px;
		}
		.btn-custom {
			background-color: #d90467;
			color: #fff;
			border: none;
			padding: 10px 20px;
			margin-top: 20px;
		}
		.btn-custom:hover {
			background-color: #b30351;
		}
		.social-links a {
			color: #d90467;
			font-size: 1.5rem;
			margin-right: 15px;
			text-decoration: none;
		}
		.social-links a:hover {
			color: #b30351;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<!-- Profile Picture -->
			<div class="profile-pic">
				<img src="profile-pic.jpg" alt="Your Profile Picture">
			</div>
			<!-- Info Section -->
			<div class="info-section">
				<h1>Hello, I’m Teofil Ian Rey Odanga</h1>
				<h2>College of Computer Studies Program Coordinator</h2>
				<p>I am an IT Professor at First City Providential College, with experience as an IT Technical Support Specialist at Sykes Enterprises, Inc. and IT Helpdesk Support. Currently based in San Jose del Monte, Bulacan, I hail from Zamboanga City.</p>
				<p>Contact me at: <strong>your-email@example.com</strong></p>
				<p><strong>Phone:</strong> <a href="tel:+1234567890">+123 456 7890</a></p>

				<button class="btn btn-custom">Get in Touch!</button>
				<div class="social-links mt-3">
					<a href="https://www.facebook.com/teofilianrey" target="_blank"><i class="bi bi-facebook"></i></a>
					<a href="#"><i class="bi bi-twitter"></i></a>
					<a href="#"><i class="bi bi-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap Icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script type="module">
		import Chatbox from 'https://cdn.jsdelivr.net/npm/@chaindesk/embeds@latest/dist/chatbox/index.js';

		const widget = await Chatbox.initBubble({
			agentId: 'cm4n8225f0ax262aeapa0xkbp',
			
			// optional 
			// If provided will create a contact for the user and link it to the conversation
			contact: {
			firstName: 'John',
			lastName: 'Doe',
			email: 'customer@email.com',
			phoneNumber: '+33612345644',
			userId: '42424242',
			},
			// optional
			// Override initial messages
			initialMessages: [
			'Hello Georges how are you doing today?',
			'How can I help you ?',
			],
			// optional
			// Provided context will be appended to the Agent system prompt
			context: "The user you are talking to is John. Start by Greeting him by his name.",
		});

		// open the chat bubble
		widget.open();

		// close the chat bubble
		widget.close()

		// or 
		widget.toggle()
		</script>
</body>
</html>
