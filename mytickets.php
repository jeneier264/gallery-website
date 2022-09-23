<?php 

$conn = mysqli_connect('localhost', 'root', '', 'gallerytickets');
$query = 'SELECT * FROM tickets';

$result = mysqli_query($conn, $query);

$tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($tickets);

?>