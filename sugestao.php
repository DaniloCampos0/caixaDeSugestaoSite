<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Sugestao</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div classs= "container">
   <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="imagens/chat.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Sugestoes
    </a>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="index.php">
  <button class="btn btn-primary me-md-2" type="button">Voltar</button></a>
  </div>
  </nav>

  <?php

    include_once('conexao.php');

    $sql = 'SELECT * FROM sugestao';

    $result = mysqli_query($conexao, $sql);

    while( $linha = mysqli_fetch_array($result, MYSQLI_BOTH)){

        $id = $linha['id'];
        $conteudo = $linha['conteudo'];
        $curso = $linha['curso'];
        $tipo = $linha['tipo'];
        $nome = $linha['nome'];

      
        $url_imagem = getImageUrl($tipo);

  echo "<div class=\"card\" style=\"width: 18rem;\">
          <div class=\"card-body\">
     <img src=\"$url_imagem\" style=\"width: 38px; height: 38px; position: absolute; top: 16px; right: 16px;\" alt=''>
            <h5 class=\"card-title\">$tipo</h5>
           <h6 class=\"card-subtitle mb-2 text-muted\"></h6>
            <p class=\"card-text\">$conteudo</p>
            <a href=\"#\" class=\"card-link\">$curso</a>
            <a href=\"#\" class=\"card-link\">$nome</a>
            <a href=\"#\" class=\"card-link\"></a>
          </div>
         </div>"; 
          }
          
              function getImageUrl($tipo) {
                if($tipo == 'sugestao') {
                    return "imagens/idea.png";
                } else if($tipo == 'comentario') {
                    return "imagens/chat.png";
                } else if($tipo == 'reclamacao') {
                    return "imagens/brokenheart.png";
                } else {
                    return "imagens/like.png";
                }
              }
  ?>
</div>    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>