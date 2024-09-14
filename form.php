<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration Form </title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <section class="registration">
        <h2> REGISTRATION </h2>
        <section class="details-section">
            <form action="enquiry_save.php" class="registration-form" method="post">
                <!-- Personal Details Section -->
                <h4> Personal Details </h4>
                <section class="personal-details">
                    <div class="details">
                        <label for="name">
                            <p>Full Name</p>
                            <input type="text" name="sfullname" id="name" placeholder="Enter your name">
                        </label>
                        <label for="fName">
                            <p> Father Name </p>
                            <input type="text" name="sfathername" id="fName" placeholder="Enter father name">
                        </label>
                        <label for="mName">
                            <p>Mother Name</p>
                            <input type="text" name="smothername" id="mName" placeholder="Enter mother name">
                        </label>
                    </div>

                    <div class="details">
                        <label for="DOB">
                            <p>Date of Birth</p>
                            <input type="date" name="sdateofbirth" id="DOB" placeholder="Enter your DOB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label for="aadharNo">
                            <p>Password</p>
                            <input type="password" name="spassword" id="aadharNo" placeholder="Enter Password">
                        </label>
                        <label for="email">
                            <p>Email</p>
                            <input type="email" name="semail" id="email" placeholder="Enter your email">
                        </label>
                    </div>
                    
                    <div class="details">
                        <label for="ph">
                            <p> Mobile Number</p>
                            <input type="tel" name="smobile" id="ph" placeholder="Enter mobile number">
                        </label>

                        <label for="gender">
                            <p> Gender</p>
                            <input type="text" name="sgender" id="gender" placeholder="Enter your gender">
                        </label>

                        <label for="address">
                            <p> City</p>
                            <input type="text" name="scity" id="address" placeholder="Enter your Address">
                        </label>
                    </div>
                </section>
                <hr>
                </section>
                <button class="submit"> Submit </button>
                <button class="submit text-white" ><a href="admin.php">Back</a> </button>

            </form>
        </section>
    </section>
</body>

</html>