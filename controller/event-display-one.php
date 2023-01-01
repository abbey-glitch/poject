
<?php

require "datahome/connect.php";

$sum_query = "SELECT SUM(`event_count`) FROM `event`";

$sum_result = mysqli_query($conn, $sum_query);

if($sum_result) {

    $row_lol = mysqli_fetch_row($sum_result);

    $sum = $row_lol[0];

    if($sum >  0) {
        $event_info = "SELECT * FROM `event` ORDER BY `id` DESC LIMIT 3";

        $result = mysqli_query($conn, $event_info);

        if($result) {

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $id = $row['id'];
                $event_header = $row['event_name'];
                $event_data = $row['event_content'];
                $event_image = $row['event_image'];
                

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