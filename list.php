<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="margin: 100px;">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <div class="d-flex justify-content-between">
        <h3>List of Products</h3>
        <a class='btn btn-success btn-sm' class="btn btn-primary" data-toggle="modal" data-target="#editmodal"> <i class="fa-solid fa-plus"></i> Add more product</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            // read all row from database table
            $query = $fluent->from('product');
            //$result = $pdo->query($query);       
            // read data of each row
            foreach ($query as $row) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["amount"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='update.php?id={$row['id']}'>Update</a>
                    <button id='btndelete' name='delete' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#deletemodal' >Delete</button> 
                </td>
            </tr>";
            }
            $fluent->close();
            ?>
        </tbody>
    </table>
</body>
</html>