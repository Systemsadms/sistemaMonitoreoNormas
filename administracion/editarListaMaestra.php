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
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" href="../assets/css/flexboxgrid.css">
        <link rel="stylesheet" href="../assets/css/mega.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/tcal.css">

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
            
            <section class="user-create container my-5">
                
                    <form method="post" action="#">
                        <h1 class="user-text text-center">LISTA MAESTRA</h1>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="client-span">DOCUMENTO:</span>
                                    <input name="documento"  class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="client-span">SDO - ORG:</span>
                                    <input name="sdo" class="form-control"  readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <span class="client-span">TITULO:</span>
                                    <input type="text" name="titulo"  class="form-control" readonly>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <!-- ROJO -->
                                        <div class="input-group mb-3">
                                            <span class="client-span">REVISIÓN DEL CLIENTE:</span>
                                            <input type="text" name="titulo"  class="form-control" readonly>
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="client-span">NUEVA FECHA:</span>
                                            <input name="revision" value=" " class="form-control" readonly>
                                        </div>

                                        <div class="input-group mb-1">
                                            <select class="custom-select" name="revisionSelect" required>
													<option>SELECCIONE...</option>
													<option>Esperando Confirmacion</option>
													<option>No la posee</option>                          
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <!-- AMARILLO  -->
                                        <div class="input-group mb-3">
                                            <span class="client-span">REVISIÓN ACTUAL:</span>
                                            <input class="form-control" readonly>
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="client-span">NUEVA REVISIÓN:</span>
                                            <input class="form-control" readonly>
                                        </div>

                                        <div class="input-group mb-1">
                                            <select class="custom-select" name="idioma" required>
												<option>SELECCIONE...</option>
												<option>Portuges</option>                              
										</select>
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="client-span">REEMPLAZADO POR:</span>
                                            <select class="custom-select" name="idioma" required>
												<option>SELECCIONE...</option>
												<option>Portuges</option>                              
										</select>
                                        </div>

                                    </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="client-span">ESTATUS CLIENTE:</span>
                                                <input type="text" name="titulo"  class="form-control" readonly>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="client-span">NUEVO ESTATUS: </span>
                                                <select class="custom-select" name="estatusSelect" required>
													<option>SELECCIONE...</option>
													<option>Actualizada</option>
													<option>Desactualizada</option>
													<option>Informar</option>
													<option>-</option>                             
											</select>
                                            </div>
                                            <div class="row">
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">R:</span>
                                                    <input type="text" name="rada"  class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">E:</span>
                                                    <input name="e"  class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">STBZ:</span>
                                                    <input name="strz"  class="form-control" readonly>
                                                </div>

                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">CRGD:</span>
                                                    <input name="crgo"  class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">ADD:</span>
                                                    <input name="add" class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">TC:</span>
                                                    <input name="tc"  class="form-control" readonly>
                                                </div>

                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">AMD:</span>
                                                    <input name="amd"  class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">ERTA:</span>
                                                    <input name="erta"  class="form-control" readonly>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="input-group my-2">
                                                        <span class="client-span">OBSERBACION <br> DEL CLIENTE:</span>
                                                        <textarea name="observaciones" class="form-control hgarea" aria-label="With textarea" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="client-span">ESTATUS NORMA:</span>
                                                <input value="GMW93" class="form-control" readonly>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="client-span">NUEVO ESTATUS:</span>
                                                <select class="custom-select" name="idioma" required>
													<option>SELECCIONE...</option>
													<option>Portuges</option>                              
											</select>
                                            </div>
                                            <div class="row">
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">R:</span>
                                                    <input type="text" name="e"  class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">E:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">STBZ:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>

                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">CRGD:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">ADD:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">TC:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>

                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">AMD:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>
                                                <div class="input-group my-2  col-md-4">
                                                    <span class="client-span">ERTA:</span>
                                                    <input value="ISO" class="form-control" readonly>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="input-group my-2">
                                                        <span class="client-span">OBSERBACION <br> DE LA NORMA:</span>
                                                        <textarea class="form-control hgarea" aria-label="With textarea" name=""></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                </div>


                                <div class="col-md-12" style="text-align: end; margin: 50px 0;">
                                    <a href="contratos.php" class="col-boton" style="margin: 0 auto;">VOLVER A LISTA</a>
                                </div>

                                <div class="col-md-12 txt-center ">
                                    <button class="btn btn-send btn-col1 m-1" type="submit" name="registrarCliente">GUARDAR</button>
                                </div>

                        </div>
                </form>
            </section>

<?php
include("js.php");
?>
    </body>

    </html>

    <?php
}else{
  header("location:../index.php");
}
?>