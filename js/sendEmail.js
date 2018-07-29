function sendMail(contactForm) {
    emailjs.send("default_service", "template_wmZz7ITK", {
     
     
   "reply_to": contactForm.con_email.value,
   "from_name": contactForm.con_name.value,
   "subject": contactForm.con_phone.value,
   "project_request": contactForm.con_company.value,
   "message": contactForm.con_msg.value,
        
        
    })
    .then(
        function(response) {
            console.log("SUCCESS", response);
        },
        function(error) {
            console.log("FAILED", error);
        }
    );
}
