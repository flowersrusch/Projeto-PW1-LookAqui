<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="filmes.css">
	<title>Filmes - Locadora</title>
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
							<li><a href="generos.php?gen=Ação">Ação</a></li>
							<li><a href="generos.php?gen=Aventura">Aventura</a></li>
							<li><a href="generos.php?gen=Comédia">Comédia</a></li>
							<li><a href="generos.php?gen=Crime">Crime</a></li>
							<li><a href="generos.php?gen=Drama">Drama</a></li>
							<li><a href="generos.php?gen=Fantasia">Fantasia</a></li>
							<li><a href="generos.php?gen=Ficção Científica">Ficção Científica</a></li>
							<li><a href="generos.php?gen=Mistério">Mistério</a></li>
							<li><a href="generos.php?gen=Romance">Romance</a></li>
							<li><a href="generos.php?gen=Suspense">Suspense</a></li>
							<li><a href="generos.php?gen=Terror">Terror</a></li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<div>
    			<div class="row">
        			<table id="tabela" style="border-collapse: collapse; border: 1px solid #24f0d3; border-spacing: 25; margin: auto; transform: translate(0%,0%);">
            			<caption class="caption"><b>Lista de Filmes</b></caption>
            			<thead>
            				<tr>
                				<th scope="col" class="th">Nome do Filme</th>
                				<th scope="col" class="th">Gênero do Filme</th>
                				<th scope="col" class="th">Ano do Filme</th>
            				</tr>
           				</thead>
            			<tbody>
            				<tr>
                				<td class="td"><center>-</center></td>
                				<td class="td"><center>-</center></td>
                				<td class="td"><center>-</center></td>
            				</tr>
            			</tbody>
        			</table>
    			</div>
			</div>
			<br>
			<footer class="footer-inicio">
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
		</div>
	</div>
	<script type="text/javascript" async>
    	const queryString = window.location.search;
    	const urlParams = new URLSearchParams(queryString);
    	const gen = urlParams.get('gen');
    	const listaFilmes = async (gen) => {
        	const tabela = await fetch("generos/lista-generos.php?gen=" + gen);
        	const respTabela = await tabela.json();
        	respTabela.forEach(function (e) {
            	console.log(e);
            	var tabela = document.getElementById("tabela");
            	var row = tabela.insertRow(2);
            	var nome = row.insertCell(0);
            	var genero = row.insertCell(1);
            	var ano = row.insertCell(2);
            	nome.innerHTML = `${e.name}`;
            	genero.innerHTML = `${e.gender}`;
            	ano.innerHTML = `${e.year}`;
        	});
    	}
    	listaFilmes(gen);
	</script>
</body>
</html>