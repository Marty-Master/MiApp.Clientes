<?php 
	require("../modelo/modelo.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
</head>
   <style type="text/css">
        body{
            background: #CDF9FF;
        }
        .content{
             margin: 0 auto;
             width: 500px;
             height: 300px;
             margin-top: 9%;
             background: #F9AE3E;
             color: #fff;
             border: 6px solid #03A2AD;
        }
        label{
            display: block;
        }
        .caja_login{
            margin: 30px 0px 0px 70px;
        }
        .caja_login input[type=text],input[type=password]{
            width: 280px;
            padding: 8px 6px;
            border-radius: 8px;
        }
        .caja_login input[type=submit]{
            padding: 5px 60px;
            text-align: center;
            border-radius: 4px;
            color: #fff;
            background: #03A2AD;
            border: 1px solid #fff;
            margin-top: 10px;
        }
    </style>

<body>
	<form action="../controlador/controlador.php" method="post" enctype="multipart/form-data">    
    	<div style="text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#551BF4;">
    		<div class="caja_login">
        	<h1>Registrar Cliente</h1>
        	<br />
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" value="" required="required" /><br />
            <br />
           <label>Estado</label>
            <select name="Estados" id="estados">
            <?php 
            $objModelo = new Formulario();
            $objModelo->lista_estado();
            ?>
			</select>
			<br />
		
            <input type="hidden" name="estado_id" id="estado_id" value="" required="required" /><br />
            <label>Apellidos</label>
            <input type="text" value="" name="apellidos" id="apellidos" required="required" /><br />
            <label>Telefono</label>
            <input type="text" name="telefono" id="telefono" value="" required="required" /><br />
            <label>Email</label>
            <input type="text" name="email" id="email" value="" required="required" /><br />
            <br />
            <br />
            <br />
            <input type="submit" value="Registrar" />
            <br />
            <br />
            <a href='modificarInformacion.php' target="_blank" style="color:#551BF4;">Lista de Clientes</a><br />
            <?php 
            if(isset($_GET["mensaje"])){
            	echo "<center>".$_GET["mensaje"]."</center>";
            }
            ?>            
            <br />

    </div>
    </form>

    



</body>
</html>