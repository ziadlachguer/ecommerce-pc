<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Connexion</title>
</head>
<style>
    .hero.is-landing {
            color: #ffffff;
            background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
        }
        
</style>
<body>
<?php include 'include/nav.php' ?>
<div class="container py-2">
    <?php
        if(isset($_POST['connexion'])){
            $login = $_POST['login'];
            $pwd   = $_POST['password'];

            if(!empty($login) && !empty($pwd)){
                require_once 'include/database.php';
                $sqlState = $pdo->prepare('SELECT * FROM utilisateur 
                                                WHERE login=?
                                                AND   password=?');
                $sqlState->execute([$login,$pwd]);
                if($sqlState->rowCount()>=1){
                    $_SESSION['utilisateur'] = $sqlState->fetch();
                    header('location: index.php');
                }else{
                    ?>
                    <div class="notification is-danger" role="alert">
                        Login ou password incorrectes.
                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="notification is-danger" role="alert">
                    Login , password sont obligatoires
                </div>
                <?php
            }
        }
    ?>
    <h4>Connexion</h4>
    <form method="post" class="box hero is-landing">
    <div class="field">
        <label class="label">Username</label>
    <div class="control has-icons-left has-icons-right">
<input class="input is-success hero is-landing" type="text" placeholder="enter login" name="login">
<span class="icon is-small is-left">
    <i class="fas fa-user"></i>
</span>
<span class="icon is-small is-right">
    <i class="fas fa-check"></i>
</span>
</div>

</div>
<div class="field">
<label class="label">Password</label>
<div class="control has-icons-left has-icons-right">
<input class="input is-success hero is-landing" type="password" placeholder="enter password" name="password">
<span class="icon is-small is-left">
    <i class="fa-solid fa-lock"></i>
</span>
<span class="icon is-small is-right">
    <i class="fas fa-check"></i>
</span>
</div>

</div>
        <input type="submit" value="Connexion" class="button is-rounded hero is-landing" name="connexion">
    </form>
</div>

</body>
</html>