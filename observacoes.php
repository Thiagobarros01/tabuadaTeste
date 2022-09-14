
<?php
interface Capa{
    public function botarCapa();
    public function tirarcapa();


}



/*class Pessoa implements Capa{
    public $nome;
    public $genero;
    public $modo;
    const GENERO = ['M' => 'Masculino', 'F' => 'Feminino'];

    public function __construct($nome, $genero)
    {
        self::GENERO;
        $this->nome = $nome;
        $this->genero = $genero;
    }
    public function botarCapa(){
        return $this->modo = true;
    }
    public function tirarcapa(){
        return $this->modo = false;
    }
    public function estudar(){
        if ($this->modo == true){
            echo '<pre>ele está estudando</pre>';
        } else 
            echo '<pre>ele esta dormindo</pre>';
    }
    public function chamarPessoa(){
        if ($this->modo == false){
            echo "Acorda! acorda!";
            $this->modo = true;
        } else {
            echo "Muito bem, esta estudando";
        }
    }

}

echo '<pre>';

$p[0]= new Pessoa("THOR",'M ');
$p[1]= new Pessoa('Viuva negra', 'F');
$p[0]->botarCapa();
$p[0]->tirarcapa();
$p[0]->estudar();
$p[1]->botarCapa();
$p[0]->estudar();
$p[0]->chamarPessoa();
$p[0]->estudar();
print_r($p);                             
echo '</pre>';
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        body{
            background-color: violet;
            
        }
        h2 {
            text-align: center;
        }
        input {
            background-color: white;
        }
        echo {
            background-color: salmon;
        }
    </style>
</head>
<body><fieldset> <form method="post" action="observacoes.php"> 
  <h2 id="h">Tabuada do Thiago</h2>
   
   <?php
   $somador = $_POST["v"]; 
   for ($i = 0; $i <= 10; $i++){    
   $soma = $somador * $i;
   echo "<pre>$somador x $i = $soma</pre>";  
   }
   ?>        
   Valor:<input type="number" name="v" >
    <input type="submit" value="calcular"> 
    <script>
        window.alert("Bem-vindo a minha tabuada")
        
    </script>
</form></body></fieldset>  
</html>
