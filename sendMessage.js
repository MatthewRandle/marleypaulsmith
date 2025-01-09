document.getElementById("form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // hide all errors
    document.getElementById("form_error").style.display = "none";
    document.getElementById("form_success").style.display = "none";

    const fullName = document.getElementById("fullName").value;
    const name = document.getElementById("name").value || "No Name";
    const email = document.getElementById("email").value || "No Email";
    const message = document.getElementById("message").value || "No Message";
    const subject = `New message from ${name}, ${email}`;

    // Prepare the data to send
    const data = {
        name: name,
        email: email,
        message: message,
        subject: subject,
        fullName
    };
    
    // Send the data to the server
    fetch('https://marley-email.commenze.workers.dev', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(async response => {
            console.log(response);

            try {
                const json = await response.json();

                console.log(json);
            }
            catch (e) {
                console.error(e);
            }

            if (response.ok) {
                document.getElementById("form_error").style.display = "none";
                document.getElementById("form_success").style.display = "block";
            } else {
                document.getElementById("form_error").style.display = "block";
                document.getElementById("form_success").style.display = "none";
            }

            return false;
        })
        .catch(error => {
            console.error('Error:', error);

            // Handle network errors
            document.getElementById("form_error").style.display = "block";
            document.getElementById("form_success").style.display = "none";

            return false;
        });
});