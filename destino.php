<?php
$v_erro=""; 

//debugando campos da coleção $_POST
// echo "<pre>"; 
// var_dump($_POST); 
// die; 

// Obter as informações adequadas do formulário
// Obtendo o valor do campo nome (txtnome)
if(isset($_POST['txtnome'])){
  //Entrou no if portanto existe a informação na coleção denominada $_POST

  //Atribuindo o valor a minha variavel local
  $v_txtnome = $_POST['txtnome']; 
  
  //Remove espaços em branco no início e no fim da string
  $v_txtnome = trim($v_txtnome); 

  //Se a var estiver em branco explode erro ;) 
  if(empty($v_txtnome)){ 
    $v_erro = $v_erro . " Nome em branco!";    
  }

} else { 
  $v_erro = $v_erro . " Erro ao receber o nome!";
}

// Obtendo o valor do campo escondido (hdnescondido)
if(isset  ($_POST['hdnescondido'])){
  //Entrou no if portanto existe a informação na coleção denominada $_POST

  //Atribuindo o valor a minha variavel local
  $v_hdnescondido = $_POST['hdnescondido'] ; 

  //Remove espaços em branco no início e no fim da string
  $v_hdnescondido = trim($v_hdnescondido); 

  //Se a var estiver em branco explode erro ;) 
  if(empty($v_hdnescondido)){ 
    $v_erro = $v_erro . " Erro de procedimento! Favor repetir o processo!";    

    // $v_erro = $v_erro . " Erro de Sequencia! Favor repetir o processo!";    


  }  

} else { 
  $v_erro = $v_erro . " Erro ao receber campos de controle repita o processo por favor!";
}

$v_modulo = $_POST["cmbmodulo"]; 

?>

<html>
  <head>
    <title>Destino </title>
    <style> 
    div.error{
      background-color:gray;
      min-height:100px; 
      min-width: 100px; 
      border:solid; 
      position:fixed; 
      right:0; 
      top:0; 
    }

    p.error {
      color:red; 
    }

    h3.error {
      color:red; 
    }


    </style>

  </head>
  <body>
    <h1> Destino's Page </h1>
    <?php

      echo $v_txtnome; 
      echo "<hr>";
      echo $v_hdnescondido; 


      if(!empty($v_erro)) { ?>

        <div class='error'> 
          <h3 class='error'> Erros encontrados:</h3> 
          <p class='error'>
              <?php echo $v_erro; ?>      
          </p>
        </div>
      <?php 
      }
      else{
        // Material mais denso sobre redirecionamento 
        // https://br.ccm.net/faq/128-redirecionamento-php-redirect-header

        switch ($v_modulo){
          case "1" : header('Location: moduloPrimeiro.php');
          break; 
          case "2" : header('Location: segundoModulo.php');
          break; 
          case "3" : header('Location: formandos.php');
          break;
          default: header('Location: index.php');
          break; 

        }

        
      
      }
      
      
      
       ?>

   
  </body>
</html>