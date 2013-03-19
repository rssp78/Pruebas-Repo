<?php


$Seccion="HOME";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - www.myfirstgig.es</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
  <script src="js/easySlider1.7.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#accordion").accordion();
    
            $("#slider").easySlider({
                auto: true,
                continuous: true,
                width:410
            });
        });

  </script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include("Cabecera.php"); ?>
  
  
  
  <div id="contenido">
    <div id="columnaIzquierda">
        <div id="slider">
            <ul>
                <li>
                        <img src="css/imagenes/slide_home/slide_1.jpg" width="410" height="205" />
            
                </li>
                <li>
                        <img src="css/imagenes/slide_home/slide_2.jpg" width="410" height="205" />
            
                </li>
                <li>
                        <img src="css/imagenes/slide_home/slide_3.jpg" width="410" height="205" />
            
                </li>
            </ul>
        </div>
                
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">
            <h1>My First Gig</h1>
          </div>
          <div class="AccordionPanelContent">
              <p >La escena musical sigue creciendo en cantidad, variedad y calidad. Se puede sentir el movimiento, la inquietud creativa, la iniciativa y el arrojo, en la mezcla de generaciones y maneras de hacer las cosas que conforman la actitud musical actual.
                  <br><br>
Cualquiera puede percibir que existe un circuito para la música en directo aunque no todos pueden disfrutar de tanta creatividad en el momento en que está ocurriendo.
<br><br>
Generando nuevas oportunidades, My First Gig encara la precaria situación de los menores de edad para acceder a esta parte de la cultura y mejora su participación y vivencia de la música en directo.

             <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>   <br><br><br>  <br><br><br>   
           <br><br><br>
              </p>
          </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">
            <h1>¿Qué es My First Gig?</h1>
          </div>
          <div class="AccordionPanelContent">
            <p >
     My First Gig acerca la música en directo a los jóvenes menores de 18 años dándoles la oportunidad de ver en concierto a grupos profesionales de la escena actual en la mítica sala madrileña <a href="http://www.siroco.es" target="_blank">Siroco</a>.
     <br><br>
Pero el objetivo principal de esta iniciativa es que los más jóvenes puedan participar de la música en directo antes de los 18 años y por eso My First Gig hace posible que los grupos formados por menores de edad tengan la oportunidad de tocar en directo en un entorno óptimo, dotándoles de una conciencia real del funcionamiento profesional de este tipo de eventos.
<br><br>
En una sala como Siroco, con un backline de lujo, atendidos por técnicos y profesionales de la industria, acompañarán en directo a grupos profesionales para que este concierto sea su referencia y su objetivo, creando así un sólido punto de partida para su carrera.
<br><br>
Con My First Gig, los grupos trabajarán en todas las fases de la producción y aprenderán cómo se organiza un concierto, qué es una prueba de sonido, qué equipos se usan para la realización del show y quiénes son los profesionales que trabajan en estos eventos.
<br><br>
El resultado final de este proceso será su primer concierto con el que podrán lucir su música ante amigos y familiares viviendo una experiencia a la que no tendrían acceso hasta después de los 18 años.





<br><br>
           
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="columnaDerecha">
      <h2>PRÓXIMOS CONCIERTOS</h2>
      <div id="conciertos">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
       
        <!--        <div id="preconciertos">
    		<div id="fechaconciertos">	
    		<div id="diames">11</div>
            <div id="mes">Noviembre</div></div>
            <div id="gruposconciertos">The Monomes + Defectos + REEB</div>
            <div id="barrita"><img src="css/imagenes/barrita.jpg" width="<?=$AnchoBarrita[1]?>" height="11"/></div>
            <div id="infoconciertos">
            <p><span class="etiqueta">FALTAN:</span> <?=$Faltan[1]?> ASISTENTES</p>
            <p><span class="etiqueta">FINALIZA EL:</span> 07/11/2012</p>
            <p><span class="etiqueta">QUEDAN:</span> <?=$DiasRestantes[1]?> d&iacute;as</p>
            <p><a class="reservar" href="ficha_concierto_monomes.php">+ INFO</a></p>
            </div>
    
    
    	</div>
        
        <div id="preconciertos">
    		<div id="fechaconciertos">	
    		<div id="diames">18</div>
            <div id="mes">Noviembre</div></div>
            <div id="gruposconciertos">Deniro + Thundergun + Panicky Wasters</div>
            <div id="barrita"><img src="css/imagenes/barrita.jpg" width="<?=$AnchoBarrita[0]?>" height="11"/></div>
            <div id="infoconciertos">
            <p><span class="etiqueta">FALTAN:</span> <?=$Faltan[0]?> ASISTENTES</p>
            <p><span class="etiqueta">FINALIZA EL:</span> 14/11/2012</p>
            <p><span class="etiqueta">QUEDAN:</span> <?=$DiasRestantes[0]?> d&iacute;as</p>
            <p><a class="reservar" href="ficha_concierto_deniro.php">+ INFO</a></p>
            </div>
     -->
    
    	</div>
        
    </td>
    <td>
    </td>
    <td>
    </td>
    
  </tr>
</table>
<div id="mas"><a href="conciertos.php">más conciertos</a></div>
      </div>
      
      <h2>ÚLTIMOS FEEDS</h2>
  
                   <div id="feed">
 <div id="imagen_feed"><img src="css/imagenes/deniro.jpg" width="227"/></div>               	
        	<div id="info_feed">
        		<h3>Deniro en My First Gig.</h3>
              <p class="fecha">11/10/2012</p>
            	<p class="contenido_mini_feed">
                         Ya podemos confirmar la incorporación de <a href="http://www.deniro.es">Deniro</a>  al ciclo de conciertos para menores de edad My First Gig.<br><br>
La banda liderada por el actor y cantante William Miller descargará su potente rock el 18 de Noviembre en la sala Siroco. ¡Queda abierto el plazo de inscripción para los grupos que quieran acompañar en directo a Deniro!
         
                </p>
                <p class="leer_mas"><a href="feeds.php">Leer más</a></p>
            </div>
         </div> 
       
                   <div id="feed">
 <div id="imagen_feed"><img src="css/imagenes/tadeo.jpg" width="227"/></div>               	
        	<div id="info_feed">
        		<h3>The Monomes en la banda sonora de Las aventuras de Tadeo Jones.</h3>
              <p class="fecha">05/10/2012</p>
            	<p class="contenido_mini_feed">
                La película de animación Las aventuras de Tadeo Jones, dirigida por Enrique Gato, incluye la música del grupo madrileño de rock The Monomes en su banda sonora. Los productores del proyecto, liderados por Nicolás Matji, optaron por tres de los temas del segundo álbum de The Monomes para que formaran parte de la banda sonora del filme: View, Crash and Burn y Sweet Champagne. Así, las aventuras del albañil soñador convertido en intrépido arqueólogo dispuesto a salvar la Ciudad Perdida de los incas tienen lugar al ritmo del rock&roll de The Monomes. Desde su estreno, la película está arrasando en la taquilla y se ha convertido en uno de los más grandes éxitos del cine de animación español.
   
                </p>
                <p class="leer_mas"><a href="feeds.php">Leer más</a></p>
            </div>
         </div> 
       


        
        
  
    </div>
  </div>
  
  
<?php include("Pie.php") ?>