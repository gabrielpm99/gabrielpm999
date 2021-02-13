<?php 

if (isset($_POST["acao"])){ 

   $produtos=$_POST["produtos"]; 
   $preco=$_POST["preco"]; 
   $qtdvendas=$_POST["qtdvendas"]; 

	} 

$servername = "sql113.epizy.com";
$database = "epiz_27925328_projeto_vendas";
$username = "epiz_27925328";
$password = "KHmZcHT0NGUVnbb";
// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $database);
// Checa a conexão
if (!$conn) {
      die("Conexão falhou: " . mysqli_connect_error());
}
 
echo "Conexão bem-sucedida";
 
$sql = "INSERT INTO Students (produtos, preco, qtdvendas) VALUES ('produtos', 'preco', 'qtdvendas')";
if (mysqli_query($conn, $sql)) {
      echo "Enviado com sucesso";
} else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>