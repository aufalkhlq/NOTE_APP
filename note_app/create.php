<?php

$connection = new mysqli("localhost", "root", "", "note_app");
$title      = $_POST['title']; 
$content    = $_POST['content'];
$date       = date('Y-m-d');

$result = mysqli_query($connection, "insert into catatan set title='$title', content='$content', date='$date'");

if($result){
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}
?>