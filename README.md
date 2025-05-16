step 1 

● Make database and table

   Database name should be :- user_data
  
   Table name should be :- user_table



step 2 

● Update the database.php file slightly to enable database connection.

example:-

$server = "localhost";
$username = "root";
$password = "";
$database = "user_data";

$conn = mysqli_connect($server, $username, $password, $database);

All done!



created by : Suraj Das
 

