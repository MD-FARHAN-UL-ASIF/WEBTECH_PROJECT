<?php

include("../model/database.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($connection, $id);

}

// delete data query
function delete_data($connection, $id){
   
    $query="DELETE from appointment WHERE id=$id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:../view/appoint-table.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>