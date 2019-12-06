<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Wardrope Shopping List</title>
</head>

<style>

*{
  box-sizing: border-box;
}

#brand {
  font-weight: bold !important;
  color: #000 !important;
}

.content{
  height: 75vh;
  padding: 10px;
  margin-top: 8vh;
}
form{
  width: 45vw;
  margin: auto
}

button{
  margin-top: 20px !important;
}

/* On screens that are 600px or less*/
@media screen and (max-width: 600px) {
  .title {
    font-size: 24px;
  }
  .para {
    font-size: 16px;

  }
  .read {
    font-size: 16px;
  }
}

</style>

<body>
<div class="container-fuid">
  <nav class="navbar navbar-light bg-white px-5">
    <a href="index.php" class="navbar-brand" id="brand">Shopping List</a>
    <a href="additem.php" class="btn btn-dark text-white my-2 my-sm-0 font-weight-bold">Add New Item</a>
  </nav>
</div>

