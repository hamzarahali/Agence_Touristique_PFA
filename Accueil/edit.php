<div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                                        <?php
                                            if ( isset ( $_POST ['edit2'] ) ) 
                                            {
                                                $id = $_GET ['edit'] ; 
                                                $date = $_POST ['date'] ;
                                                $nb = $_POST ['nbre'] ;
                                                
                                                if ( $nb == "0" ) {
                                                    $query = "UPDATE book SET date = '$date' , nb = '$nb' , num_circuit = '$num' WHERE num = '$id' " ;
                                                }
                                                if ( $nb == "2" ) {
                                                    $n1 = $_POST ['n1'] ; 
                                                    $p1 = $_POST ['p1'] ;
                                                    $a1 = $_POST ['a1'] ; 
                                                    $n2 = $_POST ['n2'] ; 
                                                    $p2 = $_POST ['p2'] ;
                                                    $a2 = $_POST ['a2'] ; 
                                                    $num = $_POST ['num_circuit'] ; 
                                                    $query = "UPDATE book SET date = '$date' , nb = '$nb' , n1 = '$n1' , p1 = '$p1' , a1 = '$a1' , n2 = '$n2' , p2 = '$p2' , a2 = '$a2' , num_circuit = '$num' WHERE num = '$id' " ;
                                                } else if ( $nb == "3" ) {
                                                    $n1 = $_POST ['n1'] ; 
                                                    $p1 = $_POST ['p1'] ;
                                                    $a1 = $_POST ['a1'] ; 
                                                    $n2 = $_POST ['n2'] ; 
                                                    $p2 = $_POST ['p2'] ;
                                                    $a2 = $_POST ['a2'] ; 
                                                    $n3 = $_POST ['n3'] ;
                                                    $p3 = $_POST ['p3'] ;
                                                    $a3 = $_POST ['a3'] ; 
                                                    $query = "UPDATE book SET date = '$date' , nb = '$nb' , n1 = '$n1' , p1 = '$p1' , a1 = '$a1' , n2 = '$n2' , p2 = '$p2' , a2 = '$a2', n3 = '$n3' , p3 = '$p3' , a3 = '$a3' , num_circuit = '$num' WHERE num = '$id' " ;
                                                } else if ( $nb == "4" ) {
                                                    $n1 = $_POST ['n1'] ; 
                                                    $p1 = $_POST ['p1'] ;
                                                    $a1 = $_POST ['a1'] ; 
                                                    $n2 = $_POST ['n2'] ; 
                                                    $p2 = $_POST ['p2'] ;
                                                    $a2 = $_POST ['a2'] ; 
                                                    $n3 = $_POST ['n3'] ;
                                                    $p3 = $_POST ['p3'] ;
                                                    $a3 = $_POST ['a3'] ; 
                                                    $n4 = $_POST ['n4'] ;
                                                    $p4 = $_POST ['p4'] ;
                                                    $a4 = $_POST ['a4'] ; 
                                                    $query = "UPDATE book SET date = '$date' , nb = '$nb' , n1 = '$n1' , p1 = '$p1' , a1 = '$a1' , n2 = '$n2' , p2 = '$p2' , a2 = '$a2', n3 = '$n3' , p3 = '$p3' , a3 = '$a3' , n4 = '$n4' , p4 = '$p4' , a4 = '$a4' , num_circuit = '$num' WHERE num = '$id' " ;
                                                } else if ( $nb == "5" ) {
                                                    $n1 = $_POST ['n1'] ; 
                                                    $p1 = $_POST ['p1'] ;
                                                    $a1 = $_POST ['a1'] ; 
                                                    $n2 = $_POST ['n2'] ; 
                                                    $p2 = $_POST ['p2'] ;
                                                    $a2 = $_POST ['a2'] ; 
                                                    $n3 = $_POST ['n3'] ;
                                                    $p3 = $_POST ['p3'] ;
                                                    $a3 = $_POST ['a3'] ; 
                                                    $n4 = $_POST ['n4'] ;
                                                    $p4 = $_POST ['p4'] ;
                                                    $a4 = $_POST ['a4'] ;
                                                    $n5 = $_POST ['n5'] ;
                                                    $p5 = $_POST ['p5'] ;
                                                    $a5 = $_POST ['a5'] ;  
                                                    $query = "UPDATE book SET date = '$date' , nb = '$nb' , n1 = '$n1' , p1 = '$p1' , a1 = '$a1' , n2 = '$n2' , p2 = '$p2' , a2 = '$a2', n3 = '$n3' , p3 = '$p3' , a3 = '$a3' , n4 = '$n4' , p4 = '$p4' , a4 = '$a4', n5 = '$n5' , p5 = '$p5' , a5 = '$a5' , num_circuit = '$num' WHERE num = '$id' " ;
                                                }
                                                $result = mysqli_query ($connection,$query) ; 
                                                if ( !$result ) 
                                                    die ("Query Field".mysqli_error()) ;
                                                else 
                                                    header ("location: cart.php?email=".$_GET['email']."&cin=".$_GET['cin']) ;
                                            }
                                        ?>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

<?php
        
            $id = $_GET ['edit'] ; 
            $query = " SELECT * FROM book WHERE num = $id " ;
            $result = mysqli_query ($connection,$query) ; 
            if ( !$result ) 
                die ("Query Field".mysqli_error()) ; 
            else {
                while ( $row = mysqli_fetch_assoc ($result) ){
    ?>
                    <form action="" method="POST">

                    <h3 class="alert alert-success py-1 text-center"> Edit </h3>

                        <div class='row' style='padding:50px 0px'>
                            <div class='col-md-6'>
                                <div class="row">
                                        <div class='col-md-4'>
                                            <h5 for='id'> Id :</h5>
                                        </div>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='id' value="<?php echo $_GET ['edit'] ;?>" disabled>
                                        </div>
                                </div> 
                                <div class='row py-2'> 
                                    <div class='col-md-4'>
                                        <h5 for='id'> Circuit :</h5>
                                    </div>
                                    <div class='col-md-8'>
                                        <select name="num_circuit" class="form-control">
                                            <option value="<?php echo $row['num_circuit'] ?>"><?php echo $row['num_circuit'] ; ?></option>
                                        <?php
                                            $query = "SELECT num FROM circuit " ; 
                                            $result1 = mysqli_query ($connection,$query) ; 
                                            if ( !$result1 ) 
                                                die ("Query Field".mysqli_error()) ; 
                                            else 
                                                while ( $row1 = mysqli_fetch_assoc ($result1) ) {
                                                    if ( $row['num_circuit'] != $row1['num'] ) {
                                        ?>
                                            <option value="<?php  echo $row1['num'] ; ?>"> <?php  echo $row1['num'] ;} ?></option>
                                                <?php }?>
                                            </select>
                                    </div>
                                </div>
                                <div class='row py-2'> 
                                    <div class='col-md-4'>
                                        <h5 for='id'> Date :</h5>
                                    </div>
                                    <div class='col-md-8'>
                                        <input type="datetime-local" class='form-control' name='date' value="<?php echo $row ['date'] ; ?>" required>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <h5>Number : </h5>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="nbre" id="select" onchange="selectitem()">
                                            <option name="nbre" value="<?php echo $row['nb'] ; ?>"><?php echo $row ['nb'] ;?></option>
                                            <?php
                                                $nb = $row ['nb'] ;  
                                                if ($nb==0) 
                                                    $nb=1; 
                                                for ($i=$nb+1;$i<=5;$i++)  {
                                            ?>
                                                    <option name="nbre" value="<?php echo $i ?>"><?php echo $i; ?></option>
                                                <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'> 
                                <div class="form-group" style="display: none;" id="1" >
                                    <h3>Person 1</h3>
                                    <div class="px-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="n1" class="form-control" value="<?php echo $row ['n1'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="p1" class="form-control" value="<?php echo $row ['p1'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" name="a1" class="form-control" value="<?php echo $row ['a1'] ;?>" >
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-group" style="display: none;" id="2" >
                                    <h3>Person 2</h3>
                                    <div class="px-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="n2" class="form-control" value="<?php echo $row ['n2'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="p2" class="form-control" value="<?php echo $row ['p2'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" name="a2" class="form-control" value="<?php echo $row ['a2'] ; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;" id="3" >
                                    <h3>Person 3</h3>
                                    <div class="px-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="n3" class="form-control" value="<?php echo $row ['n3'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="p3" class="form-control" value="<?php echo $row ['p3'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" name="a3" class="form-control" value="<?php echo $row ['a3'] ; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;" id="4" >
                                    <h3>Person 4</h3>
                                    <div class="px-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="tet" name="n4" class="form-control" value="<?php echo $row ['n4'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="p4" class="form-control" value="<?php echo $row ['p4'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" name="a4" class="form-control" value="<?php echo $row ['a4'] ; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;" id="5" >
                                    <h3>Person 5</h3>
                                    <div class="px-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="n5" class="form-control" value="<?php echo $row ['n5'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="p5" class="form-control" value="<?php echo $row ['p5'] ; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" name="a5" class="form-control" value="<?php echo $row ['a5'] ; }}?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                    </div>
                    <div class="row py-2" style="display:none;" id="6">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input type="submit" name="edit2" Value="Edit" class="btn btn-success form-control">
                                </div>
                                <div class="col-md-4"></div>
                    </div>   
            </form>




        <!-- JAVA Script -->
<script type="text/javascript">
	function selectitem()
	{
	 var x =document.getElementById("select").value;   
        document.getElementById("1").style.display = 'none' ;
        document.getElementById("2").style.display = 'none' ;
        document.getElementById("3").style.display = 'none' ;
		document.getElementById("4").style.display = 'none' ;
        document.getElementById("5").style.display = 'none' ;
        document.getElementById("6").style.display = 'none' ; 
	console.log(x);
    if ( x=="0") 
        document.getElementById("6").style.display = 'block' ;
    else if (x=="2"){
        document.getElementById("1").style.display = 'block' ;
        document.getElementById("2").style.display = 'block' ;
        document.getElementById("6").style.display = 'block' ;
    }
	else if (x=="3") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
		document.getElementById("3").style.display = 'block' ;
        document.getElementById("6").style.display = 'block' ;
	}
	else if (x=="4") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
        document.getElementById("3").style.display = 'block' ;
		document.getElementById("4").style.display = 'block' ;
        document.getElementById("6").style.display = 'block' ;
	}
	else if (x=="5") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
		document.getElementById("3").style.display = 'block' ;
		document.getElementById("4").style.display = 'block' ;
        document.getElementById("5").style.display = 'block' ;
        document.getElementById("6").style.display = 'block' ;
	}
}
</script>