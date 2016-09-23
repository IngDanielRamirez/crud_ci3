<!Doctype html>
<!-- ARCHIVO MASTER PAGE DEL CRUD-->
<html lang="es">
    <head>
        <title>CRUD - CI3</title>
        <!-- Agrego mis referencias de estilo css y js -->
        <!-- Hace la referencia de donde se encuentra el directorio de Bootstrap (carpeta Public) -->
        <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('public/js/jquery.min.js')?>"> </script>
        <script src="<?php echo base_url('public/js/bootstrap.js')?>"> </script> 
        
    </head>
    <body> 
        <!-- <header>
            cabeza
        </header>
        -->
        <div id="container"> <!-- Este container viene de los estilos del Bootstrap.CSS
            <!-- AQUI VA EL CONTENIDO DE LAS VISTAS -->
            <div class="col-md-10 col-md-offset-1"> <!-- El estilo lo saco de bootstrap, ya lo trae cargado -->
                
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
                        <a class="navbar-brand" href="#">CRUD-CI3</a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="<?php echo base_url(''); ?>">Inicio <span class="sr-only">(current)</span></a></li>
                          <li><a href="#">Usuario</a></li>
                          
                        </ul>
                        <form class="navbar-form navbar-left">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#">Link</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $this->load->view($contenido); //Aqui carga las vistas, como parametros el paso la variable contenido del array data
                        ?>
                    </div>
                </div>
                <footer>
                    <hr style="border-top: 1px solid #0086b3">
                    <center>&copy; 2016 | Todos los Derechos Reservados</center>
                </footer>
            </div>  
        </div>
        <!--<footer>
            pie
        </footer>
        -->
    </body>
</html>