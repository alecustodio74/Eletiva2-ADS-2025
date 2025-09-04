<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Área de um retângulo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Calcular área de um retângulo em cm</h1>
<form method="post" action="/resposta_retangulo">
    @CSRF
<div class="mb-3">
              <label for="valor1" class="form-label">Informe o valor da base</label>
              <input type="number" id="valor1" name="base" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Informe o valor da altura</label>
              <input type="number" id="valor2" name="altura" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>