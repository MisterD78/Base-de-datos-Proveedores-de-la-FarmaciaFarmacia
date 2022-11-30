<?php
include("conexion.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Registro de Proveedores de la Farmacia</title>

    <style>
      body {
        background-color: #87ccc1;
        margin: 0;
        padding: 0;
      }
      h1 {
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 30px;
      }
      table {
        border: 3px solid #cca633;
        padding: 20px 50px;
        margin-top: 20px;
        border-radius: 5px;
        background-color: #edf797;
      }
    .Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 25px;
	color: #000000;
}
    </style>
  </head>
  <body>
  	<form action="conexion.php" method="post">
    <h1 class="Estilo1">Formulario de Registro de Proveedores de la Farmacia</h1>
	<form action="#" id="proveedores" name="Agregar" method="POST">
     <table width="383" border="0" align="center">
     <tr>
      <td><label>RFC</label></td>
      <td><input type="text" id="RFC" name="rfc" placeholder="RFC"></td>
    </tr>
    <tr>
      <td><label>Razon Social</label></td>
      <td><input type="text" id="Razon_Social" name="razon_social" placeholder="Razon Social"></td>
    </tr>
    <tr>
      <td><label>Dirreccion</label></td>
      <td><input type="text" id="Direccion" name="direccion" placeholder="Direccion"></td>
    </tr>
    <tr>
      <td><label>Estado</label></td>
      <td><input type="text" id="Estado" name="estado" placeholder="Estado"></td>
    </tr>
    <tr>
      <td><label>Contacto</label></td>
      <td><input type="text" id="Contacto" name="contacto" placeholder="Contacto"></td>
    </tr>
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"
              name="enviar"
              id="Enviar"
              value="Registrarse"}
            />
          </td>
          <td align="center">
            <input type="reset" name="borrar" id="borrar" value="Restablecer" /> 
		  </td>
      
		<form action="#" id="proveedores" name="Eliminar" method="POST">
		<table align="center" width="33%" border="1">
    <td align="center">
            <a href ="https://www.google.com.mx" target="_blank"><strong> Salir </strong></a> 
	     </td>
        </tr>
      </table>
</button>
    </form>
    </form>
  </body>
</html>
</tr>
  </tbody>
</table>
</form>
	</div>
	
</body>
</html>

<?php
	if(isset($_POST['registrarse'])){
		$rfc=$_POST['rfc'];
		$RaSo=$_POST['razon_social'];
		$Dir=$_POST['direccion'];
		$Est=$_POST['estado'];
		$Con=$_POST['contacto'];
		mysqli_query($conexion, "INSERT INTO proveedor (`RFC`, `RazonSocial`, `Direccion`, `Estado`, `Contacto`) VALUES ('$rfc','$RaSo','$Dir','$Est','$Con')");
	}mysqli_close($conexion);
?>
