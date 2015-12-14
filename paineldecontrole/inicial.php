<?php 

require "includes/header.php";
require "includes/verificar.php";
?>

	<main>
		
		<section id="wrapper">
			
			<section id="content">
			
			<section id="contagem">
				
				<table>
					<tbody>
						<tr>
							<td class="table-marc">Notícias Publicadas</td>
							<td class="table-val">250</td>
							<td>&nbsp;</td>
							<td class="table-marc">Comentários Aprovados</td>
							<td class="table-val">145</td>
						</tr>
						<tr>
							<td class="table-marc">Categorias Ativas</td>
							<td class="table-val">30</td>
							<td>&nbsp;</td>
							<td class="table-marc">Comentários Novos</td>
							<td class="table-val">25</td>
						</tr>							
					</tbody>
				</table>
				
			</section>
		
		<section id="nota-rapida">
			
			<h1>Publicar Nota Rápida</h1>
			
			<form action="#" method="POST">
			<table>
				<tbody>
					<tr><td>Titulo da Postagem</td></tr>
					<tr><td><input type="text" name="titulo-postagem" required="required" /></td></tr>
					<tr><td>Descrição da Nota</td></tr>
					<tr><td><textarea name="descricao-nota" required="required" ></textarea></td></tr>
					<tr><td>Tags de Pesquisa</td></tr>
					<tr><td><input type="text" name="tags-pesquisa" required="required" /></td></tr>
					<tr><td><input type="submit" name="publicar-nota" value="Publicar Nota" /></td></tr>
				</tbody>				
			</table>
			</form>
			
		</section> <!-- Nota Rápida -->
		
		<section id="links-ultimas-noticias">
			
			<h1>Últimas Notícias</h1>
			
			<ul>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
				<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			</ul>
			
		</section>
			
			</section> <!-- Content -->
				
		</section> <!-- Wrapper -->
		
	</main>

<?php require "includes/footer.php"; ?>