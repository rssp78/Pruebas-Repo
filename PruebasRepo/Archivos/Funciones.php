<?php

function DiasRestantes($dia2,$mes2,$anyo2) {
    


$dias_diferencia = ceil((mktime(0, 0, 0, $mes2, $dia2, $anyo2, 1) - time())/86400)+1;

if($dias_diferencia<0) {
    $dias_diferencia=0;
}
return $dias_diferencia;
    
}

function EntradasVendidasEvento($IDEvento) {
    include("Conexion.php");
    
mysql_select_db("EntradasDeporges");

    $Vendidas=0;
    $SQL_Entradas_Vendidas="  
                            SELECT 
                                   count(*) 
                            FROM 
                                    Entrada,
                                    Reserva 
                            WHERE 
                                    IDReserva=Reserva.ID AND 
                                    Reserva.IDEvento='".$IDEvento."' AND 
                                    Reserva.CheckPagada=1
";

$Result_Entradas_Vendidas=mysql_query($SQL_Entradas_Vendidas);

if($Fila_Entradas_Vendidas=mysql_fetch_array($Result_Entradas_Vendidas)) {
    $Vendidas+=$Fila_Entradas_Vendidas[0];
}

return $Vendidas;

}

?>
