<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Calcular la masa corporal (IMC)</h2>
      <div class="row">
        <div class="col-sm-4">
        <form action="Calcular_IMC.php" method="POST">
        
          <label for="Peso">Ingresa tu peso</label>
          <input type="text" name="Peso"class="form-control" id="peso"   placeholder="Peso">
          <label for="Altura">Ingresa tu altura</label>
          <input type="text" name="Altura" class="form-control" id="altura" placeholder="Altura" >
          <br>
          <button  class="btn btn-outline-primary btn-lg btn-block">Resultado de IMC</button>
        </form>
        </div>
      </div>
  </div>

</body>
</html>  