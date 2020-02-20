<?php
require_once 'path.php';
cabecalho('Contatos');
$mens = $_GET['mens'];
echo $mens;
?>

<div class="mainContato">
    <h2>Faça contato conosco!  &#128241</h2>
    <form method=post action="functions/envia_email.php" id="formContato">
            <p>Campos Obrigatórios *</p><br>
            <label type=text name="nome">Nome e Sobrenome *</label>
            <input class="contato-entrada" name=nome type="text" id="nomesobrenome" class="input-padrao" required placeholder="Seu nome"> <!--label/for e input/id sempre estão ligados-->

            <label type=email name="email">Email *</label>
            <input class="contato-entrada" name=email type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

            <label type=tel name="telefone">Telefone *</label>
            <input class="contato-entrada" name=telefone type="tel" id="telefone" class="input-padrao" required placeholder="(xx)xxxxx-xxxx">

            <label type=text name="mensagem">Mensagem *</label>
            <textarea class="contato-assunto" name=assunto id="mensagem" cols="70" rows="10" class="input-padrao" required placeholder="digite sua mensagem"></textarea>

            <fieldset class="contatos-selecionaveis">
                <legend class="titulo-selecao">Como você prefere nosso contato?</legend>
                <label class="radio" for="radio-email"><input type="radio" value="email" id="radio-email" name="contato">&nbsp &nbsp Email</label>
                <label class="radio" for="radio-telefone"><input type="radio" value="telefone" id="radio-telefone" name="contato">&nbsp &nbsp Talefone</label>
                <label class="radio" for="radio-watsapp"><input type="radio" value="watsapp" id="radio-watsapp" name="contato" checked>&nbsp &nbsp Watsapp</label>                
            </fieldset>  

            <fieldset class="contatos-selecionaveis">
                <legend class="titulo-selecao">Qual horário você prefere ser atendido?</legend>
                <select class="option" name="">
                    <option value="">Manhã</option>
                    <option value="">Tarde</option>
                    <option value="">Noite</option>
                </select>
            </fieldset>

            <fieldset class="contatos-selecionaveis">
                <legend class="titulo-selecao">Sobre Qual assunto você gostaria de saber?</legend>
                <label class="checkbox"><input type="checkbox">&nbsp &nbsp Entreterimento Adulto</label>
                <label class="checkbox"><input type="checkbox">&nbsp &nbsp Palestras Motivacionais</label>
                <label class="checkbox"><input type="checkbox">&nbsp &nbsp Armas de Fogo</label>
                <label class="checkbox"><input type="checkbox">&nbsp &nbsp Quer apenas encher o saco de alguém</label>
            </fieldset>

            <input type="submit" value="Enviar Formulário" class="botoes">
            <input type="reset" value="Limpar Campos" class="botoes">
            
        </form>

        <table class="tabela">
            <thead>
                <tr>
                    <th class="tLinha">Dia</th>
                    <th class="tLinha">Horário</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td class="tLinha">Segunda</td>
                <td class="tLinha">Folga</td>
            </tr>
            <tr>
                    <td class="tLinha">Quarta</td>
                    <td class="tLinha">Pós 18h</td>
                </tr>
                <tr>
                    <td class="tLinha">Sexta</td>
                    <td class="tLinha">#descubra</td>
            </tr>
            <tfoot>
                <tr></tr>
            </tbody>
        </table>
</div>

<?php
rodape();
?>