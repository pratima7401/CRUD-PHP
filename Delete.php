<?php
    include("connection.php");

    $id = $_GET['id'];

    $query = "DELETE FROM form WHERE ID ='$id'";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo "<script> alert('Record Deleted');</script>";

        ?>

            <meta http-equiv="refresh" content="0; url = http://localhost/PHP/Display.php" /> 


        <?php
    }
    else
    {
        echo "<script>alert('Failed to Update');</script>";
    }

?>