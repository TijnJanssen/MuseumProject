<?php
$response=array();
include 'dbh.php';

$title = $_POST['title'];
$era = $_POST['era'];
$image = $_POST['image'];
$content = $_POST['content'];
$qr_code = $_POST['qr_code'];


function generateUUIDv4() {
    // Genereer 16 bytes (128 bits) willekeurige data
    $data = random_bytes(16);

    // Stel de versie in op 0100 (UUID v4)
    $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
    // Stel de variant in op 10xxxxxx
    $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);

    // Formatteer als UUID string
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

// Genereer een UUID en stop het in $id
$id = generateUUIDv4();


$sql = "INSERT INTO `tijn_qrcodes`(`id`, `title`, `content`, `era`, `image`, `qr_code`) VALUES (?,?,?,?,?,?)";
$statement = $conn->prepare($sql);
$statement -> bind_param('ssssss',$id,$title,$content,$era,$image,$qr_code);
$statement->execute();
$result = $statement->get_result();

echo json_encode($response);

?>