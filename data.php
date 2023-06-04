<?php


$servername = "localhost"; // Replace with your database server name

$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "mydata"; // Replace with your database name



// Create a connection

$conn = new mysqli($servername, $username, $password, $dbname);



if(isset($_POST['submit']))

{
$name=$_POST['name']
$phone=$_POST['phone']
$query=$_POST['query']
}

// Check connection

if ($conn->connect_error) 
{
    
die("Connection failed: " . $conn->connect_error);

}




// Prepare the SQL statement

$sql = "INSERT INTO mytable (Name, Phone Number,Query ) VALUES ('$name', '$phone', '$query')";



// Execute the query

if ($conn->query($sql) === TRUE) 
          {
    
              echo "Record inserted successfully.";

           } 
            else 
           {
   
             echo "Error: " . $sql . "<br>" . $conn->error;

           }



// Close the connection

$conn->close();


?>