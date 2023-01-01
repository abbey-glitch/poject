


 <?php

require "datahome/connect.php";

$id_code = $_GET['id'];

$id = base64_decode($id_code);

$event = "SELECT * FROM `article` WHERE `id` = $id";

$rel_event = mysqli_query($conn, $event);

if($rel_event) {

    if (mysqli_num_rows($rel_event) == 1) {

        $row = mysqli_fetch_array($rel_event, MYSQLI_ASSOC);

        $article_image = $row['article_image'];
        $article_content = $row['article_content'];
        $article_name = $row['article_name'];

        echo "
        <div class='col-sm-6'>
        <img src='img/home1.jpg' alt='' width='100%' height='400px'>
        </div>
        <div class='col-sm-6'>
        <h3>$article_name</h3>

        <p>$article_content</p>

        <div style='
            border: 1px solid red;
            text-align: center;
            width: 50%;
            margin: 60px auto;
            padding-top: 1em;
            padding-bottom: 1em;
            border-radius: 5px;
            background-color: #ff4800;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
        '>
            <a style='
                color: white;
                text-decoration: none;
            ' href='dashboard/{$article_image}' target='_blank'>Download Now</a>
        </div>
        </div>
        ";

    }

}
        

?>





