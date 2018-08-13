<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad #10</title>
</head>
<body>
    <div class="container mt-2 mx-auto">
        <h1 class="text-center bg-primary text-white p-3 m-0 rounded">Login</h1>
        <?php
            if(!empty($_SESSION["error"])){ 
        ?>
            <div class="alert alert-danger text-center my-0"><b><?= $_SESSION["error"] ?></b></div>
        <?php      
            }
        ?>
        <form action="login.php" class="border m-0" method="POST">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="form-group text-center mt-3"
                        <label for="usuario"><b>Usuario</b></label>
                        <input type="text" class="form-control" required name="usuario">
                    </div>
                </div>
                <div class="col-2">
                </div>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="form-group text-center mt-3">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" requred name="password">
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <button type="submit" class="btn btn-primary btn-block py-3 my-4">
                        <h5 class="m-0 p-0"><b>Send</b></h5>
                    </button>
                </div>
                <div class="col-2"></div>
            </div>
        </form>
        <h2 class="text-center bg-warning text-white p-3 m-0 rounded" id="h2-singup" title="Click on me">SingUp</h2>
        <?php if(!empty($_SESSION["registro"])){ ?>
                <div class="alert alert-success text-center my-0"><b><?= $_SESSION["registro"] ?></b></div>
        <?php } ?>
        <div id="singup">
            <form action="singup.php" class="border m-0" method="POST">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="form-group text-center mt-3"
                            <label for="usuario"><b>Usuario</b></label>
                            <input type="text" class="form-control" required name="usuario">
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="form-group text-center mt-3">
                            <label for="password"><b>Password</b></label>
                            <input type="password" class="form-control" requred name="password">
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <button type="submit" class="btn btn-warning text-white btn-block py-3 my-4">
                            <h5 class="m-0 p-0"><b>Register</b></h5>
                        </button>
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $("#singup").hide();
            $("#h2-singup").click(function(){
                $("#singup").slideToggle();
            });
        });
    </script>
</body>
</html>