<?php
/*conexao com o bd*/
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_Talarico"
$password = "piorsaladomundo";
$database = "basetestesrv_u_Talarico";

$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("falhou a conexao".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}
?>