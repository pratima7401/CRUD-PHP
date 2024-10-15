<?php include("connection.php");?>

<html>
    <head>
        <title>PHP CURD</title>
        <link rel="stylesheet" type="text/css" href="phpform.css">
    </head>
    <body>
        <div class="container">
        <form action="#" method="post">
            <h1>REGISTRATION FORM</h1>
           <label>Enter First Name</label>  
           <input type="text" name="fname" class="input" required><br>
           <br>
           <label>Enter Last Name</label>  
           <input type="text" name="lname" class="input" required><br>
           <br>
           <label>Enter Password</label> 
           <input type="password" name="psd" class="input" required><br>
           <br>
           Confirm Password 
           <input type="password" name="cpsd" class="input" required><br>
           <br>        
           <label >Select Gender</label>
           <select name="gender" class="input"required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option values="Female">Female</option>
                <option value="Other">Other</option>
           </select>
           <br> 
           <br>
           <label>Enter Mobile Number</label> 
           <input type="number" name="num" class="input" required><br>
           <br>
            <label>Enter Email</label> 
            <input type="text" name="email" class="input"><br>
            <br>
            <label >Select Department</label>
           <select name="dept" class="input"required>
                <option value="">Select</option>
                <option value="Development">Development</option>
                <option value="Sales">Sales</option>
                <option value="Admin">Admin</option>
                <option values="Marketing">Marketing</option>
                <option value="Finance">Finance</option>
                <option value="Testing">Testing</option>
           </select>
           <br>
           <br>
           <label>Enter Address</label> 
           <textarea name="add" class="input" required></textarea><br>
           <br>
           <input type="checkbox" name="confirm" required>Agree to terms and condition
           <br>
           <br>
           <input type="submit" name="register" value="Register" class="btn">
        </form>
    </div>
    </body>
</html>

<?php


if(isset($_POST['register']))
{
    $fname  =$_POST['fname'];
    $lname  =$_POST['lname'];
    $psd    =$_POST['psd'];
    $cpsd   =$_POST['cpsd'];
    $gender =$_POST['gender'];
    $email  =$_POST['email'];
    $dept   =$_POST['dept'];
    $num    =$_POST['num'];
    $add    =$_POST['add'];

    // if($fname !="" && $lname !="" && $psd !="" && $cpsd !="" && $gender !="" && $email !="" && $num !="" && $add !="")
    // {
        $query = "INSERT INTO form (fname, lname, password, cpassword, gender, email, dept, number, address) values('$fname', '$lname', '$psd', '$cpsd', '$gender', '$email', '$dept', '$num', '$add')";
    
        $data= mysqli_query($conn, $query);

        if($data)
        {
            echo "<script>alert('Data Inserted');</script>";
        }
        else
        {
            echo "<script>alert('Failed to Insert');</script>";
        }   
    // }
    // else
    // {
    //     echo "<script>alert('Please Fill All The Details');</script>";
    // }
}
?>