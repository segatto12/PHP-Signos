<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Seu signo</title>
  </head>
  <body class="p-5">
    
    <div style="opacity: 98%;" class="max-w position-absolute top-50 start-50 translate-middle bg-white rounded shadow p-5">
        <div class="">
          <h1 class="text-center mb-4">Descubra o seu sígno!</h1>
          <hr>
			<form method="post" action="signos.php">
				<div lass="mt-5 mx-auto">
					<div class="form-floating mb-4">
						<input class="form-control" type="text" name="nomeUsuario"
						id="nomeUsuario" placeholder="Seu nome" required>
						<label for="nomeUsuario">Seu nome</label>
					</div>
					<div class="form-floating mb-4">
						<input class="form-control" type="date" id="fdata" name="fdata"
						id="fdata" placeholder="Data de Nascimento" required>
						<label for="fdata">Data de Nascimento</label>
					</div>
					<div class="form-floating mb-4">
						<button type="submit" class="btn w-100 p-3">Enviar</button>
					</div>
				</div>
            </form>
		</div>
	</div>
</body>
</html>