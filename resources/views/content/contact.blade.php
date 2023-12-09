@include('bootsv5.contactcss')
<div class="custom-container" id="contact" style="padding: 50px;">
    <div class="custom-container-012">
        <h1 style="font-weight: bold; line-height: 20px;">Say hello to us!</h1>
        <a href="" style="color: blueviolet;">Let's talk business Or just have a cofffe</a>
        <br>
        <a href="" style="color: blueviolet;">we would love to hear from you!</a>
    </div>
    <br>
    <br>
    <div class="addres1">
        <a href="" style="color: blueviolet;">ADDRESS</a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat fugiat molestiae minus quis accusamus soluta voluptatibus modi facilis aspernatur adipisci beatae, voluptas quo nostrum perferendis quam dicta nesciunt fugit molestias!</p>
    </div>
    <div class="phone1">
        <a href="" style="color: blueviolet;">PHONE</a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat fugiat molestiae minus quis accusamus soluta voluptatibus modi facilis aspernatur adipisci beatae, voluptas quo nostrum perferendis quam dicta nesciunt fugit molestias!</p>
    </div>
    <div class="email1">
        <a href="" style="color: blueviolet;">E-MAIL</a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat fugiat molestiae minus quis accusamus soluta voluptatibus modi facilis aspernatur adipisci beatae, voluptas quo nostrum perferendis quam dicta nesciunt fugit molestias!</p>    
    </div>
        <div class="contactaef">
            <button style=""> Send Massage </button>
        </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (event) {
        let valid = true;

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        const nameError = document.getElementById("nameError");
        const emailError = document.getElementById("emailError");
        const messageError = document.getElementById("messageError");

        nameError.textContent = "";
        emailError.textContent = "";
        messageError.textContent = "";

        if (name === "") {
            valid = false;
            nameError.textContent = "Name is required";
        }

        if (email === "") {
            valid = false;
            emailError.textContent = "Email is required";
        } else if (!isValidEmail(email)) {
            valid = false;
            emailError.textContent = "Invalid email address";
        }

        if (message === "") {
            valid = false;
            messageError.textContent = "Message is required";
        }

        if (!valid) {
            event.preventDefault();
        }
    });

    function isValidEmail(email) {
        // Simple email validation, you may need a more robust solution
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});

</script>