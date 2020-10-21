<!-- Signup form data storing in database -->
<?php
$conn = mysqli_connect("localhost", "root", "", "testing");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$password_hash = password_hash($_POST["pass"],PASSWORD_DEFAULT);

// Attempt insert query execution
$query = "INSERT INTO user_register(name, username, email, phone, password) VALUES ('$name', '$username', '$email', '$phone', '$password_hash')";

if(mysqli_query($conn, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>