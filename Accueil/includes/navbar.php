

<?php 
  $cin = $_GET ['cin'] ; 
  $query = "SELECT nom,prenom FROM register WHERE cin = '$cin' " ; 
  $result = mysqli_query ($connection,$query) ; 
  if ( !$result ) 
    die ("Query Field".mysqli_error()) ; 
  else { 
    $row = mysqli_fetch_assoc ($result) ; 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo "./?cin=".$_GET['cin']."&email=".$_GET['email'] ?>">Hamza Rh</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo "./?cin=".$_GET['cin']."&email=".$_GET['email'] ?>">Home <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo "book.php?cin=".$_GET['cin']."&email=".$_GET['email']?>"> Book </a>
      </li>    
    </ul>
    <form class="form-inline">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo "cart.php?cin=".$_GET['cin']."&email=".$_GET['email'] ?>"> <button type="button" class="btn btn-outline-light  ">My Cart</button></a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="<?php echo "profile.php?cin=".$_GET['cin']."&email=".$_GET['email'] ?>">  <button type="button" class="btn btn-outline-light "><?php echo $row['nom'].' '.$row['prenom'] ; } ?> </button></span></a>
            </li>   
            <li class="nav-item active"> 
                <a class="nav-link" href="../../Agence_touristique"> <button type="button" class="btn btn-outline-light  ">Log Out</button></a>
            </li>
        </ul>
    </form>
  </div>
</nav>