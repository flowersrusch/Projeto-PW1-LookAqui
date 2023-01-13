<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Locadora</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<br>
		
		</nav>
		<main>
		<form id="login-form" class="contact__form">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div id="message" class="alert alert-success contact__msg" style="display: none"  role="alert">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Seu e-amail..." >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="password" id="password" type="password" class="form-control" placeholder="Sua senha...">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Enviar"></input>
                    </div>
                </form>
			<br>
			<ul>
				<li><center>Novo por aqui? <a class="btn2" href="register.php">Cadastre-se</a></center></li>
			</ul>
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
	<script async>
                    const form = document.querySelector("#login-form");
                    const message = document.querySelector("#message");
                    form.addEventListener("submit", async (e) => {
                        e.preventDefault();
                        const dataUser = new FormData(form);
                        const data = await fetch("http://localhost/projeto/api/user-login.php",{
                            method: "POST",
                            body: dataUser,
                        });
                        const user = await data.json();
                        console.log(user);
                        message.textContent = user.message;
                        message.setAttribute("style","display")
                        if(user.type === "error"){
                            // trocar o status da message
                            message.classList.remove("alert-success");
                            message.classList.add("alert-danger");
                        } else {
                            // trocar o status da message
                            message.classList.remove("alert-danger");
                            message.classList.add("alert-success");
							window.location.href = "inicio.php";
                        }
                        setTimeout(() => {
                            message.setAttribute("style","display: none")
                        }, 3000);
                    });
                </script>
</body>
</html>