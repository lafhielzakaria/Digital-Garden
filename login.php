<?php include('includes/header.php'); ?>
<?php include('config/database.php');?>
<?php
session_start();
?>
<?php 
$error_message = "";
if($_POST){
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    if($userName == "" || $password == ""){
        $error_message = "All fields are required";
    }
    else{
        $query = "select * from users where userName = '$userName'";
        $response = mysqli_query($connection, $query);
        $row = mysqli_num_rows($response);
        // if($row){
        //     $user = mysqli_fetch_assoc($response);
        //     if(password_verify($password, $user["userpassword"])){
      
        //     }else{
        //         $error_message = "Invalid username or password";
        //         // var_dump($chekePassword);
        //     }
        // }else{
        //     $error_message = "Invalid username or password";
        // }
        if($row){
             $_SESSION["user_id"] = $row["id"];
                $_SESSION["userName"] = $userName;
                $_SESSION["loginTime"] = date('Y-m-d H:i:s');
                header("location: dashboard.php");
                exit();
        }else{
            $error_message = "Invalid username or password";
        }
    }
}
?>

<title>Digital Garden - Login</title>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-96">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-green-600">
                <i class="fas fa-seedling mr-2"></i>Digital Garden
            </h2>
            <p class="text-gray-600 mt-2">Connect to your garden</p>
        </div>
        
        <form method="POST" id= "loginForm" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="userName"  
                       class="loginInputs w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    <p></p>
                    </div>
                
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password"  
                       class="loginInputs w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                     <p></p>
                    </div>
          
            <div class="space-y-3 pt-4">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                </button>
                <?php if(!empty($error_message)): ?>
                    <div class="text-red-500 text-sm text-center"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <a href="index.php" class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-2 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Home
                </a>
            </div>
        </form> 
    </div>
        <script src="public/js/login.js"></script>
<?php include('includes/footer.php'); ?>