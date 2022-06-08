# proceduralTemplater
FUNÇÃO EM PHP PROCEDURAL PARA TEMPLATING - FACILITAR O USO DE TEMPLATES HTML EM CONSTRUÇÃO DE SISTEMAS EM PHP PROCEDURAL

COMO USAR ESTA FUNÇÃO?

1) Faça a chamada de inclusão do arquivo ou copie o código para seu arquivo de funções

Ex: require 'CAMINHO_PARA_O_ARQUIVO/templater.php';

2) Declare o caminho do arquivo de template:
$pagina = "CAMINHO_PAGINA/pagina.html";

3) Gere o array de dados a serem substituidos do html no formato CHAVE => VALOR
$dados = array(
  "{{TEXTO1}}" => "VALOR1",
  "{{TEXTO2}}" => "VALOR2",
);

4) Chame a função. Ela retorna na variável o html montado com o texto substituido.

$render = templater($pagina, $dados);

5) Exiba o resultado com um simples echo ou do modo que preferir

echo $render;

Exemplo completo:

<?php
require 'caminho/templater.php';

$pagina =  'notificacao.html';
$dados = array(
    "{{ID_PEDIDO}}" => "80800",
    "{{VALOR_COMPRA}}" => "100,00"
);

$render = templater($pagina, $dados);

echo $render;
