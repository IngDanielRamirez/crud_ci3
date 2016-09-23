<!-- AQUI ESTARA EL CRUD DE USUARIO  "vista para el usuario"-->
<!--<h1>CRUD - CI3 /*AQUI ESTARA EL CRUD DE USUARIO  "vista para el usuario" */ </h1>-->
<!--<h1>FORMULARIO DE REGISTRO</h1>-->
<h1>CRUD CON CODEIGNATER 3 + BOOTSTRAP + MYSQL</h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>
  </ul>

  <!-- Tab panes -->
  
  <div class="tab-content">
      <!-- DIV CONSULTAS-->
      <div role="tabpanel" class="tab-pane active" id="home">
          <table class="table table-hover">
              <thead>
              
              <th><center>ID</center></th>
              <th><center>Perfil</center></th>
              <th><center>Nombres</center></th>
              <th><center>Apellidos</center></th>  
              <th><center>Correo</center></th>
              <th><center>Acciones</center></th>
              
              </thead>
              <tbody>
                  <?php foreach ($listaUsuario as $value) { ?>
                  <tr>
                      <td><?php echo $value->usu_id; ?></td>
                      <td><?php echo $value->per_nombre; ?></td>
                      <td><?php echo $value->usu_nombres; ?></td>
                      <td><?php echo $value->usu_apellidos; ?></td>
                      <td><?php echo $value->usu_correo; ?></td>
                      <td>
                          <center>
                              <a href="<?php echo base_url('usuario/delete')."/".$value->usu_id?>" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                          <a href="<?php echo base_url('usuario/edit')."/".$value->usu_id?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          </center>
                      </td>
                  </tr>
                      
                  <?php } ?>
              </tbody>
          </table>
      </div>
      
  <!-- DIV REGISTROS-->
      <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
              <div class="col-md-7">
                  <!-- registro el formulario, como metodo post, y con un action que haga referencia al nombreControlador/metodoControlador -->
                  <form method="POST" action="<?php echo base_url('usuario/insert') ?>">
                      <!-- este div, es para que salgan las 2 opciones de perfiles que existen en la BD  -->
                    <div class="form-group"><!--el estilo form-group viene de bootstap.css -->
                      <label for="exampleInputEmail1">Perfil</label>
                      <select name="txtIdper" class="form-control"> <!-- class="form-control" le da el mismo estilo
                          que el de los otros div, ese estilo viene de bootstrap.css-->
                          <?php foreach ($selPerfil as $value) { ?>
                          <option value="<?php echo $value->per_id?>"> <?php echo $value->per_nombre;?></option>
                          <!--per_id es el nombre del campo index y per_nombre es el nombre del campo nombre de perfil -->
                          <?php } ?>

                      </select>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Nombres</label>
                      <!-- en el atributo tipo debe corresponder a lo que le cacha en este caso tipo-text,
                      le agrego un name para que cuando mande los datos al controlador, para obtenerlos en el controlador
                      me tengo que REFIERA A ESTE NOMBRE que le asigne-->
                      <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="Nombres">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Apellidos</label>
                      <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Correo Electrónico</label>
                      <input type="email" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telefono</label>
                      <input type="tel" name="txtTelefono" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
                    </div>  
                    <button type="submit" class="btn btn-default">Registrar Usuario</button>
                  </form>
              </div>
              <div class="col-md-5">
                  
              </div>
          </div>
          

      </div>
  </div>

</div>
