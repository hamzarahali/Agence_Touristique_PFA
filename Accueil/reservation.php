<?php include "includes/header.php" ?>

    <h2 class="jumbotron text-center"> Reserve Now </h2>    
    
    <div class="row"> 
        <div class="col-md-6">
            <?php include "circuit_utilise_reservation.php" ?>
        </div>
        <div class="col-md-6">
                 <!--  PHP  -->
                 <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" style="padding : 0px 0px">
                                <?php   
                                    if ( isset ( $_POST ['book'] ) ) 
                                    {
                                        $cin = $_GET ['cin'] ; 
                                        $date = $_POST ['date'] ; 
                                        $nb = $_POST ['nbre'] ; 
                                        $num = $_GET['num'] ; 
                                        
                                        if ( $nb == 0 ) 
                                            $query = "INSERT INTO book (cin,date,nb,num_circuit) VALUES ('$cin' ,'$date' ,'$nb','$num') " ;
                                        else if ( $nb == 2 ) {
                                            $n1 = $_POST ['n1'] ;
                                            $p1 = $_POST ['p1'] ;
                                            $a1 = $_POST ['a1'] ;
                                            $n2 = $_POST ['n2'] ;
                                            $p2 = $_POST ['p2'] ;
                                            $a2 = $_POST ['a2'] ;
                                            $query = "INSERT INTO book (cin,date,nb,n1,p1,a1,n2,p2,a2,num_circuit) VALUES ('$cin' ,'$date' ,'$nb','$n1','$p1','$a1','$n2','$p2','$a2','$num') " ;
                                        } else if ( $nb == 3 ) {
                                            $n1 = $_POST ['n1'] ;
                                            $p1 = $_POST ['p1'] ;
                                            $a1 = $_POST ['a1'] ;
                                            $n2 = $_POST ['n2'] ;
                                            $p2 = $_POST ['p2'] ;
                                            $a2 = $_POST ['a2'] ;
                                            $n3 = $_POST ['n3'] ;
                                            $p3 = $_POST ['p3'] ;
                                            $a3 = $_POST ['a3'] ; 
                                            $query = "INSERT INTO book (cin,date,nb,n1,p1,a1,n2,p2,a2,n3,p3,a3,num_circuit) VALUES ('$cin','$date','$nb','$n1','$p1','$a1','$n2','$p2','$a2','$n3','$p3','$a3','$num') " ;
                                        } else if ( $nb == 4 ) {
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
                                            $query = "INSERT INTO book (cin,date,nb,n1,p1,a1,n2,p2,a2,n3,p3,a3,n4,p4,a4,num_circuit) VALUES ('$cin','$date','$nb','$n1','$p1','$a1','$n2','$p2','$a2','$n3','$p3','$a3','$n4','$p4','$a4','$num') " ;
                                        } else if ( $nb == 5 ) {
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
                                            $query = "INSERT INTO book (cin,date,nb,n1,p1,a1,n2,p2,a2,n3,p3,a3,n4,p4,a4,n5,p5,a5,num_circuit) VALUES ('$cin','$date','$nb','$n1','$p1','$a1','$n2','$p2','$a2','$n3','$p3','$a3','$n4','$p4','$a4','$n5','$p5','$a5','$num') " ;
                                        }
                                        $result = mysqli_query ($connection,$query) ;
                                        if ( !$result ) 
                                            die ("Query Field".mysqli_error()) ;
                                        else 
                                            header ("location: cart.php?email=".$_GET['email']."&cin=".$_GET['cin']) ;
                                    }
                                ?>                            
                            </div>
                            <div class="col-md-2"></div>
                        </div>
            <form action="" method="post">
                <div class="container"  style="padding : 20px 40px ">
                    <?php
                            $cin = $_GET ['cin'] ; 
                            $query = " SELECT * FROM register WHERE cin LIKE '$cin' " ;
                            $result = mysqli_query ($connection,$query) ; 
                            if ( !$result ) 
                                die ("Query Field".mysqli_error()) ; 
                            else {
                                 $row = mysqli_fetch_assoc ( $result ) ;
                    ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="cin"> CIN : </label>
                            </div>          
                            <div class="col-md-6">
                                <input type="text" name="cin" class="form-control" id="cin" value="<?php echo $_GET ['cin'] ;?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="lname"> Last Name : </label>
                            </div>          
                            <div class="col-md-6">
                                <input type="text" name="nom" class="form-control" id="lname" value="<?php echo $row ['nom'] ; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="fname"> First Name : </label>
                            </div>          
                            <div class="col-md-6">
                                <input type="text" name="prenom" class="form-control" id="fname" value="<?php echo $row['prenom'] ;  }?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="sex"> Circuit  : </label>
                            </div>          
                            <div class="col-md-6">
                                <input type="text" value="<?php if ($_GET['num']!=0) echo $_GET['num']  ?>" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="sex"> Date  : </label>
                            </div>          
                            <div class="col-md-6">
                                <input type="datetime-local" name="date" class="form-control" id="sex" required value="<?php if (isset($_POST ['person'])) echo $_POST['date'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row"> 
                            <div class="col-md-4">
                                <label>Person :</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="nbre" id="select" onchange="selectitem()">
                                    <option></option>
                                    <option name="nbre" value="0">0</option>
                                    <option name="nbre" value="2">2</option>
                                    <option name="nbre" value="3">3</option>
                                    <option name="nbre" value="4">4</option>
                                    <option name="nbre" value="5">5</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                    <div class="form-group" style="display: none;" id="1" >
                        <h3>Person 1</h3>
                        <div class="px-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Last Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="n1" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="p1" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Age : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="a1" class="form-control">
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
                                <div class="col-md-6">
                                    <input type="text" name="n2" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="p2" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Age : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="a2" class="form-control">
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
                                <div class="col-md-6">
                                    <input type="text" name="n3" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="p3" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Age : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="a3" class="form-control">
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
                                <div class="col-md-6">
                                    <input type="text" name="n4" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="p4" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Age : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="a4" class="form-control">
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
                                <div class="col-md-6">
                                    <input type="text" name="n5" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="p5" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Age : </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="a5" class="form-control">
                                </div>
                            </div>
                        </div>
			        </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <input type="submit" name="book" value="Book" class="btn btn-primary form-control">
                            </div>
                            <div class="col-md-2"> </div>
                        </div>
                    </div>


                    </div>
		        </div>
	        </form>
        </div>
    </div>
    <div class="row" style="padding:0px 0px">  
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="<?php echo "book.php?email=".$_GET['email']."&cin=".$_GET['cin']?>" class="btn btn-warning form-control">Change Circuit </a>
        </div>
        <div class="col-md-4"></div>
    </div>
    
<!-- JAVA Script -->
<script type="text/javascript">
	function selectitem()
	{
	 var x =document.getElementById("select").value;
	
	console.log(x);
        document.getElementById("1").style.display = 'none' ;
		document.getElementById("2").style.display = 'none' ;
	    document.getElementById("3").style.display = 'none' ;
		document.getElementById("4").style.display = 'none' ;
		document.getElementById("5").style.display = 'none' ;
    if (x=="2"){
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
    }
	else if (x=="3") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
		document.getElementById("3").style.display = 'block' ;
		document.getElementById("4").style.display = 'none' ;
		document.getElementById("5").style.display = 'none' ;
	}
	else if (x=="4") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
        document.getElementById("3").style.display = 'block' ;
		document.getElementById("4").style.display = 'block' ;
		document.getElementById("5").style.display = 'none' ;
	}
	else if (x=="5") {
        document.getElementById("1").style.display = 'block' ;
		document.getElementById("2").style.display = 'block' ;
		document.getElementById("3").style.display = 'block' ;
		document.getElementById("4").style.display = 'block' ;
		document.getElementById("5").style.display = 'block' ;
	}
}
</script>


<?php include "includes/footer.php" ?>