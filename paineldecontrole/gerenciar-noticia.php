<?php 

require_once "includes/header.php";

?>

<script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		height: "900",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

	<main>
		<section id="wrapper">
			
			<section id="content">
			
			<section id="submenu">
                            
                            <?php
                            
                            $SQL_RS = mysql_query("SELECT status FROM noticias WHERE status=0");
                            $SQL_TN = mysql_query("SELECT status FROM noticias WHERE status=1");
                            $SQL_LX = mysql_query("SELECT status FROM noticias WHERE status=2");
                            
                            $CNT_RS = mysql_num_rows($SQL_RS);
                            $CNT_TN = mysql_num_rows($SQL_TN);
                            $CNT_LX = mysql_num_rows($SQL_LX);      

                            ?>
				<ul>
                                        <li id="publicar-noticia-menu" class="activeColor">Publicar notícia</li>
					<li id="todas-noticias-menu">Ver todas as notícias<?php if($CNT_TN != 0) : echo "($CNT_TN)"; endif;?></li>
                                        <li id="rascunhos-menu">Rascunhos<?php if($CNT_RS != 0) : echo "($CNT_RS)"; endif;?></li>
					<li id="lixeira-menu">Lixeira<?php if($CNT_LX != 0) : echo "($CNT_LX)"; endif;?></li>
				</ul>
			</section>
			
			<section id="publicar-noticia">
				<form action="acoes/publicar-noticia.php" method="POST" enctype="multipart/form-data">
				<section id="publicar-noticia-left">
					<table>
					<tbody>
						<tr>
							<td><input type="text" name="titulo-noticia" placeholder="Coloque o título aqui" /></td>
						</tr>
						<tr>
							<td><textarea name="conteudo-noticia" id="maxW"></textarea></td>
						</tr>
					</tbody>	
				</table>		
				</section>
					<section id="publicar-noticia-right">
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td align="left"><input type="submit" name="publicar" value="Publicar Notícia" /></td>
										<td align="right"><input type="submit" name="salvar-rascunho" value="Salvar Notícia" /></td>
									</tr>
									<tr>
										<td>Data Publicação:</td>
										<td align="right"><?php echo date("d/m/Y"); ?></td>
									</tr>
									<tr>
										<td>Autor:</td>
										<td align="right"><?php echo $nomeUser; ?></td>
									</tr>
								</tbody>
							</table>
						</section>
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Tags de Pesquisa</td>
									</tr>
									<tr>
										<td><input type="text" name="tags-pesquisa" placeholder="Digite suas tags de pesquisa" /></td>
									</tr>
									<tr>
										<td id="tags-escolhidos"></td>
									</tr>
								</tbody>
							</table>
						</section>
						
							<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Imagem da Notícia</td>
									</tr>
									<tr>
										<td>
											<input type="text" id="imagem-noticia-carregar" placeholder="Selecione a imagem da sua notícia" />
											<input type="file" id="imagem-carregada" name="imagem-noticia" /></td>
									</tr>
								</tbody>
							</table>				
						</section>
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Categoria da Notícia</td>
									</tr>
									<tr>
										<td>
											<select name="categoria-noticia">
												<option	selected="selected" value="">Selecione uma Categoria</option>
                                                                                        <?php
                                                                                        
                                                                                            $SQL_C = mysql_query("SELECT * FROM categoria");
                                                                                            
                                                                                            while ($ct = mysql_fetch_array($SQL_C)){
                                                                                            
                                                                                        ?>
                                                                                                <option value="<?php echo $ct['id_categoria']; ?>"><?php echo $ct['nome_categoria']; ?></option>
                                                                                            <?php } ?>                                                                                               
                                                                                        </select>
										</td>
									</tr>
								</tbody>
							</table>				
						</section>
						
					</section>
						  </form>
			</section>
                            
                            
                            
                            <section id="todas-as-noticias">
                                
                                <table cellppadding="0" cellspacing="0">
                                    
                                    <tbody>
                                        <tr>    
                                        
                                            <td>Titulo da Noticia</td>
                                            <td>Autor</td>
                                            <td>Categorias</td>
                                            <td>Tags</td>
                                            <td>Data</td>                                              
                                        </tr>
                                        <?php
                                        
                                        $SQL_TDN = mysql_query("SELECT titulo, dataPub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_Categoria) "); 
                                                                                
                                        while ($TND = mysql_fetch_array($SQL_TDN)){
                                            
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $TND['titulo']; ?></td>
                                            <td><?php echo $TND['autorPub']; ?></td>
                                            <td><?php echo $TND['nome_categoria'];?></td>
                                            <td><?php echo $TND['tags']; ?></td>
                                            <td><?php 
                                            $dataExb = explode("-", $TND['dataPub']);
                                            echo $dataExb[2]."/".$dataExb[1]."/".$dataExb[0];
                                            ?></td>
                                        </tr>
                                        
                                        <?php } ?>
                                    </tbody>                                                                   
                                    
                                </table>
			
			</section> <!-- Todas as noticias -->
				
		</section> <!-- Wrapper -->
		
	</main>

<?php require "includes/footer.php"; ?>