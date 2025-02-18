<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #2e572e, #5a9a5a); /* Green shades */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: #fff;
        }

        /* Header */
        header {
            position: absolute;
            top: 0;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/1600x400/?farm,field');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 20px 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0.5rem 0;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-size: 1.2rem;
            margin: 0.5rem 0;
            color: #e0f7fa;
            font-style: italic;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        /* Container */
        .container {
            background: #ffffff;
            color: #333;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 2rem;
            text-align: center;
            margin-top: 10rem; /* Space for the header */
            transition: all 0.4s ease-in-out;
        }

        .container.hidden {
            transform: scale(0.9);
            opacity: 0;
        }

        /* Form Elements */
        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #2e572e;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #5a9a5a; /* Green Icon */
        }

        input {
            width: 100%;
            padding: 0.8rem 2.5rem;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #5a9a5a;
            outline: none;
            box-shadow: 0 0 5px rgba(90, 154, 90, 0.5); /* Green shadow */
        }

        label {
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9rem;
            color: #aaa;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        input:focus ~ label,
        input:not(:placeholder-shown) ~ label {
            top: -10px;
            left: 30px;
            font-size: 0.8rem;
            color: #5a9a5a;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            background: #5a9a5a; /* Green Button */
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .btn:hover {
            background: #2e572e;
            transform: translateY(-3px);
        }

        /* Links */
        .links {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .links button {
            background: none;
            color: #5a9a5a;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: underline;
        }

        .links button:hover {
            color: #2e572e;
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <header>
        <i class="fas fa-tractor icon"></i>
        <h1>Welcome to Farmer Login</h1>
        <p>Empowering Farmers, Connecting Communities</p>
    </header>

    <div class="container fade-in" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
            </div>
            <button class="btn" type="submit" name="signIn">Sign In</button>
        </form>
        <div class="links">
            <p>Don't have an account?</p>
            <button onclick="toggleForms()">Sign Up</button>
        </div>
    </div>

    <div class="container hidden" id="signUp">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder=" " required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder=" " required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
            </div>
            <button class="btn" type="submit" name="signUp">Sign Up</button>
        </form>
        <div class="links">
            <p>Already have an account?</p>
            <button onclick="toggleForms()">Sign In</button>
        </div>
    </div>

    <script>
        function toggleForms() {
            const signIn = document.getElementById('signIn');
            const signUp = document.getElementById('signUp');

            // Toggle the visibility of the forms
            if (signIn.classList.contains('hidden')) {
                signIn.classList.remove('hidden');
                signIn.classList.add('fade-in');
                signUp.classList.add('hidden');
            } else {
                signUp.classList.remove('hidden');
                signUp.classList.add('fade-in');
                signIn.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
