

<?php

require "datahome/connect.php";

$sum_query = "SELECT SUM(`image_count`) FROM `image`";

$sum_result = mysqli_query($conn, $sum_query);

if($sum_result) {

    $row_lol = mysqli_fetch_row($sum_result);

    $sum = $row_lol[0];

    if($sum > 0) {
        $event_info = "SELECT * FROM `image` ORDER BY `id` DESC LIMIT 5";

        $result = mysqli_query($conn, $event_info);

        if($result) {

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $id = $row['id'];
                $image_header = $row['image_name'];
                $image_data = $row['image_photo'];

                

                echo"
                    <div class='car'>
                        <img src='dashboard/{$image_data}'>
                        <div class='card__head'>{$image_header}</div>
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