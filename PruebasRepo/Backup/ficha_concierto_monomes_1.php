<?php

$IDEvento=$_REQUEST["IDEvento"];

include("Archivos/Conexion.php");
include("Archivos/Funciones.php");

mysql_select_db("EntradasDeporges");

$AforoMinimo=100;
$AforoMaximo=200;
$IDEvento=632;
$Vendidas=0;
$AforoMinimoBarrita=97;
$AforoMaximoBarrita=194;

$Vendidas=EntradasVendidasEvento($IDEvento);

$DiasRestantes=DiasRestantes(7,11,2012);

$Faltan=$AforoMinimo-$Vendidas;

if($Faltan<0) {
    $Faltan=0;
    $AnchoBarrita=$AforoMinimoBarrita+floor((($AforoMaximoBarrita-$AforoMinimoBarrita)*($Vendidas-$AforoMinimo))/($AforoMaximo-$AforoMinimo));
} else {
    $AnchoBarrita=ceil(($AforoMinimoBarrita*$Vendidas)/$AforoMinimo);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Monomes + Defectos + REEB - www.myfirstgig.es</title>
<link href="http://www.myfirstgig.es/css/estilos2.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="envoltorio">
  <div id="encabezado">
  <div id="logo"><a href="http://www.myfirstgig.es/index.php"><img src="http://www.myfirstgig.es/css/imagenes/logo.png" alt="myfirstgig" width="180" height="190" border="0" /></a></div>
  
    
    <div id="nav">
      
    </div>
  </div>
  
  
  
  
  <div id="contenido">
    
    <div id="columnaizquierda2">
    
    <h2>11 DE NOVIEMBRE / SALA SIROCO    </h2>
    <h3><b>Entradas a la venta únicamente desde esta página. No habrá entradas disponibles en taquilla.</b></h3>
        <p> <b> Sala Siroco </b> &bull; Calle San Dimas 3, 28015 Madrid &bull; Metro Noviciado o San Bernardo </p>
        <p> Apertura de puertas a las 17.00 horas. </p>
        <p> 17.20 &minus; Actuaci&oacute;n REEB </p>
        <p> 18.05  &minus; Actuaci&oacute;n Defectos </p>
        <p> 19.00  &minus; Actuaci&oacute;n The Monomes </p>
    <h2>The Monomes + Defectos + REEB </h2>
    
    <div id="concierto_pagina">
      	<div id="foto_grupo"><img src="/Grupos/Imagenes/monomes.jpg" width="420" /></div>
        	<div id="infoconciertos_pagina">
       		  <h3>The Monomes </h3>
        		<p> 
Hola amigos, somos The Monomes.<br> 
Sabemos que durante nuestra pasada gira "Sweet Champagne", muchos de vosotros os quedasteis a las puertas de la sala, sin poder entrar a vernos tocar por ser menores de edad. <br>
Así que gracias a My First Gig, hemos organizado un concierto únicamente para vosotros el próximo 11 de Noviembre en Siroco. Además compartiremos el escenario con otros dos grupazos!<br>
Esperamos veros allí. Va a ser la bomba!
                        </p>
        		<p><a href="http://www.themonomes.com" target="_blank">Web oficial</a><br />
        		  <a href="http://www.facebook.com/TheMonomesOficial" target="_blank">Facebook</a><br />
                           <a href="http://www.twitter.com/themonomes" target="_blank">Twitter</a><br />
                 <a href="http://www.tuenti.com/themonomes" target="_blank">Tuenti</a><br />
               <a href="http://www.youtube.com/themonomesmusic" target="_blank">Youtube</a><br />
               <a href="http://www.myspace.com/themonomes" target="_blank">MySpace</a><br />
                
        	</div>
         </div>
         
         
         
         <div id="concierto_pagina">
      	<div id="foto_grupo"><img src="/Grupos/Imagenes/defectos.jpg" width="420"  /></div>
        	<div id="infoconciertos_pagina">
       		  <h3>Defectos </h3>
        		<p> 
                        
¿Qué tal? Somos Defectos, un joven grupo madrileño de pop rock/powerpop. Hemos vuelto de las vacaciones de verano con muchas ganas de dar conciertos de nuevo! Y sabemos que gran parte de nuestro público es menor de edad, así que pocas veces podremos decir esto: el 11 de noviembre tocaremos en la sala Siroco a una hora bastante prudente y para toda esa gente a la que le resulta tan difícil disfrutar de la música en directo... los menores. No te olvides de esa fecha y reserva tu entrada, lo pasaremos como nunca!!                          
                            
                        </p>
        		<p>
                            <a href="http://defectosweb.blogspot.com.es/" target="_blank">Web oficial</a><br />
        		  <a href="http://twitter.com/DefectosOficial" target="_blank">Twitter</a><br>
                          <a href="http://www.facebook.com/defectosoficial" target="_blank">Facebook</a><br />
                        <a href="http://www.myspace.com/defectosband" target="_blank">MySpace</a><br />
                          
                        </p>
                
        	</div>
         </div>
         
         
         
         
         
         <div id="concierto_pagina">
      	<div id="foto_grupo"><img src="/Grupos/Imagenes/reeb.bmp" width="420"  /></div>
        	<div id="infoconciertos_pagina">
        		<h3>REEB</h3>
       		  <p>
      Buenas, somo REEB, una banda pop-rock-punk de Majadahonda, que después de varias temporadas de ensayos y de idas y venidas de músicos en la misma, parece que ha asentado la cabeza y se ha puesto a trabajar en serio para conseguir llegar a algo en este difícil mundo de la música. Por ello mismo nos haría mucha ilusión tocar el 11 de noviembre de 2012 en la sala Siroco, junto con nuestros fans que por ser menores no pueden asistir a otras actuaciones.
      <br> Un cordial saludo,
          <br> REEB             </p>
        		<p>
                    <a href="http://www.youtube.com/watch?v=O1hfzVsM9F4" target="_blank">Youtube</a><br />
                        </p>
        		  
                
        	</div>
            
         </div>
      <!--   <h2>VIVE LA MÚSICA EN DIRECTO ANTES DE LOS 18</h2>
         
            <p>My First Gig acerca la música en directo a los jóvenes menores de 18 años dándoles la oportunidad de ver en concierto a grupos profesionales de la escena actual en la mítica sala madrileña Siroco.</p>
            <p>Pero el objetivo principal de esta iniciativa es que los más jóvenes puedan participar de la música en directo antes de los 18 años y por eso My First Gig hace posible que los grupos integrados por menores de edad tengan la oportunidad de tocar en directo en un entorno óptimo, dotándoles de una conciencia real del funcionamiento profesional de este tipo de eventos.</p>
            <p>En una sala como Siroco, con un backline de lujo, atendidos por técnicos y profesionales de la industria, acompañarán en directo a grupos profesionales para que este concierto sea su referencia a seguir y objetivo a conseguir, creando así un sólido punto de partida para su carrera.</p>
            <p>Con My First Gig, los grupos trabajarán en todas las fases de la producción y aprenderán cómo se organiza un concierto, qué es una prueba de sonido, qué equipos se usan para la realización del show y quiénes son los profesionales qué trabajan en estos eventos.</p>
            <p>El resultado final de este proceso será su primer concierto y tendrán la oportunidad de enseñar su música a amigos y familiares viviendo una experiencia a la que no tendrían acceso hasta después de los 18 años.</p>
         -->
      <h2>¡PÁSALO!</h2>
            <p>¡Mueve esta hoja! Para que este concierto se realice hay que conseguir un mínimo de 100 entradas reservadas. Mira el contador arriba a la derecha y ayúdanos a que el concierto se haga realidad. Pásaselo a tus padres y hermanos, tus tíos y primos, tus amigos y compañeros de clase, los vecinos... en definitiva a todo el mundo y… ¡que reserven su entrada!</p>
             
            <h3>Te recordamos que es un concierto especialmente organizado para menores de edad.
</h3>
            <h3>A partir de 14 años.</h3>
         
         <div id="compartir">
         <div id="compartircorreo">
         
          </div> 
         <div id="compartirredes">
         
         <span class="cmp">COMPARTIR EN</span> 
            <a href="http://www.facebook.com/sharer.php?u=http://www.myfirstgig.es/ficha_concierto_monomes.php?v=3"><img src="http://www.myfirstgig.es/css/imagenes/facebook.png" width="50" height="50" border="0" /></a>
            <a href="http://twitter.com/home?status=http://www.myfirstgig.es/ficha_concierto_monomes.php"><img src="http://www.myfirstgig.es/css/imagenes/twitter.png" width="50" height="50" border="0" /></a>
            <a href="http://www.tuenti.com/share?url=http://www.myfirstgig.es/ficha_concierto_monomes.php"><img src="http://www.myfirstgig.es/css/imagenes/tuenti.png" width="50" height="50" border="0" /></a>
            </div>
         
         </div>
         
        
      
        
    </div><!--
    <div id="columnaDerecha2">
      <div id="detalleconcierto">
      <?php
      if($Faltan>0) {
          
      ?>
      	<div id="grupofaltan">
        	<div id="faltan">FALTAN</div>
            <div id="numerofaltan"><?=$Faltan?></div>
            <div id="asistentes">ASISTENTES</div>
        </div>    
      <?php
      } else {      
      ?>
      	<div id="grupofaltan">
        	<div id="faltan">FALTAN</div>
            <div id="numerofaltan"><?=$Faltan?></div>
            <div id="asistentes">ASISTENTES</div>
        </div>  
          
       <?php
      }
      ?>
        <div id="grupoquedan">
           
        	<div id="quedan">FALTAN</div>            
                     <div id="numerofaltan"><?=$DiasRestantes?></div>
            <div id="dias">DIAS</div>
        </div>
        
        <div id="patrocinadas">0</div>
        <div id="vendidas"><?=$Vendidas?></div>
        <div id="necesarias"><?=$AforoMinimo?></div>
        <div id="total"><?=$AforoMaximo?></div>
        <div id="barrita"><img src="http://www.myfirstgig.es/css/imagenes/barrita.jpg" width="<?=$AnchoBarrita?>" height="11"/></div>
        <div id="finaliza"><span class="blanco">FINALIZA EL</span> 7 DE NOVIEMBRE DE 2012</div>
        <div id="precioentrada">8,5€</div>
        <div id="botonreservar"><a class="reservar2" href="http://myfirstgig.alpheus.es/index.php?IDClub=6821&IDEvento=632" target="_blank">RESERVAR</a></p></div>
      </div>
        	
<p><div id="cuadroinfo">
        
        <p> &bull; Reserva tu entrada hoy y te la enviamos por email.</p>
<p> &bull; La operación de reserva se realizará por medio de un apunte en tu tarjeta de crédito. </p>
<p> &bull; No se te cobrará la entrada hasta que se confirme la realización del evento.</p>
<p> &bull; La fecha tope de confirmación del evento será el 7 de Noviembre.</p>
<p>Si ese día se ha superado la cantidad mínima de asistencia (100 reservas) el evento se realizará. En ese momento se pasará el cargo a tu tarjeta de crédito. Si no se llegase a 100 asistentes en la fecha de finalización, la entrada no se cobrará y  el apunte será borrado. En tal caso la entrada enviada por email quedará deshabilitada. Más información pulsando RESERVAR.</p>
        
        
    </div></p>
    </div>-->
    
  </div>
  
  
  
  
  <div id="pie">
  	<div id="logos">
    	<img src="http://www.myfirstgig.es/css/imagenes/logos_pie.jpg" alt="logos"  border="0" usemap="#Map" />
    </div>
    
    
    
    
    
    
    
  </div>
</div>
</body>
<map name="Map" id="Map">

    </map>
</html>
