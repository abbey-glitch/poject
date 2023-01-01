


document.getElementsByTagName("button")[0].addEventListener("click", function() {
    
    let input1 = document.getElementsByTagName("input")[0].value.trim();
    let input2 = document.getElementsByTagName("input")[1].value.trim();

    let error = []

    if(input1.length == 0) {
        document.getElementById("err1").innerHTML = "Email is empty";
        document.getElementById("err1").style.color = "red";
        error.push("err1");
    }

    if(input2.length == 0) {
        document.getElementById("err2").innerHTML = "Password is empty";
        document.getElementById("err2").style.color = "red";
        error.push("err1")
    }

    if(error.length == 1 || error.length == 2 ) {
        // do something
    } else {

        // ajax 
        $.ajax({
            method: "POST",
            url: "process/forms.php",
            data: {
                "email": input1,
                "password": input2
            },
            success:function(data) {


                if(data.trim() == "Yes") {

                    window.location.href = "prof.php";

                }

                if(data.trim() == "No") {

                    alert("Incorrect Details");

                }
            }
        })

    }



})