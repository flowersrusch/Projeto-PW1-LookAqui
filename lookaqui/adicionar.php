<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="adicionar.css">
	<title>Adicionar Filmes - Locadora</title>
</head>
<body>
	<div class="container">
		<nav>
			<div class="nome">
				<center><p><b>Locadora</b></p></center>
			</div>
		</nav>
		<main>
			<form id="formAdicionar">
				<h1>Adicionar filme</h1>
				<div class="entrar">
					<input type="text"  name="title" placeholder="Nome do filme" required>
					<select for="gender" class="select" name="gender">
                		<option selected>Gênero do filme</option>
                		<option value="Ação">Ação</option>
                		<option value="Aventura">Aventura</option>
                		<option value="Comédia">Comédia</option>
                		<option value="Crime">Crime</option>
                		<option value="Drama">Drama</option>
                		<option value="Fantasia">Fantasia</option>
                		<option value="Ficção Científica">Ficção Científica</option>
                		<option value="Mistério">Mistério</option>
                		<option value="Romance">Romance</option>
                		<option value="Suspense">Suspense</option>
                		<option value="Terror">Terror</option>	
                	</select>
					<input type="number"  name="year" placeholder="Ano do filme" required maxlength="4">
					<button class="btn1" name="btn1" type="submit">Adicionar</button>
				</div>
			</form>
			<br>
			<br>
			<div id="message"  role="alert"><center></center></div>
		</main>
	</div>
	<div class="dividir"></div>
	<footer class="footer-login">
	<div class="duvidas">
			<p>Contate-nos</p>
			<div class="meios">
				<ul>
					<li><a href="https://www.instagram.com/arthurtolotti/">Instagram Arthur</a></li>
					<li><a href="https://www.twitter.com/arthurtolotti_/">Twitter Arthur</a></li>
					<li><a href="https://www.instagram.com/lalarusch/">Instagram Lavínia</a></li>
					<li><a href="https://twitter.com/flowersrusch">Twitter Lavínia</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<script type="text/javascript" async>
    	const formAdicionar = document.querySelector("#formAdicionar");
    	const message = document.querySelector("#message");
    	formAdicionar.addEventListener("submit", async (e) => {
        	e.preventDefault();
        	const dataFilms = new FormData(formAdicionar);
        	const dados = await fetch("api/filmes-insert.php",{
            	method: "POST",
            	body: dataFilms,
        	});
        	const filme = await dados.text();
		
        	message.innerHTML = `Nome ${filme.name} Gênero: ${filme.gender} Ano: ${filme.year}`;
        	window.location.href='inicio.php';
    	});

</script>
</body>
</html>