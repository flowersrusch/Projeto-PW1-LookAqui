<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="usuarios.css">
	<title>Início - Locadora</title>
</head>
<body>
	<div class="container">
		<div class="hero">
			<div class="header">
				<div class="nome">
					<p><b>Locadora</b></p>
				</div>
				<div class="menu">
					<div class="menu-left">
						<ul>
							<li><a href="inicio.php">Início</a></li>
							<li><a href="edicao.php">Editar dados</a></li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<div>
    			<div class="row">
        			<table id="tabela" style="border-collapse: collapse; border: 1px solid lightgreen; border-spacing: 25; margin: auto; transform: translate(0%,0%)">
            			<caption class="caption"><b>Lista de Usuários</b></caption>
            			<thead>
            				<tr>
                				<th scope="col" class="th">Nome do Usuário</th>
                				<th scope="col" class="th">E-mail do Usuário</th>
            				</tr>
           				</thead>
            			<tbody>
            				<tr>
                				<td class="td"><center>-</center></td>
                				<td class="td"><center>-</center></td>
            				</tr>
            			</tbody>
        			</table>
    			</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<footer class="footer-inicio">
			<div class="duvidas">
			<p>Entre em contato</p>
			<div class="meios">
				<ul>
				
					<li><a href="https://www.instagram.com/lalarusch/">Instagram Lavínia</a></li>
					<li><a href="https://twitter.com/flowersrusch">Twitter Lavínia</a></li>
				</ul>
			</div>
		</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript" async>
    	const listaUsuarios = async (name) => {
        	const tabela = await fetch("users/lista-usuarios.php");
        	const respTabela = await tabela.json();
        	respTabela.forEach(function (e) {
            	console.log(e);
            	var table = document.getElementById("tabela");
            	var row = table.insertRow(2);
            	var nome = row.insertCell(0);
            	var email = row.insertCell(1);
            	nome.innerHTML = `${e.name}`;
            	email.innerHTML = `${e.email}`;
        	});
    	}
    	listaUsuarios("Emy");
	</script>
</body>
</html>