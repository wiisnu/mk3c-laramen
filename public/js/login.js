
        const form = document.getElementById("loginForm");
        const username = document.getElementById("username");
        const email = document.getElementById("email");
        const password = document.getElementById("password");

        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevents the default form submission behavior

            if (username.value === "wisnugacor666" && email.value === "wisnuganteng28@gmail.com" && password.value === "12345") {
                console.log("Login successful!");
                window.location.replace = "home"; // Redirect to the new page
            } else {
                console.log("Login failed!");
                alert("Paswword salah lur");
                password.value = ""; // Clear the password field
                email.value = "";    // Clear the email field
                username.value = ""; // Clear the username field
            }
        });
