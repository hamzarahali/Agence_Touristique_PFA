<?php include "includes/header.php" ?>

        <!-- Print -->
        <script>
            function myFunction() {
                window.print();
            }
        </script>

<style>
    .p1 { padding : 30px 100px }
</style>
<?php
    $cin = $_GET ['cin'] ; 
    $query = " SELECT * FROM register WHERE cin = '$cin' " ; 
    $result = mysqli_query ($connection,$query) ; 
    if ( !$result ) 
        die ("Query Field".mysqli_error()) ; 
    else {
        $row = mysqli_fetch_assoc ($result) ;
?>
            <div class="container p1 text-center">
                <h2 class="alert alert-success text-center"> Facture </h2>
                <table class="table">
                    <tr> 
                        <td> <label> CIN </label> </td> 
                        <td> : </td>
                        <td>  <?php echo $row ['cin'] ; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> Last Name </label> </td>
                        <td> : </td> 
                        <td> <?php echo $row ['nom'] ; ?>  </td> 
                    </tr>
                    <tr> 
                        <td> <label> First Name </label> </td> 
                        <td> : </td>
                        <td> <?php echo $row ['prenom'] ; ?>  </td> 
                    </tr>
                    <tr>
                        <td> <label> Phone </label> </td> 
                        <td> : </td>
                        <td> <?php echo $row ['ntel'] ; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> E-mail </label> </td>
                        <td> : </td> 
                        <td> <?php echo $_GET ['email']; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> Circuit </label> </td> 
                        <td> : </td>
                        <td> <?php echo $_GET ['num'] ; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> Date </label> </td> 
                        <td> : </td>
                        <td> <?php echo $_GET ['date'] ; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> Person </label> </td> 
                        <td> : </td>
                        <td> <?php echo $_GET ['nb'] ; ?> </td>
                    </tr>
                    <tr> 
                        <td> <label> Photo </label> </td>
                        <td> : </td>
                        <td> <img src="<?php echo $_GET ['photo'] ; ?>" width="100" height="50"> </td>
                    </tr>
                </table>
            <div class="form-group"> 
                <button onclick="myFunction()" class="btn btn-warning">Print this page</button>
            </div>
        </div>
    <?php } ?>
<?php include "includes/footer.php" ?>
