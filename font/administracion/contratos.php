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
                    <a class="nav-link " href="crearusuario.php">USUARIOS</a>
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



        <section class="vendedor container my-5">
            <h1 class="user-text text-center">LISTA DE CONTRATOS</h1>


            <div class="row my-5">
                <div class="col-md-6">
                    <h5>CONTRATOS CREADOS</h5>
                </div>
                <div class="col-md-6">
                    <div class="input-group ">
                        <input type="text" id="searchTerm" class="form-control" onkeyup="doSearch()" placeholder="Buscar" />
                        <span class="input-group-btn">
                        <button class="btn btn-search" type="button">
                            <img src="../assets/img/magnifier.png" class="calen-img" alt="">
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        
  <?php
 require_once("../modelo/connect.php");

 if(isset($_POST['delete'])){

    $usuario = $_POST['idUser'];
    
    $consulta = "DELETE FROM vendedor WHERE id='$usuario' ";
    $hacerconsulta = $conexion->query($consulta);
    echo "<br><br>";
    echo "Vendedor eliminado";
    echo "<br><br>";
}

if(isset($_POST['usersID'])){

    $usuario = $_POST['usersID'];

    for($i=0; $i<sizeof($usuario); ++$i){

        $userToDelete = $usuario[$i];
        $consulta = "DELETE FROM usuarios WHERE id='$userToDelete' ";
        $hacerconsulta = $conexion->query($consulta);
    }

    echo "Usuarios eliminados";
}

 $consulta = "SELECT * FROM usuarios";

 ?>
                   <div style="margin:0 auto; font-size: 13px;" >
                   <form method='post' action='#' name='myForm'>
                  <?php

        $hacerconsulta = $conexion->query($consulta);
                           
                echo "<table class='table table-bordered' id='datos'>";
                echo "<thead class='bck-thead txt-center'>";
                echo "<tr>";
                echo "<th><input type='checkbox' class='check' id='checkAll'></th>";
                echo "<th> ID </th>";
                echo "<th>CLIENTE</th>";
                echo "<th>CORREO ELECTRÓNICO </th>";
                echo "<th> PAIS</th>";
                echo "<th>INICIO DE CONTRATO</th>";
                echo "<th>FIN DE CONTRATO</th>";
                echo "<th> N° CONTRATO </th>";
                echo "<th> ESTATUS </th>";
                echo "<th> OPCIONES </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                echo "<tr>";
                echo "</tr>";		
                          
                          
            //$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
            $reg=$hacerconsulta->fetch_array();
                          
                          while ($reg)
                          {
                            echo "<tr>";
                            echo "<td>                            
                            <input type='checkbox' class='check' aria-label='Checkbox for following text input' name='usersID[]' value='".$reg[0]."'>
                            </form>
                            </td>";
                            echo "<td align='center' >".$reg[0]."</td>";
                            echo "<td align='center' >".$reg[1]."</td>";
                            echo "<td align='center' >".$reg[2]."</td>";
                            echo "<td align='center' >".$reg[6]."</td>";
                            echo "<td align='center' >".$reg[8]."</td>";
                            echo "<td align='center' >".$reg[9]."</td>";
                            echo "<td align='center' >".$reg[11]."</td>";
                            echo "<td align='center' >".$reg[10]."</td>";

                          
                          echo "
                          <td  align='center'>				
								<form action='verUsuario.php' method='post'>			
                                    <input type='hidden' name='idUser' value=".$reg[0].">
                                    <input type='hidden' name='delete'>
									<input type='image' name='imageField' src='../assets/img/magnifier.png' width='20px'/>
                                </form>                                								
                              <form action='listaMaestra.php' method='post'>			
                                  <input type='hidden' name='cliente' value=".$reg[0].">                                  
                                  <input type='submit' class='btn m-1' name='imageField' value='Lista Maestra'/>
                              </form>				
                          </td>
                          
    
                          ";//FIN DEL echo

                          
                  


            //$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
            $reg=$hacerconsulta->fetch_array();
                          echo "</tr>";
                          }
                          echo "</table>";
                          $conexion->close();

                          ?>
                              </div>
                          <?php
 ?>

 
 <div class="col-md-12 p-0">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <a href="javascript:myFunction()" class="btn btn-trash p-1">ELIMINAR SELECCIÓN |  <img src="../assets/img/trash-can.png" class="wdt-form" alt=""></a>
                    </div>
                    
                </div>
            </div>
  </section>




<script>
function myFunction() {
    document.myForm.submit() 
}
</script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>

<?php
}else{
  header("location:../index.php");
}
?>
