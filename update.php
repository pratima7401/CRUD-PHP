<!-- <?php
    echo $_GET['id'];
    echo $_GET['fn'];
    echo $_GET['ln'];
    echo $_GET['gen'];
    echo $_GET['em'];
    echo $_GET['num'];
    echo $_GET['ad'];
?> -->
<?php include("connection.php");
    $id = $_GET['id'];

    $query  = "SELECT * FROM form WHERE ID = '$id'";

    $data   = mysqli_query($conn, $query);

    $total  = mysqli_num_rows($data);

    $result = mysqli_fetch_assoc($data);
?>

<html>
    <head>
        <title>PHP CURD</title>
        <link rel="stylesheet" type="text/css" href="phpform.css">
    </head>
    <body>
        <div class="container">
        <form action="#" method="post">
            <h1>UPDATE FORM</h1>
           <label>Enter First Name</label>
           <input type="text" value="<?php echo $result['fname']; ?>" name="fname" class="input" required><br>
           <br>
           <label>Enter Last Name</label>
           <input type="text" value="<?php echo $result['lname']; ?>" name="lname" class="input" required><br>
           <br>
           <label>Enter Password</label>
           <input type="password" value="<?php echo $result['password']; ?>"  name="psd" class="input" required><br>
           <br>
           <label>Confirm Password</label>
           <input type="password" value="<?php echo $result['cpassword']; ?>" name="cpsd" class="input" required><br>
           <br>
            
           <label>Select Gender</label>
           <select name="gender" class="input" required>
                <option value="">Select</option>

                <option value="Male"
                    <?php 
                        if($result['gender'] == 'Male')
                        {
                            echo "Selected";
                        }
                    ?>
                >
                    Male</option>
                <option value="Female"
                <?php 
                        if($result['gender'] == 'Female')
                        {
                            echo "Selected";
                        }
                    ?>
                > Female</option>
                <option value="Other"
                <?php 
                        if($result['gender'] == 'Other')
                        {
                            echo "Selected";
                        }
                    ?>
                >Other</option>
           </select>
           <br>
           <label >Select Department</label>
           <select name="dept" class="input" required>
                <option value="">Select</option>
                <option value="Development"  
                <?php 
                        if($result['dept'] == 'Development')
                        {
                            echo "Selected";
                        }
                    ?>
                >Development</option>
                <option value="Sales"
                <?php 
                        if($result['dept'] == 'Sales')
                        {
                            echo "Selected";
                        }
                    ?>
                >Sales</option>
                <option value="Admin"
                    <?php 
                        if($result['dept'] == 'Admin')
                        {
                            echo "Selected";
                        }
                    ?>
                >Admin</option>
                <option values="Marketing"
                    <?php 
                        if($result['dept'] == 'Marketing')
                        {
                            echo "Selected";
                        }
                    ?>
                >Marketing</option>
                <option value="Finance"
                <?php 
                        if($result['dept'] == 'Finance')
                        {
                            echo "Selected";
                        }
                    ?>
                >Finance</option>
                <option value="Testing"
                <?php 
                        if($result['dept'] == 'Testing')
                        {
                            echo "Selected";
                        }
                    ?>     
                >Testing</option>
           </select>
           <br> 
           <br>
           <label>Enter Mobile Number</label>
           <input type="number" value="<?php echo $result['number']; ?>" name="num" class="input" required><br>
           <br>
           <label>Enter Email</label>
           <input type="text" value="<?php echo $result['email']; ?>" name="email" class="input"><br>
           <br>
           <label>Enter Address</label>
           <textarea name="add" class="input" required><?php echo $result['address']; ?>
            </textarea><br>
           <br>
           <input type="checkbox" name="confirm" class="input" required>Agree to terms and condition
           <br>
           <br>
           <input type="submit" name="update" class="btn" value="Update">
        </form>
    </div>
    </body>
</html>

<?php


if(isset($_POST['update']))
{
    $fname  =$_POST['fname'];
    $lname  =$_POST['lname'];
    $psd    =$_POST['psd'];
    $cpsd   =$_POST['cpsd'];
    $gender =$_POST['gender'];
    $email  =$_POST['email'];
    $num    =$_POST['num'];
    $add    =$_POST['add'];

        $query = "UPDATE form SET fname= '$fname',lname='$lname',password='$psd',cpassword='$cpsd',gender='$gender',email='$email',number='$num',address='$add' WHERE ID='$id'";
    
        $data= mysqli_query($conn, $query);

        if($data)
        {
            echo "<script> alert('Record Updated');</script>";
            ?>
                <meta http-equiv="refresh" 
          content="1; url = http://localhost/PHP/admin.php" /> 


            <?php
        }
        else
        {
            echo "<script>alert('Failed to Update');</script>";
        }   
}
?>