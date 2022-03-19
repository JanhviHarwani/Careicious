function submitForm(e){
    

    let name = document.querySelector(".name").value;
    let email = document.querySelector(".email").value;
    let message = document.querySelector(".message").value;

    sendEmail(name, email, message);
}

function sendEmail(name, email, message){
    email.send({
        Host : "smtp.gmail.com",
        Username : "parthns1820@gmail.com",
        Password : "@tonystark12@",
        To : 'pranavs1820@gmail.com',
        From : `${email}`,
        Subject : `${name} sent you a message`,
        Body : `${message}`
    }).then(
      message => alert("The mail has been successfully sent.")
    );
}