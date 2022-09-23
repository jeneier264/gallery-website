<?php
// create a connection
$conn = mysqli_connect('localhost', 'root', '', 'gallerytickets');
$query = 'SELECT * FROM tickets';

$result = mysqli_query($conn, $query);

$ticket = mysqli_fetch_all($result, MYSQLI_ASSOC);

$query = "DELETE FROM tickets ORDER BY ticket_ID DESC LIMIT 1";

if(mysqli_query($conn, $query)){
    echo 'Ticket deleted..';
    }
else{
    echo " Error: ". mysqli_error($conn);
    }
echo json_encode($ticket);  

?>