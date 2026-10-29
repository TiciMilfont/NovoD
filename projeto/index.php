<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylest" ref  =  "/css/index.css">
    <title>Robôlândia</title>
</head>
<body>
 <h2> CENTRAL DE ROBÔS</h2>

<form method="POST"> 
    
<div>
     <label>Nome do Robô :</label>
     <input type ="text" name="nome" required> 
    </div>
<br></br>

<div>
     <label>Modelo :</label>
     <selec value type ="text" name="Explorador" required> 
        <selec value type ="text" name="Engenheiro" required> 
              <selec value type ="number" name="Defensor" required> 
    </div>
<br></br>

<div>
     <label>Nome do Operador :</label><input type ="text" name="nome_operador" required> 
    </div>
<br></br>


<button> type = "submit" >CADASTRAR ROBÔ</button>


</form>                                                     

                                                   

</body>
</html>

<?php

if ( $_SERVER['REQUEST_METHOD'] ==  "POST") {

$nome = $_POST ["nome"] ;
$categoria = $_POST ["categoria"] ;
$explorador = $_POST ["explorador"] ;
$engenheiro = $_POST ["engenheiro"] ;
$defensor = $_POST ["defensor"] ;
$nome_operador = $_POST ["nome_operador"] ;


echo "O robô $nome foi cadastrado com sucesso! Ele pertence ao grupo de $categoria e será operado por $nome_operador.";

}

?>


<?php

 //• Criar a classe Robo com os atributos nome, modelo, energia e potencia.
 //class Robo ();
 //public function $recarregar { (if $potencia == 200);
   //  $nova_potencia = $potencia +10;
 //}


 //$explorador => new Robo;
 //$engenheiro => new Robo;
 //$defensor => new Robo;

 // class Robo extends Explorador ();
  // class Robo extends Engenheiro ();
   // class Robo extends Defensor();

?>






<?php

//Implementar o método __construct() para inicializar o objeto.


//Implementar exibirStatus(), que retorne os dados do robô, e recarregar(), que aumente sua energia em 10 pontos, até o limite de 200.

//Instanciar objetos da classe com os dados do formulário e usar seus métodos no sistema.


//json • Usar json_encode(), json_decode() e funções de leitura/escrita de arquivos do PHP

// class Robo ($nome, $modelo, $energia_inicial, $potencia, $funcao_robo) {
 //  ["Super Mundo"  ","Explorador", 100, 20 , "investigar planetas"
 //   "Pula Prédio","Engenheiro", 120, 15 , "repara equipamentos"
   // "Barreira X" ,"Defensor", 150, 30 , "proteger a estação"]

   ?>