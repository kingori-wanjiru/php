<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";
$connection=mysqli_connect($servername,$username,$password,$dbname);
//checking connection
if("conn->connection_error");
die("connection error:" . $connect->connect_error());
//getting data from table
if (isset($_POST['ID']) && isset($_POST['FULLNAME']) && isset($_POST['SALARY'])) {
$ID=$_POST["ID"];
$FULLNAME=$_POST["FULLNAME"];
$SALARY=$_POST["SALARY"];
}
//INSERT TO TABLE
$insert_sql ="INSERT INTO messages('ID','FULLNAME','SALARY') VALUES('$ID','$FULLNAME','$SALARY')";

?>

<form action="trial.php" method="post" >
       teachers ID<input type="text" name="ID"><br><br>
       full name <input type="text" name="full name"><br><br>
      salary <input type="salary" name="salary"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>