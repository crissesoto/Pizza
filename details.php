<!DOCTYPE html>
<html lang="en">


<?php 

// connect to the data base using MysqlI or PDO
// $var_to_store_data = mysqli_connect("host","user","passw","name database");
$connection = mysqli_connect("localhost","crisse","Serimi03","Shopping_List");

// check connection
if(!$connection){
  echo "connection failed: ". mysqli_connect_error();
}

?>

<?php 
  // check if the Get id is set
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($connection,$_GET["id"]);
    
    // make query
    $sqlQuery = "SELECT * FROM items WHERE id = $id";

    // get result 
    $result = mysqli_query($connection, $sqlQuery);

    // fetch result as a assoc array only the item with the selected id 
    $item = mysqli_fetch_assoc($result);

    // free the result
    mysqli_free_result($result);

    // close connection
    mysqli_close($connection);

    //print_r($item);

  }

?>

<!-- Start Header-->
<?php include "templates/header.php";?>
<div class="container w-75 ">
<?php if($item): ?>
  <div class=" w-75 mx-auto bg-light d-flex flex-column text-center">
  <img src="<?php echo $item['image'] ?>" class=" img-fluid align-self-center" alt="item image" width="250" height="400">
  <div class="card-body bg-white">
    <p class="card- text-primary"><?php echo $item['category'] ?></p>
    <h5 class="card-text"><?php echo $item['title'] ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $item['store'] ?></li>
    <li class="list-group-item"><?php echo "By " . $item['name'] ?></li>
    <li class="list-group-item"><?php echo "Created: " . $item['created'] ?></li>
  </ul>
  <div class="card-body d-flex flex-column">
    <a href="#" class="card-link align-self-center d-block btn btn-secondary w-50 d-block">Delete</a>
  </div>
</div>
<?php else:?>
<h3 class="text-center text-danger">Error: This item doesn't exist!</h3>
<?php endif; ?>
</div>




<!-- Start Footer-->
<?php include "templates/footer.php";?>
</html>

