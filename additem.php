<?php include "templates/header.php";?>

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

//init variables in html iput as value attr
$name = "";
$title = "";
$category = "";
$store = "";
$link = "";
$image = "";


// array to store the errors
$errors = [
  "name" => "",
  "title" =>"",
  "category" =>"",
  "store" =>"",
  "link" =>"",
  "image" => "",

];


if(isset($_POST["submit"])){

  // check if name is empty
  if(empty($_POST["name"])){
    $errors["name"] = "Name is required";
  }else{
    $name = htmlspecialchars($_POST["name"]);
  };
  // check if title is empty
  if(empty($_POST["title"])){
    $errors["title"] = "Item's name is required";
  }else{
    $title = htmlspecialchars($_POST["title"]);
  };
  // check if category is empty
  if(empty($_POST["category"])){
    $errors["category"] = "Category is required";
  }else{
    $category =  htmlspecialchars($_POST["category"]);
  };
  // check if store is empty
  if(empty($_POST["store"])){
    $errors["store"] = "Store name is required";
  }else{
    $store = htmlspecialchars($_POST["store"]);
  };
  // check if link is empty
  if(empty($_POST["link"])){
    $errors["link"] = "Item link is required";
  }else{
    $link =  htmlspecialchars($_POST["link"]);
  };
  // check if image is empty
  if(empty($_POST["image"])){
    $errors["image"] = "Image link is required";
  }else{
    $image =  htmlspecialchars($_POST["image"]);
  };


  if(!array_filter($errors)){

    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $category = mysqli_real_escape_string($connection, $_POST["category"]);
    $store = mysqli_real_escape_string($connection, $_POST["store"]);
    $link = mysqli_real_escape_string($connection, $_POST["link"]);
    $image = mysqli_real_escape_string($connection, $_POST["image"]);

    // create query to insert data into the database
    $sqlQuery = "INSERT INTO items(name, title, category, store, link, image) VALUES('$name', '$title', '$category', '$store','$link', '$image')"; 

    // save the query to the database and check if it works
    if(mysqli_query($connection, $sqlQuery)){
      // relocate to the homepage
      header("location: index.php");
    }else{
      echo "Error: " . mysqli_error($connection); 
    }


  };
};


?>



<section class="container d-flex flex-column justify-content-center content mb-3 bg-light">
  <form action="additem.php" method="POST" class="d-flex flex-column align-self-center text-center">
  <h2 class="pb-3">Add a new item to your shopping list</h2>
  <label for="name">Your Name:</label>
    <input type="text" name="name" value="<?php echo $name ?>">
    <div class="text-danger"> <?php echo $errors["name"]; ?> </div>

    <label for="title">Item's name:</label>
    <input type="text" name="title" value="<?php echo $title ?>">
    <div class="text-danger"> <?php echo $errors["title"]; ?> </div>

    <label for="category">Category:</label>
    <input type="text" name="category" value="<?php echo $category ?>">
    <div class="text-danger"> <?php echo $errors["category"]; ?> </div>

    <label for="store">Store:</label>
    <input type="text" name="store" value="<?php echo $store ?>">
    <div class="text-danger"> <?php echo $errors["store"]; ?> </div>

    <label for="link">Item link:</label>
    <input type="href" name="link" value="<?php echo $link ?>">
    <div class="text-danger"> <?php echo $errors["link"]; ?> </div>

    <label for="image">Item image:</label>
    <input type="href" name="image" value="<?php echo $image ?>">
    <div class="text-danger"> <?php echo $errors["image"]; ?> </div>

    <div class="text-center mt-2">
    <button class="btn btn-dark my-2 my-sm-0" type="submit" value="submit" name="submit">Submit</button>
    </div>

  </form>
</section>

<?php include "templates/footer.php"?>


