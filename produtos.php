<?php
require_once 'path.php';
cabecalho('Produtos');
?>

<h2>Conheça nossos Produtos!</h2>

<section class="produtos">
    <h3>Palestras Motivacionais - Joaquin & Amigos</h3>
    <p>Coaches Especializados trazendo o melhor "MINDSET" para você!!</p>
    <div id="palestrantes">
        <div class="palestrantes-foto">
            <p>Fabião</p>
            <img src="img/fabioA.jpg" alt="foto coach Fabiao">
            <p>Palestra<br>"Todo dia é Sexta-feira!</p>
        </div>
        <div class="palestrantes-foto">
            <p>Kasão</p>
            <img src="img/ksao.jpg" alt="foto mestre ksao">
            <p>Palestra<br>"No cheiro do Sucesso!"</p>
        </div>
        <div class="palestrantes-foto">
            <p>J Teixeira</p>
            <img src="img/jteixeira.jpg" alt="foto velho joaquim">
            <p>Palestra<br>"DitaDura vs. DitaMole"</p>
        </div>
    </div>
</section>

<section class="produtos">
    <h3>Entreterimento Adulto de Qualidade</h3>
    <p>A companhia ideal para sua Alegria!</p>
    <img class="produtos-fotos" src="img/felicidade.jpeg" alt="foto de casal feliz">
</section>

<section class="produtos">
    <h3>Quer impulsionar suas rede sociais? Pergunte-me como..</h3>
    <p>Contamos com um excelente sistema automatizado, que fara de você um grande Influencer</p>
    <p>Pacotes especiais de Likes e seguidores, e preços promocinais no combo "Likes+Seguidores"</p>
    <img class="produtos-fotos" src="img/bot.jpg" alt="foto da nossa equipe de redes socias">
</section>

<?php
rodape();
?>