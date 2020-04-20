<?php
session_start();

if(isset($_SESSION['username']) && $_SESSION['username'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['username']);
    header('location:index.php');
}

?>

<?php
session_start();

if(isset($_SESSION['txtusername']) && $_SESSION['txtusername'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['txtusername']);
    header('location:index.php');
}

?>