<?php include "ChromePhp.php" ?>

<?php 
// connect to the data base using MysqlI or PDO
// $var_to_store_data = mysqli_connect("host","user","passw","name database");
$connection = mysqli_connect("localhost","crisse","Serimi03","Shopping_List");

// check connection
if(!$connection){
  echo "connection failed: ". mysqli_connect_error();
}

// 1: CONSTRUCT QUERY: select all the data from the shopping_items table
$sqlQuery = "SELECT name, title, category, store, link, id, image FROM items ORDER BY created_at DESC";

// 2: get RESULT: get the result
$result = mysqli_query($connection,$sqlQuery);

// 3: FETCH RESULT: get resulting rows as an array
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 4: Free up the result after fetching data
mysqli_free_result($result);

// 5: close the connection
mysqli_close($connection);



?>


<!DOCTYPE html>
<html lang="en">

<!-- Start Header-->
<?php include "templates/header.php";?>



<!-- Start Jumbotrom-->
<div class="jumbotron p-1 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0 mx-auto text-center">
      <h1 class="display-5 font-italic title">Save Products From Your Favorite Stores</h1>
      <p class="lead my-3 para">Have your wishlists in one place. Whenever you find something you want, just save it in Savelist from any store around the web.</p>
    </div>
  </div>


<!-- Start Cards-->
<div class="container mb-3">
  <div class="row mb-2">

    <?php foreach($items as $item){?>
      <div class="col-md-6 col-sm-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 my-auto d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo htmlspecialchars($item['category']); ?></strong>
          <h5 class="mb-0"><?php echo htmlspecialchars($item['title']); ?></h5>
          <h6 class="mb-0"><?php echo htmlspecialchars($item['category']); ?></h6>
          <div class="mb-1 text-muted"><?php echo htmlspecialchars($item['store']); ?></div>
          <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank" class="btn btn-secondary w-50">Buy item</a>
          <hr class="text-black">
          <a href="details.php?id=<?php echo $item['id'] ?>" class="text-muted text-center w-25 align-self-end">INFO</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="" width="200" height="250">
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
 


<!-- Start Footer-->
<?php include "templates/footer.php";?>

</html>






