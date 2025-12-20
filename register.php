<?php include('includes/header.php'); ?>
<?php include('config/database.php');?>
<?php
session_start();
?>
<?php
   if($_POST){
    try{
    $userName = $_POST["userName"];
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT) ;
    $query = "insert into users (username,userpassword) values('$userName','$password')";
    $result = mysqli_query($connection,$query);
    $_SESSION["userName"] = "$userName";
    $_SESSION["signUp"] =  date("Y-m-d H:i:s");
    header("Location: dashboard.php");
    exit();
    }
   catch(\Throwable $th){
   echo '<script> alert("this username is already exist!")
   </script>';
   }
   }  
   
 ?>
<title>Digital Garden - Register</title>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-96">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-green-600">
                <i class="fas fa-seedling mr-2"></i>Digital Garden
            </h2>
            <p class="text-gray-600 mt-2">Create a new account</p>
        </div>
        <form id = "sigupForm" method="POST" action = "register.php" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input id = "userName" class = "signupInputs w-full px-3 py-2 border border-gray-300 rounded-lg" type="text" name="userName">
                <p id = "usernameError"></p>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input  class = "signupInputs w-full px-3 py-2 border border-gray-300 rounded-lg" type="password" id="password" name="password">
                <p></p>
            </div>
            <div>
                <label for="confirmpassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input class = "w-full px-3 py-2 border border-gray-300 rounded-lg" type="Password" id="confirmPassword" name="password">
                    <p></p>
                    </div>
            <div class="space-y-3 pt-4">
                <button name = "submitBtn" type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    <i class="fas fa-user-plus mr-2"></i>Sign Up
                </button>
                <a href="index.php" class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-2 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Home
                </a>
            </div>
        </form>
        <script src="public/js/register.js"></script>
    </div>
<?php include('includes/footer.php'); ?>