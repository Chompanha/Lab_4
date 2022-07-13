<?php 
  require_once 'db.php';
  $updateID =$_GET['updateid'];
  $query1 = $fluent->from('product')->where('id',$updateID)->fetch();

  if(isset($_POST['submit'])){
    $product_name =htmlentities($_POST['name']);
    $amount =htmlentities($_POST['amount']);
    $price =htmlentities($_POST['price']);
    $itemId=htmlentities($_POST['itemId']);
  if(empty( $product_name) || empty($amount) || empty( $price)){
    echo "<script>alert('Must Fill all Informtion')</script>";
  }else{

    $value= array('name'=> $product_name,'amount'=>$amount,'price'=>$price);
    $query = $fluent->update('product')->set($value)->where('id',$itemId)->execute();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<div class="container">
       <div class="vh-100 d-flex justify-content-center align-items-center flex-column gap-4">
       <h3>Update Data</h3>
       <a href="index.php">View Data</a>

                <form action="update.php" method="POST">
                      <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                         <input type="name" class="form-control" id="name" name="name" value= <?php echo  $query1['name'] ?> >
                      </div>

                      <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                         <input type="name" class="form-control" id="amount" name="amount" value=<?php echo  $query1['amount'] ?> >
                      </div>

                      <div class="mb-3">
                        <label for="name" class="form-label">Price</label>
                         <input type="name" class="form-control" id="name" name="price" value= <?php echo  $query1['price'] ?>  >
                      </div>

                      <div class="mb-3">
                      
                         <input type="hidden" class="form-control" id="name"  name="itemId" value= <?php echo  $query1['id'] ?>  >
                      </div>

        
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
               </form>
        </div>

  </div>
</body>
</html>