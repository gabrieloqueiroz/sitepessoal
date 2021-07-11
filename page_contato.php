		<div class="linha">
			<section>
				<div class="coluna col5 sidebar">
					<h3>Localização</h3>
					<img src="img/mapa.jpg" alt="" />
					<ul class="sem-padding sem-marcador">
						<li>Rua machado de assis, 121</li>
						<li>Bairro moinhos</li>
						<li>Possibilândia - UF</li>
					</ul>
					<h3>Contato direto</h3>
					<ul class="sem-padding sem-marcador">
						<li>Fone: <strong>(00) 99999-9999</strong></li>
						<li>E-mail: <strong>gabrieloliveira.queiroz@outlook.com</strong></li>
						<li>Skype: <strong>login.skype</strong></li>
					</ul>
				</div>
				<div class="coluna col7 contato">	
					<h2>Envie uma mensagem</h2>
					<form action="" method="post">
						<label for="nome">Seu nome:</label>
						<input type="text" name="nome" id="nome" required/>
						<label for="email">Seu e-mail:</label>
						<input type="text" name="email" id="email" required/>
						<label for="assunto">Assunto:</label>
						<input type="text" name="assunto" id="assunto" required/>
						<label for="mensagem">Mensagem:</label>
						<textarea name="mensagem" id="mensagem" required></textarea>
						<input class="botao" type="submit" name="enviar" value="Enviar mensagem &raquo;" id="enviar" />
					</form>
				</div>	
			</section>
		</div>
	<div class="conteudo-extra">	
		<div class="linha">
			<div class="coluna col7">
				<section>
					<h2>Método de contato alternativo</h2>
					<p>Caso não consiga contatar por algum dos meios acima, possivelmente eu estarei numa ilha deserta em algum lugar do pacífico. Neste caso há duas possibilidades:</p>
					<ol>
						<li>Enviar uma mesangem em uma garrafa</li>
						<li>Tentar um sinal de fumaça</li>
					</ol>
					<p>Mas sinceramente não sei se alguns desses métodos será eficiente, tente por sua conta em risco =D</p>
				</section>
			</div>
			<div class="coluna col5">
				<?php require_once('noticias.php'); ?>
			</div>	
		</div>	
	</div>