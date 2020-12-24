<!DOCTYPE html><!-- Declaração de um documento HTML5 -->
<html lang="pt-br"><!--Estrutura de um documento HTML e dissemos ao navegador que a linguagem é português do Brasil-->
<head><!-- Declaração de dados, links para documentos de estilização e comportamentos ao navegador -->
	<!-- Título do site -->
	<title>Entar no Facebook │ Facebook</title>
	<!-- Meta dados do site -->
	<meta charset="utf-8"><!-- Meta dado defiido para a linguagem latina-americana -->
	<meta name="description" content="Descrição do meu site."><!-- Descrição do site -->
	<meta name="keywords" content="palavras,separadas,por,virgulas"><!-- meta dados de SEO com palavras-chaves -->
	<meta name="author" content="Dev L.R"><!-- Autor do site -->
	<meta name="viewport" content="width=device-width, inicial-scale=1.0,maximum-scale=1.0"> <!-- responsivo --> 
	<!-- Links de estilo -->
	 <link rel="icon" href="/images/face-favicon.png" />
	<link rel="stylesheet" href="style.css"> <!-- Dizendo ao meu documento onde estará a folha de estilo -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet"> <!-- Importando a fonte Lato do Google Fonts -->
</head><!-- Fechamento da tag head -->
<body><!-- Conteúdo Visível da página -->
	<!-- Cabeçalho login facebook -->
	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!-- logo -->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="email">
				</div><!-- form-element -->	
				<div class="form-element">
					<p>Senha</p>
					<input type="password">
				</div><!-- form-element -->	
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">	
				</div><!-- form-element -->
		</form><!-- form-login -->
		<div class="clear"></div><!-- clear:both -->
		</div><!-- center -->
	</header>

	<main>
		<div class="center">
			<div class="img-pessoas">
				<h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
				<img src="conex-face.png" />
			</div><!-- img-pessoas -->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será.</h3> 

				<form class="criar-conta">
					<div class="w50">
					<input type="text" placeholder="Nome" />
					</div><!-- w50 -->

					<div class="w50">
					<input type="text" placeholder="Sobrenome" />
					</div><!-- w50 -->

					<div class="w100">
					<input type="email" placeholder="Digite seu e-mail" />
					</div><!-- w100 -->

					<div class="w100">
					<input type="password" placeholder="Digite sua senha" />
					</div><!-- w100 -->

					<div class="w100">
					<h2>Data de Nascimento:</h2>
					<select class="nascimento" name="nascimento-dia" />
					<?php
						for($i = 1; $i <= 31; $i++) {
					?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>			
					</select>
					<select class="nascimento" name="nascimento-mes">
						<option value="0">Janeiro</option>
						<option value="1">Fevereiro</option>
						<option value="2">Março</option>
						<option value="3">Abril</option>
						<option value="4">Maio</option>
						<option value="5">Junho</option>
						<option value="6">Julho</option>
						<option value="7">Agosto</option>
						<option value="8">Setembro</option>
						<option value="9">Outubro</option>
						<option value="10">Novembro</option>
						<option value="11">Dezembro</option>
					</select>
					<select class="nascimento" name="nascimento-ano">
					<?php
						for($i = 1990; $i <= 2020; $i++) {
					?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>	
					</select>
					<div class="clear"></div>
					</div><!-- w100 -->

					<div class="w100">

					<div class="input-radio">
					<input type="radio" name="sexo" value="masculino" />
					<h2>Masculino</h2>
					</div><!-- input-radio -->

					<div class="input-radio">
					<input type="radio" name="sexo" value="feminino" />
					<h2>Feminino</h2>
					</div><!-- input-radio -->
					<div class="clear"></div>
					</div><!-- w100 -->

					<div class="w100">
					<input type="submit" name="acao" value="Cadastre-se" />
					</div><!-- w100 -->

				
				</form><!-- Criar conta -->
				<div class="clear"></div>
			</div><!-- abrir-conta -->
		</div><!-- center -->
	</main>

	<footer class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Inglês (EUA)</a>
			<a href="#">Francês (FR)</a>
			<a href="#">Espanhol (ES)</a>
			<a href="#">Italiano (ITA)</a>
			<a href="#">Alemanha (ALE)</a>
			<a href="#">Coreano (COR)</a>
			<a href="#">Chinês (CHI)</a>
			<button>+</button>
		</div><!-- center -->
			
		<div style="border: 0" class="center">
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">Messenger</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
			<a href="#">mais opções</a>
		</div><!-- center -->
	</footer><!-- linguas -->

</body>
</html>