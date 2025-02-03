<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('styles/login.css') ?>">

    <!-- STYLES -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Patrick+Hand&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>

    <section class="login-page-container d-flex flex-row justify-content-center align-items-center">
        <div class="login-container">

            <div class="logo-container d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo base_url('images/reliance-logo.png') ?>" alt="reliance logo image">
                <h1>RELIANCE ENTRACE TEST</h1>
                <h1>RET - 2025</h1>
            </div>

            <div class="login-form-container">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="mobile-number" class="form-label">Mobile Number <span class="compulsory-field">*</span></label>
                        <input type="tel" class="form-control" id="mobile-number" placeholder="Enter mobile number">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="compulsory-field">*</span></label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <div class="forgot-password d-flex flex-row justify-content-end">
                        <p>Forgot Password?</p>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>

                    <div class="signup-option d-flex flex-row justify-content-center align-items-center">
                        <p>Don't have an account? <span> <a href="">Sign Up</a></span></p>
                    </div>

                </form>

                <div class="copyright-container d-flex flex-row justify-content-center align-items-center">
                    <img src="<?php echo base_url('images/edofox-logo.png') ?>" alt="edofox logo image">
                    <p>powered by EDOFOX</p>
                </div>
            </div>
        </div>
    </section>


</body>

<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
    // login form values validation

    document.querySelector('form').addEventListener("submit", function(event) {
        event.preventDefault();

        isValid = true;
        errorMsg = "";

        mobileNumber = document.getElementById('mobile-number').value.trim();
        password = document.getElementById('password').value.trim();

        if (mobileNumber === "" || !/^\d{10}$/.test(mobileNumber)) {
            errorMsg += "Enter valid mobile number \n";
            isValid = false;
        }

        if (password === "") {
            errorMsg += "Enter valid password!";
            isValid = false;
        }

        // submit if values entered are valid

        if (!isValid) {
            alert(errorMsg);
        } else {
            alert("You have logged in successfully!")
            event.target.submit();
        }

    })
</script>

</html>