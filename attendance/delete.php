<?php
require'dbconfig.php';
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $stmt=$db->prepare("DELETE FROM users WHERE id=?" );
    $stmt->execute([$id]);
}
header("location:select.php");
exit;
?>