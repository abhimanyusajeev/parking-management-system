<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 60%;
        }

        * {
            box-sizing: content-box;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            font-size: 20px;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        h1 {
            padding-left: 40%;
        }

        label {
            font-size: 15px;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        button {
            font-size: 18px;
            font-weight: bold;
            background-color: rgb(10, 119, 13);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        .cancel {
            padding: 14px 20px;
            background-color: #ff3d2f;
            text-decoration: none;
        }
        .cancel a{
            text-decoration: none;
        }

        .formContainer {
            padding: 16px;
        }

        .formContainer p {
            font-size: 28px;
        }

        #message {
            display: none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
    </style>

<body>
    <form action="#" method="POST">
        <div class="formContainer">
            <h1>Sign Up</h1>
            <hr>
            <label for="name">Name</label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="phone">Phone Number</label>
            <input type="text" placeholder="Enter Phone Number" name="phonenumber" id="phone" required>
            <label for="pass">Password</label>
            <input type="password" id="psw" placeholder="Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <label for="repeatPassword">Repeat Password</label>
            <input type="password" placeholder="Repeat Password" name="repeatPassword" required>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px"> Remember me
            </label>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>
            <p>
            <div>
                <button type="button" class="cancel"><a href="login.php">Cancel</a></button>
                <button type="submit" name="btn"  class="signup">Sign Up</button>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>
        </div>
    </form>
    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

      
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }


        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

       
        myInput.onkeyup = function() {
            
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

           
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

           
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

           
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>
    <?php
    if (isset($_POST['btn'])) {
        $conn = mysqli_connect("localhost", "root", "", "parking_manager");
        if (!$conn) {
            die();
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['psw'];
            $sql = "INSERT INTO user(user_name,user_phone,user_email,user_password) VALUES('$name','$phonenumber','$email','$password')";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) {
                die("<script>alert('Something went wrong')</script>");
            } else {
                echo "<script>alert('Account Created')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
            }
        }
    }
    
    ?>
</body>

</html>