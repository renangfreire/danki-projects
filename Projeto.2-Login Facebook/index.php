<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>
	Facebook - Entre ou cadastre-se</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="keyworks" content="Facebook,login,redesocial">
	<meta name="description" content="Crie uma conta ou entre no Facebook. Conecte-se com amigos, familiares e outras pessoas que você conheça. Compartilhe fotos e vídeos, envie mensagens e...">
	<meta name="author" content="Renan Freire">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="images/facebook.ico">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header class="top">
		<div class="center">
			<div class="logo">
				<a href="#" title="Ir para a página inicial do Facebook"><img class="facebook-logo" src="images/logo.png"></a>
			</div><!--logo-->

			<form method="post" class="form-login ">
			<div class="form-element fl50">
				<p>Email ou Telefone:</p>
				<input type="email" name="Email">
			</div><!--form-element-->
				<div class="form-element fl50">
				<p>Senha:</p>
				<input type="password" name="senha">
			</div><!--form-element-->
			<div class="form-element fl100">
			
				<input type="submit" name="acao" value="Entrar">
			</div><!--form-element-->
			<div class="forgot">
				<span>Esqueceu a conta?</span>
			</div><!--forgot-->
		</form><!--form-login-->
		<div class="clear"></div>
		</div><!--center-->	
	</header>
	<main>
	<section class="main">
		<div class="center">
			<div class="margin50px"></div>
			<div class="img-human">
				<h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
				<img src="images/img1.png"/>
			</div><!--img-human-->

			<div class="abra-conta">
				<h2>Abra um conta</h2>
				<h3>É gratuito e sempre será.</h3>
				<form class="form-create">

					<div class="w50">
					<input placeholder="Nome" type="text" name="1nome"/>
					</div><!--w50-->

					<div class="w50">
					<input placeholder="Sobrenome" type="text" name="2name"/>
					</div><!--w50-->
					<div class="w100">
					<input placeholder="E-Mail ou Telefone" type="email" name="email"/>
					</div><!--w100-->

					<div class="w100">
					<input placeholder="Senha" type="password" name="senha"/>
					</div><!--w100-->

					<div class="w100">
					<input placeholder="Confirmar Senha" type="password" name="senha"/>
					</div><!--w100-->

					<div class="w100">
						<h2>Data de nascimento:</h2>
						<div class="datanascimento">
						<select name="nascimento-dia" class="nascimento">
							<option selected value="0">Dia</option>
							<?php
								for($i = 1; $i <=31; $i++){
							?>
							<option value="<?php echo $i; ?> "><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option selected value="0">Mês</option>
							<option value="1">Jan</option>
							<option value="2">Fev</option>
							<option value="3">Mar</option>
							<option value="4">Abr</option>
							<option value="5">Mai</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Ago</option>
							<option value="9">Set</option>
							<option value="10">Out</option>
							<option value="11">Nov</option>
							<option value="12">Dez</option>
						</select>
						<select name="nascimento-ano"class="nascimento">
							<option selected value="0">Ano</option>
							<?php 
							for($i = 1960; $i <=2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<div class="clear"></div>
						</select>
					</div><!--datanascmento-->
					</div><!--w100-->
					<div class="w100">
						<div class="amy">
						<div class="gnw100">
						<h2 >Gênero</h2>
						</div>
						<div class="optionssex">
						<div class="input-radio sx550">
							<input type="radio" name="sexo" value="masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->

						<div class="input-radio sx50">
							<input type="radio" name="sexo" value="feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="input-radio sx100">
							<input type="radio" name="sexo" value="personalizado">
							<h2>Personalizado</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->
					</div><!--optionssex-->
					</div><!--amy-->	
					<div class="w100">
						<p class="politica">
							Ao clicar em Cadastre-se, você concorda com nossos <a href="">Termos</a>,
							<a href="#"> Política de Dados</a> e <a href="#">Política de Cookies</a>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.
						</p>
					</div><!--w100-->
					<div class="w100 cadasenviar">
						<input type="submit" name="acao" value="Cadastre-se">
					</div><!--w100-->

					<div class="w100">
				<div class="crie-pagina">
				<h2><a href="#">Crie uma página</a> para uma celebridade, banda ou empresa.</h2>
			</div><!--crie-pagina-->
			</div><!--w100-->

			</form><!--form-create-->

			</div><!--abra-conta-->

		</div><!--center-->
		<div class="clear"></div>
	</section><!--main-->
	</main>
	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (Brasil)</a>
			
			<a title="English(US)" href="#">English (US)</a>
			<a title="Spanish" href="#">Español</a>
			<a title="French(France)" href="#">Français(France)</a>
			<a title="Italian" href="#">Italiano</a>
			<a title="Arabic" href="#">العربية</a>
			<a title="German" href="#">Deutsch</a>
			<a title="Hindi" href="#">हिन्दी</a>
			<a title="Simplified Chinese (China)" href="#">中文(简体)</a>
			<a title="Japonese" href="#">日本語</a>
			<a role="button" class="maislingua" title="Mostar mais idiomas" href="#"></a>
		</div><!--center-->

		<div class="center">
			<div class="ult-infos">
			<a href="#" title="Cadastre-se no Facebook">Cadastre-se</a>
			<a href="#" title="Entrar no Facebook">Entrar</a>
			<a href="#" title="Confira o Messenger.">Messenger</a>
			<a href="#" title="Facebook Lite para Android.">Facebook Lite</a>
			<a href="#" title="Navegue pelos nossos vídeos do Watch."> Watch </a>
			<a href="#" title="Navegue no nosso diretório de pessoas.">Pessoas</a>
			<a href="#" title="Pesquisar nosso diretório de páginas.">Páginas</a>
			<a href="#">Categorias de Página</a>
			<a href="#" title="Confira locais populares no Facebook.">Locais</a>
			<a href="#" title="Confira os jogos do Facebook.">Jogos</a>
			<a href="#" title="Navegue pelo nosso diretório de locais.">Locais</a>
			<a href="#" title="Compre e venda no Facebook Marketplace.">Marketplace</a>
			<a href="#" target="_blank" title="Saiba mais sobre o Facebook Pay">Facebook Pay</a>
			<a href="#" title="Navegue pelo nosso diretório de grupos.">Grupos</a>
			<a href="#" target="_blank" title="Saiba mais sobre o Oculus">Oculus</a>
			<a href="#" target="_blank" title="Saiba mais sobre o Portal do Facebook">Portal</a>
			<a href="#" title="Confira o Instagram" target="_blank">Instagram</a>
			<a href="#" title="Navegar pelo nosso diretório de listas locais.">Local</a>
			<a href="#" title="Doe para causas importantes.">Campanhas de arrecadação de fundos</a>
			<a href="#" title="Navegue pelo nosso diretório de serviços do Facebook.">Serviços</a>
			<a href="#" accesskey="8" title="Leia nosso blog, descubra a central de recursos e encontre oportunidades de trabalho.">Sobre</a>
			<a href="#" title="Anuncie no Facebook.">Criar anúncio</a>
			<a href="#" title="Criar uma Página">Criar Página</a>
			<a href="#" title="Desenvolver em nossa plataforma.">Desenvolvedores</a>
			<a href="#" title="Dê um passo adiante na sua carreira em nossa incrível empresa.">Carreiras</a>
			<a href="#" title="Saiba mais sobre sua privacidade e o Facebook.">Privacidade</a>
			<a href="#" title="Saiba mais sobre cookies e o Facebook">Cookies</a>
		<a href="#" title="Saiba mais sobre as Opções de anúncio.">Opções de anúncio</a>
			<a href="#" title="Leia os nossos termos e políticas.">Termos</a>
			<a href="#" title="Acesse nossa Central de Ajuda.">Ajuda</a>
		</div><!--ult-infos-->
		</div><!--center-->

		<footer>
			<div class="center">
				<p class="name-c">Facebook © 2020</p>
			</div><!--center-->
		</footer>
	</section><!--linguas-->

</body>
</html>