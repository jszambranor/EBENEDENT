<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INICIO DE SESION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
    <header>
        <div class="navbar-fixed">
          <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Logo</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
              </ul>
            </div>
          </nav>
        </div>
    </header>

    <main>
      <div class="section container">
        <div class="row card-panel">
          <form class="col s12" method="POST" action="./controller/ClassControllerLogin.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="usuario" name="usuario" type="text" class="validate">
                <label for="usuario">USUARIO</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="contrasena" name="contrasena" type="password" class="validate">
                <label for="contrasena">CONTRASEÑA</label>
              </div>
            </div>
            <center>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </center>

          </form>
        </div>
      </div>

      </main>

      <style media="screen">
      .section{
        max-width: 30%;
        margin-top: 5%;
      }

      nav{
        background-color: #2ECC71 ;
      }
      </style>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
