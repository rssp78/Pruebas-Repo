<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Participa - www.myfirstgig.es</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
  <script src="js/easySlider1.7.js" type="text/javascript"></script>
  
  <script>
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
<script>
function fncValidar(){
        if ((document.getElementById("Telefono").value=="")||(document.getElementById("Email").value=="")){
            alert ('Debes indicar el email o telefono para poder ponernos en contacto.');
            return false;
        }
}
</script>

<?php $Seccion="PARTICIPA"; include("Cabecera.php"); ?>
  
  
  
  <div id="contenido">
    <div id="columnaIzquierda">
         <div id="slider">
            <ul>
                <li>   
        <img src="css/imagenes/slide_participa/slide_1.jpg" width="410" height="200" />
                </li>
                 <li>   
        <img src="css/imagenes/slide_participa/slide_2.jpg" width="410" height="200" />
                </li>
                 <li>   
        <img src="css/imagenes/slide_participa/slide_3.jpg" width="410" height="200" />
                </li>
            </ul>
         </div>   
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">
            <h1>¿Cómo funciona?</h1>
            
          </div>
          <div class="AccordionPanelContent">
            <p>My First Gig celebra sus conciertos los domingos por la tarde. Normalmente tocará 1 artista invitado que será teloneado por dos grupos jóvenes. Los conciertos se basan en un sistema de <b>crowdfunding</b>, por tanto, si el evento en cuestión se realiza es porque al menos 100 personas han reservado su entrada. Así, los grupos tendrán que arrastrar entre 30 y 50 personas de público cada uno. El progreso de las entradas reservadas, los asistentes que faltan para realizar el evento y los días que quedan para reservar, se verá reflejado tanto en el apartado conciertos de esta web como en la hoja de evento que se creará para cada concierto. </p>
            <ol>
              <li>
               ¡Apúntate! ( ver <i>¿Cómo me apunto?</i>)</li>
              <li>
                Nos pondremos en contacto para informar de posibles fechas y grupos que completarían el cartel.
</li>
              <li>
                Creamos la hoja de evento que utilizaréis para que el público se apunte y así conseguir realizar el concierto.</li>
              <li>
 ¡Mueve la hoja! Desde la creación de la hoja de evento hasta el día del concierto hay un mes aproximadamente de diferencia. Ese es el tiempo que tendréis para conseguir que vuestros padres y hermanos, tíos y primos, amigos y compañeros de clase, los vecinos... en definitiva todo            vuestro público, reserve su entrada.
</li>
              <li>
               Ensaya y ensaya hasta tener unos 30 - 45 minutos de repertorio que esté a la altura de vuestras expectativas.
</li>
              <li>
                  ¡A tocar! (ver <i>Una vez en la sala...</i>)
</li>
            </ol>
          </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">
            <h1>¿Cómo me apunto?</h1>
          </div>
          <div class="AccordionPanelContent">
              
                  <h4 style="color:#FFFFFF">Como público…</h4>
<p>
Si quieres asistir a My First Gig como público sólo tienes que apuntarte en la hoja de evento creada para el concierto que te interesa. ¡Mira la sección conciertos!
</p>
                 
                  <h4>Como grupo…</h4>
<p>
Si tienes un grupo y la edad media de los integrantes ronda los 20 ó un miembro es menor de edad, puedes actuar en My First Gig enviando un correo a grupos@myfirstgig.es. Indica en el asunto ACTUACIÓN. Incluye en el mensaje tus datos de contacto (nombre, e-mail y móvil), las edades y nombres de los componentes, los enlaces a las páginas y redes sociales de tu grupo y un tema en mp3 ó video en youtube. Nos pondremos en contacto contigo a la mayor brevedad posible.

 
  
              </p>
          </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">
            <h1>Una vez en la sala...</h1>
          </div>
          <div class="AccordionPanelContent">
            <h1>Desarrollo y timming de un evento con 3 grupos</h1>
            <p>
                <b> 14.45  - 15.00                   - Llegada de grupos a la sala.</b>
             <br> 
15.00 – 15.20                    - Montaje de backline (platos, caja, pedal bombo…).
<br> 
15.20 – 16.05                    - Prueba de sonido de ARTISTA INVITADO.
<br> 
16.05 – 16.35                   - Prueba de sonido de GRUPO 2.
<br> 
16.35 – 17.05                   - Prueba de sonido de GRUPO 1.
<br> 
    <b>17.05 – 17.20                    - Apertura de puertas.</b>
<br> 
17.20 – 17.55                   - Concierto de GRUPO 1.
<br> 
17.55 – 18.05                   - Cambio de grupo.
<br> 
18.05 – 18.50                   - Concierto de GRUPO 2.
<br> 
18.50 – 19.00                   - Cambio de grupo.
<br> 
19.00 – 20.00                   - Concierto de ARTISTA INVITADO.
<br> 
    <b>20.00 – 20.30                    - Fin del evento. Desalojo de la sala. Escenario y camerinos recogidos.</b>

 
<br>
                
                </p>
            <h1>Backline disponible en Siroco:</h1>
            <p>1 Batería Gretsch Classic Custom<br />
              &nbsp;&bull;&nbsp;1 Bombo 20’’<br />
              &nbsp;&bull;&nbsp;1 Tom base 14’’<br />
              &nbsp;&bull;&nbsp;1 Tom 1 12’’<br />
              &nbsp;&bull;&nbsp;1 Tom 2 10’’<br />
              &nbsp;&bull;&nbsp;3 Pies para platos<br />
              &nbsp;&bull;&nbsp;1 Charles<br /> <br/>
              1 Amplificador de guitarra Fender Bassman TV dúo ten (Combo)<br />
              1 Amplificador de guitarra Fender Hotrod Devile (Combo)<br />
              1 Amplificador de bajo Fender Supersonic (Cabezal y cabina)<br />
              5 soportes para guitarra y bajo<br />
              2 soportes para teclado<br />
              4 atriles</p>
            <p>Si quieres ver el rider completo de la sala pincha <a href="RiderSiroco.pdf" target="_blank">aquí</a>.</p>
            <p>Nota: El grupo llevará sus propios platos, caja y soporte de caja y pedal de bombo así como su banqueta para tocar la batería. También llevará sus instrumentos (guitarra, bajo, teclados...) y cableado.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="columnaDerecha">
      <h2>FORMULARIO DE CONTACTO</h2>
      <p>
          Si quieres participar en My First Gig de cualquier otro modo (acreditaciones, prensa, colaboraciones...) o simplemente tienes alguna sugerencia que hacernos, utiliza éste formulario y nos pondremos en contacto contigo a la mayor brevedad posible. <br /><br />Todos los campos son recomendables para una comunicación efectiva.
      </p>
      <br>

      <form method="post" action="EnviarFormularioParticipa.php" id="formulario" onSubmit="return fncValidar();">
        
          <table border="0">
              
              <tr>
                  <td class="TextoTabla" > Nombre : </td><td><input type="text" class="" name="Nombre" id="Nombre" size="40"></td>
              </tr>
              <tr>
                  <td class="TextoTabla"> Apellidos : </td><td><input type="text" class="" name="Apellidos" id="Apellidos" size="40" ></td>
              </tr>
              <tr>
                  <td class="TextoTabla"> Teléfono : </td><td><input type="text" class="" name="Telefono" id="Telefono" size="40" ></td>
              </tr>
              <tr>
                  <td class="TextoTabla"> Email : </td><td><input type="text" class="" name="Apellidos" id="Email" size="40" ></td>
              </tr>
              <tr>
                  <td class="TextoTabla"> Asunto : </td><td><select name="Asunto" id="Asunto"  >
                          <option value="--">--</option> 
                          <option value="sugerencias">sugerencias</option>
                          <option value="medios de comunicación">medios de comunicación</option>
                          <option value="acreditaciones">acreditaciones</option>
                          <option value="sponsors">sponsors</option>
                          <option value="colaboraciones">colaboraciones</option>
                          <option value="otros">otros</option>
                     </select></td>
              </tr>
              <tr>
                  <td class="TextoTabla"> Observaciones : </td><td><textarea  class="" name="Observaciones" id="Observaciones"  cols="40"></textarea></td>
              </tr>
                    <tr>
                  <td class="TextoTabla">  </td><td><input value="Enviar" class="" type="submit"></td>
              </tr>
          </table>
          
         

      </form>
    
    
    
  

      
        
    </div>
  </div>
  
  
  
<?php include("Pie.php"); ?>