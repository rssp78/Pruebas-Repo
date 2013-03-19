<?php

$Seccion="CONCIERTOS";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyFirstGig</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("Cabecera.php"); ?>
  
  <div id="contenido">
    
    <div id="columnaizquierda2">
    <h2>PRÓXIMOS CONCIERTOS</h2>
    <!--
            <div id="concierto_pagina">
      	<div id="foto_grupo"><img src="css/imagenes/monomes.jpg" width="420"  /></div>
        	<div id="infoconciertos_pagina">
        		<h3>The Monomes + Defectos + REEB</h3>
              
             
              <div id="infoconciertos">
            <p><span class="etiqueta">FECHA:</span> 11 NOVIEMBRE</p>
            <p><span class="etiqueta">FALTAN:</span> <?=$Faltan[1]?> ASISTENTES</p>
            <p><span class="etiqueta">FINALIZA EL:</span> 07/11/2012</p>
            <p><span class="etiqueta">QUEDAN:</span> <?=$DiasRestantes[1]?> d&iacute;as </p>
            
            </div>
              
              
            	<p>
             Hola amigos, somos The Monomes.<br> 
Sabemos que durante nuestra pasada gira "Sweet Champagne", muchos de vosotros os quedasteis a las puertas de la sala, sin poder entrar a vernos tocar por ser menores de edad. <br>
Así que gracias a My First Gig, hemos organizado un concierto únicamente para vosotros el próximo 11 de Noviembre en Siroco. Además compartiremos el escenario con otros dos grupazos!<br>
Esperamos veros allí. Va a ser la bomba!          
                </p>
                <p><a class="reservar" href="ficha_concierto_monomes.php">+ INFO</a></p>
        	</div>
         </div>
    -->
      <div id="concierto_pagina">
      	<div id="foto_grupo"><img src="css/imagenes/deniro.jpg" width="420"  /></div>
        	<div id="infoconciertos_pagina">
        		<h3>DENIRO + Thundergun + Panicky Wasters</h3>
              
             
              <div id="infoconciertos">
            <p><span class="etiqueta">FECHA:</span> 18 NOVIEMBRE</p>
            <p><span class="etiqueta">FALTAN:</span> <?=$Faltan[0]?> ASISTENTES</p>
            <p><span class="etiqueta">FINALIZA EL:</span> 14/11/2012</p>
            <p><span class="etiqueta">QUEDAN:</span> <?=$DiasRestantes[0]?> d&iacute;as </p>
            
            </div>
              
              
            	<p>
               Que tal amig@s!!  Somos Deniro, estamos terminando la gira de nuestro primer disco y tenemos el nuevo disco a punto de salir. Durante todos los conciertos de la gira, hemos conocido a muchos amig@s que no han podido ir a vernos porque la ley no deja entrar a menores en salas, tema que nos duele ya que lo vemos injusto… Ahora tenemos la oportunidad de tocar ante todos ellos y ante vosotros, así que estamos deseando de tocar nuestros mejores temas y algunos del nuevo disco en exclusiva para vosotros. Os esperamos el próximo día 18 de Noviembre en la sala SIROCO, lo pasaremos genial!!  …Un Abrazo a tod@s!                          
       
                </p>
                <p><a class="reservar" href="ficha_concierto_deniro.php">+ INFO</a></p>
        	</div>
         </div>
         
         
        
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
    </div>
    <div id="columnaDerecha2">
      <div id="historico">
      <h2>HISTÓRICO DE CONCIERTOS</h2>
  
      <ul>Mayo</ul>
      	<li><a href="ficha_concierto_dinero.php">Dinero + Mayhem Boulevard + Fizzy State</a></li>
        <ul></ul>
        <ul>Noviembre</ul>
      	<li><a href="ficha_concierto_monomes.php">The Monomes + Defectos + REEB</a></li>
        
        <ul><li><a href="ficha_concierto_deniro.php">DENIRO + Thundergun + Panicky Wasters</a></li></ul>
    </div>
  </div>
  
  
  
<?php include("Pie.php"); ?>