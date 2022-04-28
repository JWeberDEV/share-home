<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - ShareHome</title>
        <?php require_once "../share-home/includes/css_includes.php"; ?>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Share Home</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUser" type="text" placeholder="name@example.com" />
                                                <label for="inputUser">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Senha</label>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                 <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                 <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <a id="login" class="btn btn-primary" onclick="login()">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
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
        
    </body>
    <?php require_once "../share-home/includes/js_includes.php"; ?>
</html>

<script>
$("#inputUser").keyup(function(event) {
    if (event.keyCode === 13) {
    $("#login").click();
    }
});

$("#inputPassword").keyup(function(event) {
    if (event.keyCode === 13) {
    $("#login").click();
    }
});

function login() {
    var user = $('#inputUser').val();
    var password = $('#inputPassword').val();

    if(user.trim() == "" || password.trim() == ""){
        alert("Preencha os campos");
        return;
    }

    $.ajax({
        url: "../share-home/php/cad_up.php",
        type: "post",
        data: {action: 'LOGIN', user, password},
        dataType: "text",
        success: function(data){
            if(data == 1){
                window.location.href = "../share-home/pages/home.php";
            }else{
                alert("Os Dados Preenchidos, estão incorretos.");
            }
        }
    });
}

</script>
