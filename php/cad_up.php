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
  case 'REPORT':
    $search = $_POST['search'];
    // $status =$_POST['status'];
    // $limit = $_POST['limit'] == "T" ? 0 : $_POST['limit'];
    // if (isset($_POST["page"])) { $page  = $_POST["page"]; } else { $page=1; };  

    // $start_from = ($page-1) * $limit; 

    $sql = "SELECT * FROM cad_usuarios WHERE cad_nome_completo LIKE '%$search%' ORDER BY cad_nome_completo "; 

    $resultado = $mysqli->query($sql) or  die ("ERRO: A query de relatorio esta incorreta");
    $returned_rows 	= mysqli_num_rows($resultado);

    // $exec_calc_rows 	= $mysqli->query("SELECT FOUND_ROWS() AS cad_rows_found;");
    // $retorno_rows_found = mysqli_fetch_object($exec_calc_rows);

    // $pagina = $start_from + $limit;
    // if ($pagina >= $retorno_rows_found->cad_rows_found || $pagina == 0) {
    //   $pagina = $retorno_rows_found->cad_rows_found;
    // }
    
    if ($resultado->num_rows > 0) {
      while($user = $resultado->fetch_assoc()) {
        $resultClients = "<tr>
                <td>".$user["cad_nome_completo"]."</td>
                <td>".$user["cad_usuario"]."</td>
                <td>".$user["cad_email"]." </td> 
                <td>
                    <div class='divfunc'>
                        <a onclick='showuser(".$user["cad_id_usuario"].")' href='#'><button data-bs-toggle='modal' data-bs-target='#edit' class='btn btn-danger'><i class='fa fa-pencil pencil' aria-hidden='true'></i></button></a>
                        <a onclick='delete_user(".$user["cad_id_usuario"].")' href='#'><button class='btn btn-warning'><i class='fa fa-times cross'  aria-hidden='true'></i></button></a>
                    </div>
                  </div>
                </td>
              </tr>";

              echo $resultClients; 
      }
    }

  break;
  case 'DELETE_USER':
    $id = ($_POST['id']);

    $mysqli->query("DELETE FROM cad_usuarios WHERE cad_id_usuario = '$id'");

  break;

  case 'SHOW_USER':
    $id = ($_POST['id']);

    $result = $mysqli->query("SELECT * FROM cad_usuarios WHERE cad_id_usuario = '$id'");
    $retorno = $result->fetch_all(MYSQLI_ASSOC);
    $retorno = json_encode($retorno);
    echo $retorno;
  break;
  
  case 'EDIT_USER':
    $id = ($_POST['id']);
    $altnome = ($_POST['altnome']);
    $altcpf = ($_POST['altcpf']);
    $altemail = ($_POST['altemail']);
    $altnumero = ($_POST['altnumero']);
    $altprofissao = ($_POST['altprofissao']);
    $altstatus = ($_POST['altstatus']);
    
    $sql = "UPDATE usuario SET nome = '$altnome', cpf = '$altcpf', email = '$altemail', telefone = '$altnumero', perfil= '$altprofissao', user_status = '$altstatus' WHERE id = '$id' ";

    $resultado = $mysqli->query($sql) or die ("ERRO: A query de edição de úsuário, esta incorreta");
    echo $resultado;

  break;
}
?>
