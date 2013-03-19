<?php

$IDEvento=$_REQUEST["IDEvento"];

include("Archivos/Conexion.php");

mysql_select_db("EntradasDeporges");

$SQL_Newsletter="insert into Newsletter set EmailDestinatario='".$_REQUEST["EmailDestinatario"]."'";
$Result_Newsletter=mysql_query($SQL_Newsletter);

if($Result_Newsletter) {
    ?>

<script language="javascript">
    alert("Se ha dado de alta su email en la base de datos correctamente.");
    window.close();
    </script>

<?php
    
} else {
  
    ?>
    
    <script language="javascript">
    alert("Error al registrar la información. Inténtelo de nuevo más tarde.");
    window.close();
    </script>

 <?php
}
?>
