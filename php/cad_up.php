<?php
include "connection.php";

$action = $_POST ['action'];

switch ($action) {
  case 'LOGIN':
    $user = addslashes($_POST['user']);
    $password = addslashes($_POST['password']);
    
    $sql = "SELECT * FROM cad_usuarios WHERE BINARY cad_usuario = '$user' AND cad_senha_usuario = '$password'";
    $resultado = $mysqli->query($sql) or die ("ERRO: A query de consulta esta incorreta");
    
    $row = mysqli_num_rows($resultado);
    $data = mysqli_fetch_object($resultado);
    
    
    $log = ($row != 1) ? 0 : 1;

    // $valida = " ";
    // $_SESSION['login'] =  FALSE;
    // if($linha == 0){
    //   $valida = 0;
    // }else{
    //   $valida = 1;
    //   session_start();
    //   $_SESSION['login'] =  TRUE;
    //   $_SESSION['id'] = $dados->id;
    //   $_SESSION['nome'] = $dados->nome;
    //   $_SESSION['perfil'] = $dados->perfil;
    //   $_SESSION['status'] = $dados->user_status ;
    //   $_SESSION['cpf'] = $dados->cpf ;
    //   $_SESSION['email'] = $dados->email ;
    // }

    echo ($log);

  break;
  case 'NEW_USER':
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO cad_usuarios (cad_nome_completo,cad_usuario,cad_email,cad_senha_usuario)
    VALUES ('$name','$user','$email','$password')";
    $resultado = $mysqli->query($sql) or die ("ERRO: A query de criacao esta incorreta");
    $valida = 1;
    
    if ($resultado != 1) {
      $valida = 0;
    }

    echo ($valida);
  break;
  
}
?>