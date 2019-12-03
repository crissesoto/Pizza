<?php 

// array to store the errors
$errors = [
  "name" => "",
  "category" =>"",
  "store" =>"",
  "link" =>"",

];


if(isset($_POST["submit"])){

  // check if name is empty
  if(empty($_POST["name"])){
    $errors["name"] = "Name is required";
  }else{
    echo htmlspecialchars($_POST["name"])."<br>";
  };
  // check if name is empty
  if(empty($_POST["category"])){
    $errors["category"] = "Category is required";
  }else{
    echo htmlspecialchars($_POST["category"])."<br>";
  };
  // check if name is empty
  if(empty($_POST["store"])){
    $errors["store"] = "Store name is required";
  }else{
    echo htmlspecialchars($_POST["store"])."<br>";
  };
  // check if name is empty
  if(empty($_POST["link"])){
    $errors["link"] = "Item link is required";
  }else{
    echo htmlspecialchars($_POST["link"])."<br>";
  };
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include "templates/header.php";?>


<section class="container d-flex flex-column justify-content-center content">
  <h4 class="text-center ">Add Item</h4>
  <form action="additem.php" method="POST" class="d-flex flex-column align-self-center">
    
  <label for="name">Your Name:</label>
    <input type="text" name="name">
    <div class="text-danger"> <?php echo $errors["name"]; ?> </div>

    <label for="category">Category:</label>
    <input type="text" name="category">
    <div class="text-danger"> <?php echo $errors["category"]; ?> </div>

    <label for="store">Store:</label>
    <input type="text" name="store">
    <div class="text-danger"> <?php echo $errors["store"]; ?> </div>

    <label for="link">Item link:</label>
    <input type="href" name="link">
    <div class="text-danger"> <?php echo $errors["link"]; ?> </div>

    <div class="text-center mt-3">
    <button class="btn btn-dark my-2 my-sm-0" type="submit" value="submit" name="submit">Submit</button>
    </div>

  </form>
</section>

<?php include "templates/footer.php"?>


