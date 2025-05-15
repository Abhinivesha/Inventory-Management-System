<?php
$conn = mysqli_connect('localhost','root','','billing');
if ($conn) {
    // echo "Connected";
}
else {
    echo "Failed" . mysqli_connect_error();
}

$p_id = $_POST['id'];
// echo $p_id;

$sql = "SELECT * FROM products WHERE id='$p_id'";
$result = $conn->query($sql);
if ($result) {
    echo json_encode(array("status" => true, "data" => $result->fetch_assoc()));
}
// while($row = $result->fetch_assoc()){
//     print_r(json_encode($row));
// }
?>