<?php include "includes/header.php" ?>

    <style>
        .p1 { padding : 50px 100px }
    </style>

    <h2 class="alert alert-info py-5 text-center"> My Cart </h2>

    <div class="container">
        <table class="table table-border table-hover">
            <?php 
                $cin = $_GET ['cin'] ; 
                $query = "SELECT nom,prenom FROM register WHERE cin LIKE '$cin' " ; 
                $result = mysqli_query ($connection,$query) ; 
                if ( !$result ) 
                    die ("Query Field".mysqli_error()) ; 
                else {
                    while ( $row = mysqli_fetch_array ($result) )
                    {
            ?>
            <tr class="alert alert-warning">
                <th> CIN  : <?php echo $cin ?> </th>
                <th> Last Name  : <?php echo $row['nom'] ; ?> </th>
                <th> First Name  : <?php echo $row['prenom'] ; }}?> </th>
            </tr>
        </table>
    </div>
    <div class="container p1">
        <table class="table table-border table-hover">
            <tr class="alert alert-info">
                <th> Id </th>
                <th> Date </th>
                <th> Number </th>
                <th> Circuit </th>
                <th> Photo </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
                <!-- DELETE -->
                    <?php
                        if ( isset ( $_GET ['delete'] ) )
                        {
                            $id = $_GET ['delete'] ;
                            $query = " DELETE FROM book WHERE num = {$id} " ; 
                            $result = mysqli_query ($connection,$query) ; 
                            if ( !$result ) 
                                die ("Query Field".mysqli_error()) ;
                            else 
                                echo "<h4 class='alert alert-danger text-center'> Detele Successfuly </h4>" ;
                        }
                    ?>  
            <?php 
                $cin = $_GET ['cin'] ; 
                $query = " SELECT * FROM book WHERE cin LIKE '$cin' " ; 
                $result = mysqli_query ($connection,$query) ; 
                if ( !$result ) 
                    die ("Query Field".mysqli_error()) ; 
                else {
                    while ( $row = mysqli_fetch_assoc ($result) )
                    {
                        $num = $row ['num_circuit'] ;
                        $query = " SELECT photo FROM circuit WHERE num LIKE '$num'" ; 
                        $result2 = mysqli_query ($connection,$query) ; 
                        $aa = mysqli_fetch_assoc ($result2) ; 
            ?>
                    <tr>
                        <td> <?php echo $row['num'] ; ?> </td>
                        <td> <?php echo $row['date'] ; ?> </td>
                        <td> <?php echo $row['nb'] ; ?> </td>
                        <td> <?php echo $row['num_circuit'] ;?> </td>
                        <td> <img src="<?php echo $aa['photo'] ; ?>" width="100" height="50"></td>
                        <td> <a href="#edit"><a href="<?php echo "cart.php?email=".$_GET['email']."&cin=".$_GET['cin']."&edit=".$row['num']?>" class="btn btn-success form-control">Edit</a></a></td>
                        <td> <a href="<?php echo "cart.php?email=".$_GET['email']."&cin=".$_GET['cin']."&delete=".$row['num']?>" class="btn btn-danger form-control">Delete</a></td>
                        <td> <a href="<?php echo "Gotoprint.php?cin=".$_GET['cin']."&email=".$_GET['email']."&num=".$row['num']."&nb=".$row['nb']."&date=".$row['date']."&photo=".$aa['photo']?>" class="btn btn-warning form-control" > Print </a> </td>
                            <?php }}?>
                    </tr>
        </table> 

    <!-- EDIT -->
    
        <?php 
        if ( isset ( $_GET['edit']) ) include "edit.php" ?>
    
    </div>

<?php include "includes/footer.php" ?>