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
    <br>    <br>
    
    <label>Módulo:</label>
    <select id="cmbmodulo" name="cmbmodulo"> 
      <option value="-1" selected  disabled>Selecione...</option>
      <option value="1">1º Módulo</option>
      <option value="2">2º Módulo</option>
      <option value="3">3º Módulo</option>

    </select>

    <hr>
    <button id="btnenviarnotas" name="btnenviarnotas" value="Enviar Notas" > Enviar Notas </button> 

  </body>
</html>