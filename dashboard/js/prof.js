

function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}




// function sendEmail() {
// 	Email.send({
// 	Host: "smtp.gmail.com",
// 	Username : "chrisogili12@gmail.com",
// 	Password : "gle9090#",
// 	To : 'chrisogili12@gmail.com',
// 	From : "chrisogili12@gmail.com",
// 	Subject : "yes it worked",
// 	Body : "yes yes yes it worked",
// 	}).then(
// 		message => alert("mail sent successfully")
// 	);
// }

// sendEmail()



function sendMail() {
    $.ajax({
      type: 'POST',
      url: 'https://elasticemail.com/api/',
      data: {
        'key': '760F9BF4E94BAA9F420B9EE24EE56FE8B9CAA55B14FD93EA647B3F5DC4F733AF488B75E0D59BABD8ACE8615FF90E0780',
        'message': {
          'from_email': 'chrisogili12@gmail.com',
          'to': [
              {
                'email': 'chrisogili12@gmail.com',
                'name': 'RECIPIENT NAME (OPTIONAL)',
                'type': 'chrisogili12@gmail.com'
              }
            ],
          'autotext': 'true',
          'subject': 'YOUR SUBJECT HERE!',
          'html': 'YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!'
        }
      }
     }).done(function(response) {
       console.log(response); // if you're into that sorta thing
     });
}

sendMail()





