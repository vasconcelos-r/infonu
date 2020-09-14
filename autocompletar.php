<?php
include("conexao.php");

if(isset($_POST['pesquisar'])){
    $pesquisar = $_POST['pesquisar'];

    $query = "SELECT * FROM composto WHERE name like'%".$pesquisar."%'";
 $result = mysqli_query($conn,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['id'],"label"=>$row['nome']);
 }

 echo json_encode($response);
}

exit;