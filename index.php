<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Sugestoes</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body> 
<div class="container">
        <header>
      <h1 class="text-center">Caixa Sugestoes</h1>
        </header>
<form  action="include.php" method="GET">

  <div class="mb-3">
    <label for="userName" class="form-label"></label>
    <input type="text" class="form-control" name="u_nome" id="userNome" placeholder="Nome" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <label for="userCurso" class="form-label"></label>
    <input type="text" class="form-control" name="u_curso" id="userCurso" placeholder="Curso" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <label for="userTipo" class="form-label"></label>
    <input type="text" class="form-control" name="u_tipo" id="userTipo" placeholder="Tipo" autocomplete="off" required>
  </div>
 
  <div class="mb-3">
    <label for="userConteudo" class="form-label"></label>
    <input type="text" class="form-control" name="u_conteudo" id="userConteudo" placeholder="Conteudo" autocomplete="off" required>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="button" class="btn btn-primary btn-lg btn-block">Enviar</button>
</form>
    <div class="container"><h2 class="text-center">Veja alguns cards</h2>
    <a href="sugestao.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Click</a>
    </div>

</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>