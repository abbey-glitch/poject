

<?php


require "datahome/connect.php";


$sum_query = "SELECT SUM(`image_count`) FROM `image`";

$sum_result = mysqli_query($conn, $sum_query);

if($sum_result) {

    $row = mysqli_fetch_row($sum_result);

    $sum = $row[0];

    if($sum > 14){

        $firstSum = $sum  - 5;
        $secondSum = $firstSum - 4;

        $event_info = "SELECT * FROM   `image` WHERE `id` BETWEEN '$secondSum' AND '$firstSum'";

        $result = mysqli_query($conn, $event_info);

        if($result) {

            while ($row_limit = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $id = $row_limit['id'];
                $image_header = $row_limit['image_name'];
                $image_data = $row_limit['image_photo'];

                

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