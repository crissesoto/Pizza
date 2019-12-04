<?php include "ChromePhp.php" ?>

<?php 
// connect to the data base using MysqlI or PDO
// $var_to_store_data = mysqli_connect("host","user","passw","name database");
$connection = mysqli_connect("localhost","crisse","Serimi03","Shopping_List");

// check connection
if(!$connection){
  echo "connection failed: ". mysqli_connect_error();
}
?>



<?php include "templates/header.php";?>
<?php include "templates/footer.php";?>




