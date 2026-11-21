<?php
//DB CONNCTION USING PDO
$db=new pdo("mysql:host=localhost;dbname=attendance","root","");
if (!$db) {
    # code...
    print("database connection failed");
}
else {
    
    // echo"database connected successfully";
}
return $db;
?>