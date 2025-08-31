<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>velocidade média</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Calcular velocidade média</h1>
<form method="post" action="/resposta_velo_media">
    @CSRF
<div class="mb-3">
              <label for="valor1" class="form-label">Informe a distancia em Km</label>
              <input type="number" id="valor1" name="distancia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Informe o tempo em horas</label>
              <input type="number" id="valor2" name="tempo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>