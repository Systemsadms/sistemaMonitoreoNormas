<?php
  session_start();
  if ($_SESSION['login'])
    {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administracion</title>
    <link rel="stylesheet" type="text/css"  href="main.css" />
    <link rel="stylesheet" href="../assets/css/flexboxgrid.css">
    <link rel="stylesheet" href="../assets/css/mega.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/tcal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="../js/script.js"></script>
    <script type="text/javascript" src="../js/tcal.js"></script>
</head>
<body>


<?php
include("menu.php");
?>

    <div class="menu ">
        <div class="menu-down">
        <ul class="nav nav-tabs container">
                <li class="nav-item">
                    <a class="nav-link" href="crearusuario.php">USUARIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contratos.php">CLIENTES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="vendedores.php">VENDEDORES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="normas.php">NORMAS</a>
                </li>
            </ul>
        </div>
    </div>
    










<?php
  require_once("../controlador/datosEditarCliente.php");
?>












  <section class="user-create container">
    <h1 class="user-text text-center">EDITAR USUARIO CLIENTE</h1>
    <form method="post" action="#" id="resetear" >
        <div class="row my-5">
            <h5>DATOS DEL CLIENTE</h5>
        </div>
        <div class="row">
            <div class="col-md-6">

                <p>Nombre del Cliente</p>
                <div class="input-group mb-3">
                    <input type="text"  class="form-control"  name="cliente" value="<?php echo $cliente; ?>" required>
  
                </div>

                <p>Correo Electrónico</p>
                <div class="input-group mb-3">
                    <input type="email"  class="form-control"  name="correoElectronico" value="<?php echo $email; ?>">

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Pais</p>
                        <div class="input-group mb-1">
                            <select class="custom-select" name="pais"  required>
                              <option>Brasil</option>
                              <option>Venezuela</option>
                              <option>Argentina</option>
                              <option>Bolivia</option>
                              <option>Brasil</option>
                              <option>Chile</option>
                              <option>Colombia</option>
                              <option>Ecuador</option>
                              <option>Panama</option>
                              <option>Peru</option>
                              <option>Paraguay</option>
                              <option>Uruguay</option>
                              <option>Mexico</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="#">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Idioma</p>
                        <div class="input-group mb-1">
                            <select class="custom-select" name="idioma" required>
                              <option>Espanol</option>
                              <option>Portuges</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="#">*</label>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <div class="col-md-6">

                <p>Usuario</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  name="usuarioCliente" value="<?php echo $usuarioCliente; ?>">

                </div>

                <p>Password</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  name="pass" value="<?php echo $pass; ?>">

                </div>

                <p>Dirección</p>
                <div class="input-group">
                    <textarea class="form-control hgarea" type="text" aria-label="With textarea" name="direccion"><?php echo $direccion; ?></textarea>
   
                </div>

            </div>
        </div>

        <div class="row my-5">
            <h5>DATOS DE CONTACTOS</h5>
        </div>
        <div class="col-md-12 row">
            <div class="input-group wd-1 m-1">
                <input type="text"  class="form-control" placeholder="Nombre"  name="nombreContacto[]" >
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"> </span>
                </div>
            </div>

            <div class="input-group wd-1 m-1">
                <input type="email"  class="form-control" placeholder="Correo Electrónico" name="nombreCorreo[]"  >
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"> </span>
                </div>
            </div>

            <div class="input-group wd-1 m-1 clonedInput">
                <input type="number"  class="form-control" placeholder="Teléfono" name="nombreTelefono[]" >
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"> </span>
                </div>
            </div>
            <div class="input-group wd-1 m-1 clonedInput">
                <input type="text"  class="form-control" placeholder="Cargo" name="cargo[]" >
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"> </span>
                </div>
            </div>
            <button type="button" id="btnAdd" class="btn btn-light btn-circle" onclick="agregarContacto()"><i class="fas fa-plus"></i></button>
            <div id="formularioCliente" class="col-md-12 row"></div>  
    
        </div>

        <div class="row my-5">
            <h5>DATOS DE CONTRATO</h5>
        </div>
        <div class="row">
            <div class="col-md-6">
                
                <p>Número de contrato</p>
                <div class="input-group mb-3">
                    <input type="text"  class="form-control" name="numeroContrato" value="<?php echo $numContrato; ?>">
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <p>Fecha de Inicio</p>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="inicioContrato" aria-label="Seleccione" value="<?php echo $inicioContrato; ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="date"><img src="../assets/img/calendar.png" class="calen-img" alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Fecha de Culminación</p>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="finContrato" aria-label="Seleccione" value="<?php echo $finContrato; ?>" >
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="text"><img src="../assets/img/calendar.png" class="calen-img" alt=""></button>
                            </div>
                        </div> 
                    </div>

                </div>

            </div>
            
            <div class="col-md-6">
                <p>Descripción</p>
                <div class="input-group">
                    <textarea class="form-control hgarea" aria-label="With textarea" name="descripcionCliente"><?php echo $descripcion; ?></textarea>
                </div>
            </div>
    
        </div>
<!--
        <div class="row my-5">
            <h5>CARGAR UNA FOTO</h5>
        </div>
        <div class="col-md-12 row">
            <div class="col-md-2">
                <div class="box-img">
                    <img src="assets/img/photo.png" alt="" class="box-img-cont">
                </div>
            </div>
            <div class="col-md-5">
                <p>Seleccione un archivo</p>
                <p>.jpg o .png</p>
                <div class="custom-file wd-1">
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Cargar imagen</label>
                </div>
            </div>
        </div>
    -->
        <div class="row m-5">
            <div class="col-md-12 txt-center ">
                <input type="hidden" value="<?php echo $usuario?>" name="idUser">
                <button class="btn btn-send btn-col1 m-1" type="submit" name="editarCliente">EDITAR</button>
                <button class="btn btn-send btn-col2 m-1" type="button" onclick="limpiarFormulario()">LIMPIAR</button>
            </div>
        </div>

    </form>
  </section>













<?php
  require_once("../controlador/editarCliente.php");
?>
















    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script>
        function limpiarFormulario() {
            document.getElementById("resetear").reset();
        };
    </script>
</body>
</html>

<?php
}else{
  header("location:../index.php");
}
?>
