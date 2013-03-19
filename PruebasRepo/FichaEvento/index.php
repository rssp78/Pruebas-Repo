<?php

$IDEvento=$_REQUEST["IDEvento"];

include("../Conexion.php");

mysql_select_db("EntradasDeporges");

$AforoMinimo=150;
$AforoMaximo=200;

$SQL_Entradas_Vendidas="  
                            SELECT 
                                    Entrada.* 
                            FROM 
                                    Entrada,
                                    Reserva 
                            WHERE 
                                    IDReserva=Reserva.ID AND 
                                    Reserva.IDEvento=568 AND 
                                    Reserva.CheckPagada=1
";


?>
