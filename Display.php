<html>
    <head>
        <title>Display</title>
    </head>
    <style>
        body 
        {
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,.7)), url("background2jpg.avif");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        table{
            background-color: transparent;

        }
        .update, .delete,.filt
        {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 3px;
            height: 25px;
            width: 75px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color: red;          
        }
        .enable, .disable
        {
            background-color: green;
            color: white;
            border: 2px;
            outline: none;
            border-radius: 3px;
            height: 50px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            padding-left: 4px;
            padding-right: 4px;
            padding-top:2px ;
            padding-bottom: 2px;
        }
        .disable{
            background-color: red;
            
        }
        .cont{
            margin-left: 67%;
        }
        .cont .filt{
            margin-top: 10%;
            padding-top: 10px;
            padding-bottom: 10px;
            align-items: center;
            width: 90px;
            height: 40px;
            cursor: pointer;
            font-size: large;
        }
        .reset{
            background-color: red;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 14px;
            padding-right: 14px;
            font-size: large;
            text-decoration: none;
            border-radius: 2px;
        }
        .select{
            height: 40px;
            margin-left: 5px;
            width: 120px;
            font-size: large;
            border-radius: 2px;
            
        }
    </style>
</html>

<?php
    include("connection.php");
    error_reporting(0);

    $query  = "SELECT * FROM form";

    $data   = mysqli_query($conn, $query);

    $total  = mysqli_num_rows($data);

    if($total != 0)
    {   
        ?>
            <h2 align="center"><mark> All Records Here</mark></h2>
            <center>
            <table border="1" cellspacing= "7" width="85%">
                <tr>
                    <th width= "1%">ID</th>
                    <th width= "6%">First Name</th>
                    <th width= "6%">Last Name</th>
                    <th width= "2%">Gender</th>
                    <th width= "7%">Email</th>
                    <th width= "7%">Department</th>
                    <th width= "4%">Number</th>
                    <th width= "10%">Address</th>
                    <th width= "10%">Operations</th>
                    <th width= "5%">Status</th>
                </tr>

        <?php

        while($result = mysqli_fetch_assoc($data))
        {
           echo "<tr>
                    <td>".$result['ID']."</td>
                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['dept']."</td>
                    <td>".$result['number']."</td>
                    <td>".$result['address']."</td>
                    <td>
                    <a href='update.php?id=$result[ID]'><input type ='submit' value='Update' class='update'></a>
                    <a href='Delete.php?id=$result[ID]'><input type ='submit' value='Delete' class='delete' onclick='return confirmdelete()'></a>
                    </td>
                </tr>";
        }
    }
    else
    {
        echo "No Records";
    }

?>
</table>
            </center>
            <script>
                function confirmdelete()
                {
                    return confirm('Are you sure want to delete?');
                }
            </script>