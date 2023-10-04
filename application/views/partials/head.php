<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($meta['title']) ? $meta['title'] : 'Tugas PWEB by Hafizh' ?></title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>

<link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css">

<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>

<style>
	.container {
		width: 900px;
		margin: auto;
		background-color: snow;
		color: rgb(60, 60, 60);
	}

	.tittle {
		padding: 5px 5px 0px 10px;
		margin-bottom: 5px;
	}

	.isian {
		padding: 1px 5px 10px 10px;
	}

	.navbar {
		display: flex;
		gap: 1em;
		background-color: rgba(0, 91, 255, 0.6);
	}

	.navbar a {
		font-family: sans-serif;
		font-weight: 500;
		color: white;
		text-decoration: none;
		padding: 1rem;
	}

	.navbar a:hover {
		background-color: rgba(255, 255, 255, 0.1);
	}

	.footer {
		font-family: sans-serif;
		background-color: rgba(0, 91, 255, 0.6);
		padding: 10px;
		text-align: center;
		color: white;
		margin-top: 10px;
	}

	.footer a:visited {
		color: white;
	}
</style>