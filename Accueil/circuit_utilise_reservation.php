

<?php
        $num = $_GET ['num'] ; 
        $query = "SELECT * FROM circuit WHERE num = '$num'" ;
        $result = mysqli_query ($connection,$query) ; 
        if ( !$result )
            die ("Query Field".mysqli_error()) ; 
        else {
             $row = mysqli_fetch_assoc ($result)  ;
?>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group text-center">
                                <h3><?php echo $row['theme'] ; ?></h3>
                                <img src="<?php echo $row['photo'] ; ?>" width="100%">
                                <p> <?php echo $row['description'] ; ?> </p>
                                <h5> Time : <?php echo $row['duree'] ; ?> Hours </h5>
                                <h5> Moyen Transport : <?php echo $row ['m_transport'] ; ?> </h5>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
<?php } ?>