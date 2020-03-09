<?php include "includes/header.php" ?>

<h2 class="alert alert-success text-center py-5"> My Profile </h2>

<div class="container"  style="padding : 0px 200px ">

<?php
    if ( isset ( $_POST ['update'] ) ) 
    {
        $cin = $_GET ['cin'] ; 
        $email = $_GET ['email'] ; 
        $nom = $_POST ['nom'] ; 
        $prenom = $_POST ['prenom'] ; 
        $ntel = $_POST ['ntel'] ; 
        $query = "UPDATE register SET nom = '$nom' , prenom = '$prenom' , ntel = '$ntel' WHERE cin LIKE '$cin'" ; 
        $result = mysqli_query ($connection,$query) ; 
        if ( !$result )
            echo ("Query Field".mysqli_error()) ; 
        else 
            echo "<h4 class='alert alert-success text-center'> Update Successfuly </h4>" ;
    }
?>

<?php 
    if ( isset ( $_POST ['delete'] ) ) {
        $cin = $_GET ['cin'] ; 
        $query = " DELETE FROM book WHERE cin = '$cin' " ; 
        $result = mysqli_query ($connection,$query) ; 
        if ( !$result ) 
            die ("QuerY Field".mysqli_error () ) ; 
        else {
            $query = " DELETE FROM register WHERE cin = '$cin' " ; 
            $result = mysqli_query ($connection,$query) ; 
            if ( !$result ) 
                die ("Query Field".mysqli_error() ) ; 
            else 
                header ("location: ../../Agence_touristique") ; 
        }
    }
?>

<?php
    $cin = $_GET ['cin'] ; 
    $query = " SELECT * FROM register WHERE cin LIKE '$cin'  " ; 
    $result = mysqli_query ($connection,$query) ; 
    if (!$result)
        die ('QUERY FAILED'.mysqli_error()) ; 
    else {
         $row = mysqli_fetch_assoc($result) ;
?>


<form action="<?php echo 'profile.php?email='.$_GET['email'].'&cin='.$_GET['cin']?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="email"> Email : </label>
                </div>          
                <div class="col-md-6">
                     <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['adresse'] ; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="cin"> CIN : </label>
                </div>          
                <div class="col-md-6">
                     <input type="text" name="cin" class="form-control" id="cin" value="<?php echo $row['cin'] ;?>" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="lname"> Last Name : </label>
                </div>          
                <div class="col-md-6">
                     <input type="text" name="nom" class="form-control" id="lname" value="<?php echo $row['nom'] ;?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="fname"> First Name : </label>
                </div>          
                <div class="col-md-6">
                     <input type="text" name="prenom" class="form-control" id="fname" value="<?php echo $row['prenom'] ;?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="phone"> Phone : </label>
                </div>          
                <div class="col-md-6">
                     <input type="text" name="ntel" class="form-control" id="phone" value="<?php echo $row['ntel'] ; ?>">
                </div>
            </div>
        </div>    
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                        <label for="sex"> Sex : </label>
                </div>
                <div class="col-md-6">
                     <input type="text" name="sex" class="form-control" id="sex" value=" <?php echo $row['sexe'] ; }?>" disabled>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-4 form-group text-center">
            <br>
            <input type="submit" name="update" Value="Edit" class="form-control btn btn-success">
        </div>
        <div class="col-md-4"> </div>
    </div>
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6 text-center">
            <input type="submit" name="delete" Value="Delete" class="form-control btn btn-danger">
        </div>
        <div class="col-md-3"> </div>
    </div>
</form>
</div>
<?php include "includes/footer.php" ?>