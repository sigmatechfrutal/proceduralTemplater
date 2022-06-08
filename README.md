# proceduralTemplater
FUNÇÃO EM PHP PROCEDURAL PARA TEMPLATING - FACILITAR O USO DE TEMPLATES HTML EM CONSTRUÇÃO DE SISTEMAS EM PHP PROCEDURAL

<b>COMO USAR ESTA FUNÇÃO?</b>

1) Faça a chamada de inclusão do arquivo ou copie o código para seu arquivo de funções

  Ex: <code> require 'CAMINHO_PARA_O_ARQUIVO/templater.php'; </code>

2) Declare o caminho do arquivo de template:
  Ex: <code> $pagina = "CAMINHO_PAGINA/pagina.html"; </code>

3) Gere o array de dados a serem substituidos do html no formato CHAVE => VALOR

  Ex: <code> $dados = array("{{TEXTO1}}" => "VALOR1", "{{TEXTO2}}" => "VALOR2",); </code>

4) Chame a função. Ela retorna na variável o html montado com o texto substituido.

  Ex: <code>$render = templater($pagina, $dados); </code>

5) Exiba o resultado com um simples echo ou do modo que preferir

  Ex: <code> echo $render; </code>

Exemplo completo no arquivo exemplo.php
