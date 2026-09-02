<?php
 $conn = mysqli_connect("localhost", "root","","shop");

    if(isset($_POST['delete'])){
        $name = $_POST['delete'];
        $query = "DELETE FROM `sign` WHERE Name=  '$name'"; 
        $sql =mysqli_query($conn, $query);
        if($sql)
        {
            echo "<script>
            alert('User Deleted Successfully');
            window.location.href='viewreg.php';
            </script>";
        }else{
            echo "<script>
            alert('Something went wrong');
            window.location.href='viewreg.php';
            </script>";
        }
    }
    if(isset($_POST['delete_contact'])){
        $name = $_POST['delete_contact'];
        $query = "DELETE FROM `contact` WHERE Name=  '$name'"; 
        $sql =mysqli_query($conn, $query);
        if($sql)
        {
            echo "<script>
            alert('Deleted Successfully');
            window.location.href='viewcont.php';
            </script>";
        }else{
            echo "<script>
            alert('Something went wrong');
            window.location.href='viewcont.php';
            </script>";
        }
    }
     
?>