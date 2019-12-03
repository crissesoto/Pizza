<?php 


?>

<!DOCTYPE html>
<html lang="en">

<?php include "templates/header.php";?>


<section class="container d-flex flex-column justify-content-center">
  <h4 class="text-center ">Add Item</h4>
  <form action="" method="" class="d-flex flex-column align-self-center">
    <label for="name">Your Name:</label>
    <input type="text" name="name">
    <label for="category">Category:</label>
    <input type="text" name="category">
    <label for="store">Store:</label>
    <input type="text" name="store">
    <label for="link">Item link:</label>
    <input type="text" name="link">
    <div class="text-center mt-3">
    <button class="btn btn-dark my-2 my-sm-0" type="submit" value="submit" name="submit">Submit</button>
    </div>
  </form>
</section>

<?php include "templates/footer.php"?>


