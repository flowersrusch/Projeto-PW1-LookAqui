<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ediçao.css">
	<title>Cadastro - Locadora</title>
</head>
<body>
	<div class="container">
		<nav>
			<div class="nome">
				<p><b>Locadora</b></p>
			</div>
		</nav>
		<main>
			<form id="formUsers">
				<h1>Edição de Dados</h1>
				<div class="entrar">
					<input type="text" name="name" placeholder="Nome completo" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="password" name="password" placeholder="Senha" required minlength="4">
					<button class="btn1" type="submit">Enviar</button>
				</div>
			</form>
		</main>
		<div role="alert" id="retorno" style="color: black;"></div>
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
    	const formUsuarios = document.querySelector("#formUsers");
    	const retorno = document.querySelector("#retorno");
    	formUsuarios.addEventListener("submit", async (e) => {
        	e.preventDefault();
        	const dataUsuarios = new FormData(formUsuarios);
        	const dados = await fetch("usuarios/update.php",{
            	method: "POST",
            	body: dataUsuarios,
        	});
        	const usuario = await dados.json();
        	const retorno = document.querySelector("#retorno");
        	retorno.classList.add("alert");
        	if(usuario.error == 1){
            	retorno.classList.remove("alert-success");
            	retorno.classList.add("alert-danger");
            	retorno.innerHTML = "Email e/ou senha inválidos!";
        	} else if(usuario.error == 0) {
            	retorno.classList.remove("alert-danger");
            	retorno.classList.add("alert-success");
            	retorno.innerHTML = `${usuario.name}, seus dados foram atualizados!`;
            	window.location.href='usuarios.php';
        	}
        	welcome();
    	});
	</script>
</body>
</html>