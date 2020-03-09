<style>
    .p1 { padding : 50px 120px }
</style>
<div class="container text-center p1">

    <h3 class="alert alert-danger"> Sign In </h3>

    <?php
        if (isset($_POST['submit']))
        {
            $cin = $_POST ['cin'] ;
            $nom = $_POST ['nom'] ;
            $prenom = $_POST ['prenom'] ; 
            $sexe = $_POST ['sexe'] ; 
            $adresse = $_POST ['adresse'] ;
            $ntel = $_POST ['ntel'] ; 
            
            $query = "SELECT cin FROM register WHERE cin LIKE '$cin' OR adresse LIKE '$adresse'" ; 
            $result = mysqli_query ($connection,$query) ;
            $num = mysqli_num_rows ($result) ; 

            if ( $num == 0 ) {
                $query  = "INSERT INTO register(cin,nom,prenom,adresse,ntel,sexe) VALUES ('$cin','$nom','$prenom','$adresse','$ntel','$sexe') ";
                $result = mysqli_query ($connection,$query) ;
                if (!$result)
                    die ('QUERY FAILED'.mysqli_error()) ;
                else 
                    echo "<h6 class='alert alert-success text-center'> Sign Up Successfuly </h6>" ;        
            } 
            else
                echo "<h6 class='alert alert-danger text-center'> Cin Or Email Invalid </h6>" ; 
        }
    ?>
    <form action="sign.php" method="post">
            <div class="form-group">
                <label for="cin">CiN : </label>
                <input type="text" name="cin" class="form-control" id="cin" required >
            </div>
            <div class="form-group">
                <label for="nom">Last Name : </label>
                <input type="text" name="nom" class="form-control" id="nom" required>
            </div>
            <div class="form-group"> 
                <label for="prenom">First Name : </label>
                <input type="text" name="prenom" class="form-control" id="prenom" required>
            </div>
            <div class="form-group">
                <label for="adresse">Email : </label>
                <input type="email" name="adresse" class="form-control" id="adresse" required>
            </div>
            <div class="form-group">
                <label for="ntel">Phone : </label>
                <input type="text" name="ntel" class="form-control" id="ntel" required placeholder="+000 00 000 000">
            </div>
            <div class="form-group">
                <label for="sex"> Sex : </label> 
                <input type="checkbox" name="sexe" value="Men" class="col-sm-4"> Men 
                <input type="checkbox" name="sexe" value="Women" class="col-sm-3"> Women 
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Sign up" class="btn btn-danger col-sm-7">
            </div>
    </form>
</div>