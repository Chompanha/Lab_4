<?php

if(isset($_POST['deletedata']))
{
    include 'db.php' ;
    $deleteID =$_POST['delete_id'];
    $query = $fluent->deleteFrom('product')->where('id', $deleteID)->execute();
    sleep(2);
    header('Location: list.php');    
    }

?>