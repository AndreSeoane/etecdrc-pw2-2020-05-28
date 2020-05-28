<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<h1>Hello World</h1>'; ?> 

    <form id="frmlancarnotas" name="frmlancarnotas" action="destino.php" method="POST"> 

    <label>Nome:</label>
    <input id="txtnome" name="txtnome" type="text" /> 


    <input id="hdnescondido" name="hdnescondido" type="hidden" value="Vale Alguma Coisa esse Escondidinho!!" /> 


    <hr>
    <button id="btnenviarnotas" name="btnenviarnotas" value="Enviar Notas" > Enviar Notas </button> 

  </body>
</html>
