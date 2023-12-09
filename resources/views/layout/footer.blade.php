<center>
    <footer id="site-footer" class="footer-container" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
        <div class="top-footer" style="height: auto; background-color: #181935">
            <div class=" container">
                <a href="https://www.privacypolicyonline.com/live.php?token=bZA39cwOgezk9XD5jDqEz3gQORm4yjW4"
                    style="width: auto;">
                    Terms & Conditions
                </a>
                <p>Copyright @ 2023 Gajah Mada Record. All Right Reserved</p>
            </div>
        </div>
    </footer>
</center>
<a class="scroll-to-top on" href="#" id="scrollToTop" aria-label="Go Top">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
        <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path>
    </svg></a>

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
