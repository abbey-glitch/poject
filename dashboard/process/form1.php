

<?php


//uploading of file 

if(isset($_POST['upload'])){

	$allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];

	$image_file = $_FILES['image_upload'];
    $event_data = trim($_POST['editor']);
    $event_head = htmlspecialchars(trim($_POST['head']));

	$image_file_name = $image_file['name'];
	$image_file_type = $image_file['type'];
	$image_file_tmp = $image_file['tmp_name'];
    $id = "asset";

   

    if(empty($event_head)){
		$errors[] = "<div class='alert alert-info'>Please enter the event header</div>";
	}

    if(empty($event_data)){
		$errors[] = "<div class='alert alert-info'>Please enter the event data</div>";
	}

    if(empty($image_file_name)){
		$errors[] = "<div class='alert alert-info'>Please choose an image file</div>";
	}

    if(empty($errors)){

        if(in_array($image_file_type, $allowed_types)){

            if(!is_dir("{$id}")){
                mkdir("{$id}");
            }

            $photo_path = "{$id}/{$image_file_name}";

            move_uploaded_file($image_file_tmp, $photo_path);

            // add this to the database..
            require "function/control.php";

            $feedback = registerEvent($event_head, $event_data, $photo_path);

            echo $feedback;


        } else {
            echo "Your file type is not allowed";
        }
    } else {
        forEach($errors as $error) {
            echo "{$error}<br>";
        }
    }

}

?>
