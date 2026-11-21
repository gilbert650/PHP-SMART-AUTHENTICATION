<?php
//IMPORT DB
require'dbconfig.php';
//SQL QUERY TO SELECT ALL
$stmt=$db->query("SELECT user_name,u_email FROM users");
$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
//HTML TABLE WHERE ALL USERS DISPLAYED
 echo"<h2>ALL USERS</h2>";
echo"<table><th>username</th><th>user  email</th>";
foreach ($users as $user) {

    echo"<tr>";
 echo "<td>".$user['user_name']."</td>";
  echo"<td>".$user['u_email']."</td>";
   echo"</tr>";
}
echo"</table>";
?>