


<?php

require "datahome/connect.php";



$sum_query = "SELECT SUM(`event_count`) FROM `event`";

$sum_result = mysqli_query($conn, $sum_query);

if($sum_result) {

    $row = mysqli_fetch_row($sum_result);

    $sum = $row[0];

    if($sum > 0) {
        $firstSum = $sum  - 5;
    $secondSum = $firstSum - 3;

    $event_info = "SELECT * FROM   `event` WHERE `id` BETWEEN '$secondSum' AND '$firstSum'";

    $result = mysqli_query($conn, $event_info);

    if($result) {

        while ($row_limit = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $id = $row_limit['id'];
            $event_header = $row_limit['event_name'];
            $event_data = $row_limit['event_content'];
            $event_image = $row_limit['event_image'];
            // echo"$event_image";

            

            echo"
                <div class='col-sm-4 ok_border'>
                    <img src='dashboard/{$event_image}' alt='' width='100%'>
                    <h3 id='event_text'>$event_header</h3>
                    <a href='read-event.php?id=".base64_encode($id)."'>Read More</a>
                </div>
            ";

        }

        
    } else {

        echo mysqli_error($conn);

    }
    } else {
        echo "<div class='alert alert-info' role='alert'>
        Nothing Thing to Display For now
      </div>";
    }
}



?>