<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="margin: 100px;">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous">
        </script>
        <div class="d-flex justify-content-between">
            <h3>List of Products</h3>
            <a class='btn btn-success btn-sm' href="create.php"> Add more product</a>
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
                    <a class='btn btn-primary btn-sm' href='update.php?updateid={$row['id']}'>Update</a>
                    <button id='btndelete' name='delete' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#deletemodal' >Delete</button> 
                </td>
                
            </tr>";
                }
                $fluent->close();
                ?>
            </tbody>
        </table>
    </script>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="delete.php" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button id="delete" type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                        <a type="button" href="index.php" class="btn btn-secondary"> NO </a>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $('.btn-danger').on('click', function() {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
    <script>
        $(function() {
            $('#delete').on('click', function() {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Product Delete Successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            });

        });
    </script>
</body>

</html>