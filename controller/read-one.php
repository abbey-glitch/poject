


 <?php

require "datahome/connect.php";

$id_code = $_GET['id'];

$id = base64_decode($id_code);

$event = "SELECT * FROM `event` WHERE `id` = $id";

$rel_event = mysqli_query($conn, $event);

if($rel_event) {

    if (mysqli_num_rows($rel_event) == 1) {

        $row = mysqli_fetch_array($rel_event, MYSQLI_ASSOC);

        $event_image = $row['event_image'];
        $event_name = $row['event_name'];
        $event_content = $row['event_content'];

        echo "
        <div class='col-sm-6'>
        <img src='dashboard/{$event_image}' alt='' width='100%' height='400px'>
        </div>
        <div class='col-sm-6'>
        <h3>$event_name</h3>

        <p>$event_content</p>
        </div>
        ";

    }

}
        

?>
