<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Envío de email a un amigo</title>
<link rel="stylesheet" type="text/css" href="http://myfirstgig.alpheus.es/css/view.css" media="all">
<script type="text/javascript" src="http://myfirstgig.alpheus.es/js/view.js"></script>
<script type="text/javascript" src="http://myfirstgig.alpheus.es/js/calendar.js"></script>
<script type="text/javascript" src="http://myfirstgig.alpheus.es/js/jquery-1.6.1.min.js"></script>

<style type="text/css">
    body { /* Color de fondo de la página */
      
        
        background: #666666;
       
    }
    
    h1 a { /* Color del marco superior */
        
        background : #009EDF;
       
    }
    
   form li.highlighted
    {
           
            background-color:#DDDDDD; /* -- Fondo de los campos del formulario en highlight --- */
        
    }
       
    
</style>

</head>
<body id="main_body" >


    <img id="top" src="http://myfirstgig.alpheus.es/img/top.png" alt="">
            
	<div id="form_container">
	
		<h1><a>Envio de email</a></h1>
                
		
                 <form id="form_182600" action="http://myfirstgig.alpheus.es/EnviarPaginaPorEmail.php" class="appnitro"  method="post" >   
		<div class="form_description">
                       
                            <img src="http://myfirstgig.alpheus.es/img/escudos/logo.png" height="100px" align="left" />
                       
                           <div align="right">
                                <h2>Envío de email</h2>
                                <p>Rellena los campos para enviarle la página del concierto a un amigo/a tuyo/a.</p>
                            </div>
		</div>	
                    
                <ul>
        <ul style="width:600">
                    
                    
                 
                      <li id="li_10" >
                          
                        <label class="description" for="element_10"> 
                          Tu nombre 
                            
                        </label>                    
                          <input type="text" name="NombreFrom" size="30"/>
                    </li> 
                <li id="li_10" >
                          
                        <label class="description" for="element_10"> 
                          Tu email  
                            
                        </label>                    
                          <input type="text" name="EmailFrom" size="30"/>
                    </li> 
            
                   <li id="li_10" >
                          
                        <label class="description" for="element_10"> 
                          Nombre del destinatario  
                            
                        </label>                    
                          <input type="text" name="NombreDestinatario" size="30"/>
                    </li> 
                   <li id="li_10" >
                          
                        <label class="description" for="element_10"> 
                          Email del/los destinatario (para poner varios separar los email por ;)
                            
                        </label>                    
                          <textarea name="EmailDestinatario" cols="60" rows="6"></textarea>
                    </li> 
                   <li id="li_10" >
                          
                        <label class="description" for="element_10"> 
                          Asunto del email 
                            
                        </label>                    
                          <input type="text" name="Subject" size="60"/>
                    </li> 
              <li id="li_10" >
                          
                                        
                          <input type="submit" value="Enviar"/>
                    </li> 
            
        </ul>
                    

</form>
                 
           
                    
                <div class="form_description">
                    &nbsp;
                </div> 
                
</form>	
                
         
         
	</div>
	
	</body>
</html>