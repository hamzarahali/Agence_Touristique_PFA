<style>
        .p2 { padding : 200px 120px }
</style>

<div class="container text-center p2">

    <h3 class="alert alert-primary"> Log In  </h3>

    <?php
        if ( isset ( $_POST['connecter']) )
        {
            $email = $_POST ['email'] ; 
            $pass = $_POST ['cin'] ; 

            $query = " SELECT cin , adresse FROM register WHERE cin LIKE '$pass' AND adresse LIKE '$email' " ; 
            $result = mysqli_query ($connection,$query) ;
            $num = mysqli_num_rows ($result) ; 

            if ( $num == 0 )
                echo "<h6 class='alert alert-danger text-center'> Email and Password invalid </h6>" ;
            else 
                header ("location: Accueil?cin=".$_POST['cin']."&email=".$_POST ['email']) ; 
        }
    ?>

    <form action="" method="post">
            <div class="form-group">
                <label for="Login">Email : </label>
                <input type="email" name="email" class="form-control" id="Login" required>
            </div>
            <div class="form-group">
                <label for="pass">CiN : </label>
                <input type="password" name="cin" class="form-control" id="pass" required>
            </div>
            <div class="form-group">
                <input type="submit" name="connecter" Value="Login" class="btn btn-primary col-sm-7">
            </div>
    </form>
  </div>