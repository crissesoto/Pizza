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
$sqlQuery = "SELECT name, category, store, link FROM shopping_items";

// 2: MAKE QUERY: get the result
$result = mysqli_query($connection,$sqlQuery);

// 3: FETCH RESULT: get resulting rows as an array
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 4: Free up the result after fetching data
mysqli_free_result($result);

// 5: close the connection
mysqli_close($connection);

ChromePhp::log($items);


?>


<?php include "templates/header.php";?>
<?php include "templates/footer.php";?>




