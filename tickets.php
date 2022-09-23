<?php
// create a connection
$conn = mysqli_connect('localhost', 'root', '', 'gallerytickets');
$query = 'SELECT * FROM tickets';

$result = mysqli_query($conn, $query);

$ticket = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $exhibition = mysqli_real_escape_string($conn, $_POST['exhibition']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);



    $query = "INSERT INTO tickets(visitor_name, exhibition, ticket_type, ticket_date) VALUES('$name', '$exhibition', '$type', '$date')"; 

    if(mysqli_query($conn, $query)){
        echo 'Ticket added..';
    }
    else{
        echo " Error: ". mysqli_error($conn);
    }
}

echo json_encode($ticket);


?>