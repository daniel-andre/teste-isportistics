<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="jumbotron jumbotron-fluid header">
    <div class="container">
      <form action="backend/formulario.php" method="post">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control nome" name="nome" placeholder="Informe seu nome" required>
          </div>
          <div class="col">
            <input type="text" class="form-control sobrenome" name="sobrenome" placeholder="Informe seu sobrenome" required>
          </div>
          <div class="col">
            <input type="number" class="form-control participacao" name="participacao" placeholder="Participação" min="0" max="100" required>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-block submit-button">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="pie"></div>
  <section class="container corpo mt-5 mb-5">
    <div class="descricao text-center mb-5">
      <h1>DATA</h1>
      <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="row dados">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nome</th>
              <th scope="col">Sobrenome</th>
              <th scope="col">Participação</th>
            </tr>
          </thead>
          <tbody>
            <?php //require_once 'lista_usuario.php'; ?>
          </tbody>
        </table>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div id="donutchart"></div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="script/modules/loader.js"></script>
  <script type="module" src="script/script.js"></script>
</body>
</html>