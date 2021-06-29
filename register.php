<?php
// Include config file
   session_start();
  require("config.php");
// Check if the user is
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
  }


// Define variables and initialize with empty values
$username = $password = $confirm_password = $nome = $email = $telefone = $morada = $cidade="";
$username_err = $password_err = $confirm_password_err = $nome_err = $email_err = $telefone_err =  $morada_err =  $cidade_err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Esse login já existe.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! .";
            }
        }
	}
	// Validate login
         if(empty(trim($_POST["nome"]))){
        $nome_err = "Please enter a login.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE nome = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nome);

            // Set parameters
            $param_nome = trim($_POST["nome"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                    $nome = trim($_POST["nome"]);
                }
                    }
                        else{
                echo "2";
            }


        // Close statement
        mysqli_stmt_close($stmt);
    }
	// Validate email
         if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                $email = trim($_POST["email"]);

            } else{
                echo "3";
            }

        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
	// Validate telefone
         if(empty(trim($_POST["telefone"]))){
        $telefone_err = "Please enter a telefone.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE telefone = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_telefone);

            // Set parameters
            $param_telefone = trim($_POST["telefone"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);



                    $telefone = trim($_POST["telefone"]);


            }

        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Validate morada
      if(empty(trim($_POST["morada"]))){
        $morada_err = "Please enter a Morada.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE morada = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_morada);

            // Set parameters
            $param_morada= trim($_POST["morada"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);



                $morada = trim($_POST["morada"]);


            }

        }
        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate cidade
    if(empty(trim($_POST["cidade"]))){
        $cidade_err = "Please enter a Cidade.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE cidade = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_cidade);

            // Set parameters
            $param_cidade = trim($_POST["cidade"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);



                $cidade = trim($_POST["cidade"]);


            }

        }
        // Close statement
        mysqli_stmt_close($stmt);
    }


    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, nome, email, telefone,morada, cidade, password) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username,$param_nome, $param_email, $param_telefone,$param_morada, $param_cidade, $param_password);

            // Set parameters
            $param_username = $username;
			$param_nome = $nome;
			$param_email = $email;
			$param_telefone = $telefone;
            $param_morada = $morada;
            $param_cidade = $cidade;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
				printf("Error: %s.\n", mysqli_stmt_error($stmt));
                echo "4";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registar</h2>


                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Login">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($nome_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" placeholder="Nome Completo">
                            <span class="help-block"><?php echo $nome_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email">
                            <span class="help-block"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($telefone_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>" placeholder="Telefone">
                            <span class="help-block"><?php echo $telefone_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($morada_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="morada" class="form-control" value="<?php echo $morada; ?>"placeholder="Morada">
                            <span class="help-block"><?php echo $morada_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cidade_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="cidade" class="form-control" value="<?php echo $cidade; ?>" placeholder="Cidade">
                            <span class="help-block"><?php echo $cidade_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" placeholder="Confirmar Password">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Eu concordo com todas as declarações nos  <a href="termos.php" class="term-service">Termos de serviço</a></label>
                        </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Submeter"/>
                            </div>
                                                </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <p>JÁ TEM CONTA? <a href="login.php">Iniciar Sessão</a>.</p>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>