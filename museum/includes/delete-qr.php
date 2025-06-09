<?php
include 'dbh.php';
$id = $_POST['id'];

$sql = "DELETE FROM `tijn_qrcodes` WHERE `id`= ?";
$statement = $conn->prepare($sql);
$statement -> bind_param('s',$id);
$statement->execute();
$result = $statement->get_result();

echo json_encode('');

?>