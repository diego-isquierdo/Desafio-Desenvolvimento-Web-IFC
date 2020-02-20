<?php

function cabecalho($titulo)
{
    $html = "<!DOCTYPE html>\n";
    $html .= "<html lang=\"pt-br\">\n";
    $html .= "<head>\n";
    $html .= "<meta charset=\"UTF-8\">\n";
    $html .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    $html .= "<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\n";
    $html .= "<link href=\"https://fonts.googleapis.com/css?family=Barlow&display=swap\" rel=\"stylesheet\">\n";
    $html .= "<link href=\"https://fonts.googleapis.com/css?family=Lobster&display=swap\" rel=\"stylesheet\">\n";
    $html .= "<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap\" rel=\"stylesheet\">\n";
    $html .= "<link href=\"https://fonts.googleapis.com/css?family=Modak&display=swap\" rel=\"stylesheet\">\n";
    $html .= "<link href=\"https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap\" rel=\"stylesheet\">\n";
    $html .= "<link rel=\"stylesheet\" href=\"css/style.css\">\n";
    $html .= "<link rel=\"stylesheet\" href=\"css/bootstrap.css\">\n";
    $html .= "<link rel=\"stylesheet\" href=\"css/reset.css\">\n";
    $html .= "<title>$titulo</title>\n";
    if($titulo=='Home'){
        $html .= scriptJS();
    }
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<header>\n";
    $html .= "<div class=\"caixa\">\n";
    $html .= "<img class=\"banner\" src=\"/img/capa.jpg\" alt=\"banner - imagem delrey e cerveja\">\n";
    $html .= "<div class=\"caixa-foto\">\n";
    $html .= "<a href=\"index.php\"><img src=\"img/joaquin.jpg\" alt=\"foto do nosso querido joaquim teixeira\"></a>\n";
    $html .= "</div>\n";
    $html .= "<h1 class=\"titulo\">Joaquin Teixeira</h1>\n";
    $html .= "<nav class=\"caixa-nav\">\n";
    $html .= "<ul class=\"caixa-nav-links\">\n";
    $html .= "<li><a href=\"index.php\">Home</a></li>\n";
    $html .= "<li><a href=\"produtos.php\">Produtos</a></li>\n";
    $html .= "<li><a href=\"contato.php\">Contato</a></li>\n";
    $html .= "</ul>\n";
    $html .= "</nav>\n";
    $html .= "</div>\n";
    $html .= "</header>\n";
    $html .= "<main>\n";
    $html .= "<div class=\"principal\">\n";

    echo $html;
}

function scriptJS(){
    $html = "<script>\n";
    $html .= "confirma = window.confirm('Você gosta de cigarros, Bebidas de Procedência Duvidosa e Entreterimento Adulto à preço justo?')\n";
    $html .= "if(confirma==true)\n";
    $html .= "{\n";
    $html .= "window.alert('Aqui é o Lugar Ideal para VOCÊ!!');\n";
    $html .= "}\n";
    $html .= "else\n";
    $html .= "{\n";
    $html .= "window.alert('Aqui não é lugar para você!');\n";
    $html .= "}\n";
    $html .= "</script>\n";

    return $html;
}

function rodape()
{
    $html = "</div>\n";
    $html .= "</main>\n";
    $html .= "<div class=\"div-rodape\">\n";
    $html .= "<footer class=\"rodape\">\n";
    $html .= "<p class=\"mensagem-final\">#sextou #pas</p>\n";
    $html .= "<nav class=\"redes-sociais\">\n";
    $html .= "<ul>\n";
    $html .= "<li><a href=\"https://www.facebook.com/Joaquin-Teixeira-da-Silva-1601437306620060/\"><img src=\"img/facebook.png\" alt=\"icone do facebook\"></a></li>\n";
    $html .= "<li><a href=\"https://www.instagram.com/joaquintdasilva/?hl=pt-br\"><img src=\"img/instagram.png\" alt=\"icone do instagran\"></a></li>\n";
    $html .= "<li><a href=\"https://twitter.com/joaquinshow\"><img src=\"img/twitter.png\" alt=\"icone do twitter\"></a></li>\n";
    $html .= "</ul>\n";
    $html .= "</nav>\n";
    $html .= "<p class=\"copyright\">&copy; Coyright Joaquin Teixeira Show</p>\n";
    $html .= "</footer>\n";
    $html .= "</div>\n";
    $html .= "</body>\n";
    $html .= "</html>\n";

    echo $html;
}