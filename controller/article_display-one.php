

<?php

require "datahome/connect.php";

$sum_query = "SELECT SUM(`article_count`) FROM `article`";

$sum_result = mysqli_query($conn, $sum_query);

if($sum_result) {

    $row_lol = mysqli_fetch_row($sum_result);

    $sum = $row_lol[0];

    if($sum > 0) {
        $event_info = "SELECT * FROM `article` ORDER BY `id` DESC LIMIT 3";

        $result = mysqli_query($conn, $event_info);

        if($result) {

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $id = $row['id'];
                $article_name = $row['article_name'];
                $article_content = $row['article_content'];
                $article_image = $row['article_image'];

                

                echo"
                    <div class='col-sm-4'>
                        <div class='my_card'>
                            <img src='img/home1.jpg' alt='' width='100%'>
                            <h3>{$article_name}</h3>

                            <a href='read-article.php?id=".base64_encode($id)."'>Read More</a>
                        </div>
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