<?php

	include("Conexion.php");
        mysql_select_db("EntradasDeporges");
        include_once("JSON.php");
        
        $json = new Services_JSON;
        
        $SQL_Visita="
                    insert into 
                                    Visita
                    set 
                        Pagina='".$_SERVER["SCRIPT_NAME"]."',
                        TextParametrosGET='".$json->encode($_GET)."',
                        TextParametrosPOST='".$json->encode($_POST)."',
                        TextParametrosSESSION='".$json->encode($_SESSION)."',        
                        IP='".$_SERVER["REMOTE_ADDR"]."',
                        FechaHoraVisita=now(),
                        SessionID='".$json->encode(session_id())."'
                    ";
        
        $Result_Visita=mysql_query($SQL_Visita);
?>
