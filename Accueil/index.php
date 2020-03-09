<?php include "includes/header.php" ?>
    
    <style>
        .p1 { padding : 10px 0px}
    </style>

    <h2 class="alert alert-primary py-5  text-center"> Home </h2>
    
    <div class="row text-center">
        <?php
            $query = "SELECT * FROM circuit" ;
            $result = mysqli_query ($connection,$query) ; 
            if ( !$result )
                die ("Query Field".mysqli_error()) ; 
            else {
                while ( $row = mysqli_fetch_assoc ($result) ) {
        ?>
            <div class="col-md-4">
                <h5> <?php echo $row['theme'] ; ?></h5>
                <img src="<?php echo $row['photo'] ; ?>" width="90%">
                <div class="row p1">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group text-center">
                            <a href="<?php echo "reservation.php?email=".$_GET['email']."&cin=".$_GET['cin']."&num=".$row['num'] ?>"><input type="button" class="btn btn-danger form-control" Value="Book"></a>                  
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        <?php }} ?>

<?php include "includes/footer.php" ?>