<nav class="navbar navbar-default">
  <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="home" href="#">Home</a>
    </div>
    <!-- Barra de navegacion general -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> <a id="empresa" href="#" >La Empresa <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="maquinas" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maquinas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="embutidoras" href="#">Embutidoras</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="mixer" href="#" id="mixer">Mixer</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="moledoras" href="#">Moledoras</a></li>
          </ul>
        </li>
        <li><a id="tablas" href="#">Datos Tecnicos</a></li>
        <li><a id="contacto" href="#">Contactos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" id="Prod_busq" class="form-control" placeholder="Producto">
          </div>
          <button type="submit" id="boton_buscar" href="#" class="btn btn-default">Buscar</button>
        </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
