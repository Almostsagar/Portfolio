const form = document.querySelector("form"),
    statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); // preventing form from submitting

    statusTxt.style.display = "block";
    statusTxt.style.color = "#0D6EFD";

    let xhr = new XMLHttpRequest(); // creating xml object 
    xhr.open("POST", "message.php", true);  // sending post reuesT to message.php file
    xhr.onload = () => {
        // once ajax loaded
        if (xhr.readyState == 4 && xhr.status == 200) {
            // if ajax response status is 200 & ready status is 4 means there is no error and we can proceed
            let response = xhr.response; // storing ajax res in a res variable
            // console.log(response);
            if (response.indexOf("Email and Message field is required!") != -1 || response.indexOf("Enter a Valid email address!") || response.indexOf("Sorry, failed to send your message!")) {
                statusTxt.style.color = "red";
            } else {
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(form); //creating new Formdata obj. This obj will be used for sending form data.
    xhr.send(formData); // sending form data
}