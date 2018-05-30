<?php

/* Code by Saleh Ibne Omar 29 May 2018
Find Saleh on: https://salehibneomar.github.io/first-portfolio/
*/

 $result= "";
if(isset($_POST["submit"])){
  $input_1 = $_POST["input_1"];
  $input_2 = $_POST["input_2"];

  $submit_value = $_POST["submit"];
 
  if($submit_value == "ADD"){
    $result = $input_1 + $input_2;
  }
  elseif($submit_value == "SUB"){
    $result = $input_1 - $input_2;
  }
  elseif($submit_value == "MULTI"){
    $result = $input_1 * $input_2;
  }
  elseif($submit_value == "DIV"){
    $result = $input_1 / $input_2;
  }
  elseif($submit_value == "MOD"){
    $result = $input_1 % $input_2;
  }
  else{
    $result = "";
  }

}

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title></title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--ALL CSS LINKS STARTS HERE-->

  <!--Font Awesome icon CSS-->
  <link rel="stylesheet" href="Fontawesome-css/css/fontawesome-all.min.css">
  <!--Boilerplate normalize 8.0.0 CSS-->
  <link rel="stylesheet" href="boilerplate-css/normalize.css">
  <!--Bootstrap 4 minified CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <!--Font Awesome icon own edit CSS-->
  <link rel="stylesheet" href="CSS-3/font-awesome-icon-edits.css">
  <!--Own CSS-->
  <link rel="stylesheet" href="CSS-3/style.css">

<!--ALL CSS LINKS ENDS HERE-->


  
</head>

<body>
  
   
<div class="calculator-container">

  <div class="calculator">
 
    <form  method="post">
      <div class="form-group">
        <input class="form-control form-control-lg" type="number" name="input_1" placeholder="Enter first value: "><br>
        <input class="form-control form-control-lg" type="number" name="input_2" placeholder="Enter second value: "><br>


    <div class="panel alert alert-success alert-dismissible fade show" role="alert">
        <?php
          echo "<h2>Result is = ". $result."<br>";
        ?>
      <hr>
        <p class="mb-0">&copy; 2018, Saleh Ibne Omar</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
 
      <div class="button-container">
      <input class="bttnr1 btn btn-primary" type="submit" name="submit" value="ADD">
      <input class="bttnr1 btn btn-success" type="submit" name="submit" value="SUB">
      <input class="bttnr1 btn btn-secondary" type="submit" name="submit" value="MULTI"> 
      <input class="btn btn-info" type="submit" name="submit" value="DIV"  >
      <input class="btn btn-dark" type="submit" name="submit" value="MOD">
      <input class="btn btn-danger" type="submit" name="submit" value="RESET">
      </div>
    </div>
 
    </form>
  </div>
</div>
  

  <!--Bootstrap JS, Jquery and Boilerplate Script-->
  <script src="boilerplate-js/modernizr-3.6.0.min.js"></script>
  <script src="boilerplate-js/jquery-3.3.1.min.js"></script>

  <!--Bootstrap 4 CDN Scripts-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  
</body>

</html>
