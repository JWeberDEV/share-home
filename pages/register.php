<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Share-Home - Registo de Usuário</title>
        <?php require_once "../includes/css_includes.php"; ?>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Name" type="text" placeholder="Enter your first name" />
                                                        <label for="Name">Nome Completo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="user" type="text" placeholder="Enter your last name" />
                                                        <label for="user">Usuario</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="pass1" type="password" placeholder="Create a password" />
                                                        <label for="pass1">Senha</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="pass2" type="password" placeholder="Confirm password" />
                                                        <label for="pass2">Confirmar Senha</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Criar Conta</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php require_once "../includes/js_includes.php"; ?>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> -->
    </body>
</html>

<script>
function newuser() {
    event.preventDefault()
    var name = $("#name").val();
    var user = $("#user").val();
    var email = $("#email").val();
    var pass1 = $("#pass1").val();
    var pass2 = $("#pass2").val();

    
    if (login == "" || pass1 == "" || pass2 == "" ||statusUser == "" ) {
        alert("Os Campos obrigatórios precisam ser preenchidos");
        return;
    }

    if (pass1 != pass2) {
        alert("As senhas não são iguais");
        return;
    }

    $.ajax({
        url: "../php/metodos.php",
        type: "post",
        data: {acao: 'NEW_USER',nome: nomecompleto, cpf, email, perfil, login, password: pass1, status: statusUser },
        datatype: "text",
        success: function name(data) {
            if(data == 1){
                alert("Usuário criado com sucesso");
                window.location.href = "../html/users.php"
            }else{
                alert("Erro ao criar o usuario");
            }
        }
        
    });
}
</script>
