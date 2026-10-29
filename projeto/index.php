<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
--> endereço html
    <title>Central de Robôs</title>
</head>
<body>
 
<form method="POST"> 
    
<div>nome = Nome; type ="text" ;Nome = "Robô" ;</div>

<div>modelo = Modelo ; type ="text" Nome = " " </div>

<div>nome_operador = Nome; type ="text" Nome = "Robô" </div> 

<button> type = "submit" >Enviar</button>

 

--> Impedir cadastro com campos obrigatórios vazios e mostrar mensagem de sucesso ou erro. (usar if)

return $_POST, 

-->Definir energia e potência automaticamente conforme o modelo escolhido.




</form>                                                     


                                                    

</body>
</html>

<?php

 $method [$_SERVER['REQUEST_METHOD'];

 echo "ok";


 //• Criar a classe Robo com os atributos nome, modelo, energia e potencia.
 class Robo (){
  $nome : Nome=" ";
  echo $nome;
      
 }



 $Explorador => new Robo;
 $Engenheiro => new Robo;
 $Defensor => new Robo;

 // class robo extends Explorador ()
  // class robo extends Engenheiro ()
   // class robo extends Defensor()

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