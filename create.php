<?php 

require_once 'db.php';
if(isset($_POST['submit'])){
    $product_name =htmlentities($_POST['name']);
    $amount =htmlentities($_POST['amount']);
    $price =htmlentities($_POST['price']);
  if(empty( $product_name) || empty($amount) || empty( $price)){
    echo "<script>alert('Must Fill all Informtion')</script>";
  }else{
    $value= array('name'=> $product_name,'amount'=>$amount,'price'=>$price);
    $query=$fluent->insertInto('product')->values($value)->execute();
    echo "<script>alert('Insertion Success')</script>";
  }
    
   

}



?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
  <div class="container">
       <div class="vh-100 d-flex justify-content-center align-items-center flex-column gap-4">
       <h3>Add Your Product Here</h3>

                <form action="create.php" method="POST">
                      <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                         <input type="name" class="form-control" id="name" name="name" >
                      </div>

                      <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                         <input type="name" class="form-control" id="amount" name="amount" >
                      </div>

                      <div class="mb-3">
                        <label for="name" class="form-label">Price</label>
                         <input type="name" class="form-control" id="name" name="price" >
                      </div>

        
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
               </form>
        </div>
        <a href="list.php">View Data</a>

  </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>