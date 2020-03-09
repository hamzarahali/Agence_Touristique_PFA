<?php include "includes/header.php" ?>

    <h2 class="alert alert-warning py-5 text-center"> Reserve Now </h2>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post" class="">
                    <div class="row">    
                        <div class="col-md-4">
                            <h5 class="text-center">All Circuit &nbsp;&nbsp;&nbsp;:</h5>
                        </div>
                        <div class="col-md-4">
                            <select name="num2" class="form-control" >
                                                        <?php
                                                            $query = "SELECT num FROM circuit" ; 
                                                            $result = mysqli_query ($connection,$query) ; 
                                                            if ( !$result ) 
                                                                die ("Query Field" .mysqli_error()) ;
                                                            else {
                                                                while ( $row = mysqli_fetch_assoc($result ) ) {
                                                        ?>
                                                            <option value="<?php echo $row['num']?>"> <?php echo $row['num'] ; }}?> </option>                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="show" value="Reserve Now" class="btn btn-danger form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    <?php 
        if ( isset ( $_POST['show'])) { 
            header ("location: reservation.php?email=".$_GET['email']."&cin=".$_GET['cin']."&num=".$_POST['num2']) ; } 
    ?>