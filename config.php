<?php
$conn = mysqli_connect('readstack.mysql.database.azure.com', 'alfastrek', 'Abhinav@1703', 'shop_db', 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
