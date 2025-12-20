
<?php 
include('includes/header.php'); 
?>
<?php
include("config/database.php");
?>
<title>Digital Garden - Home</title>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="text-center">
        <div class="mb-12">
            <h1 class="text-6xl font-bold text-green-600 mb-4">
                <i class="fas fa-seedling mr-4"></i>Digital Garden
            </h1>
            <p class="text-xl text-gray-600 max-w-md mx-auto">Cultivate your ideas and organize your knowledge in your personal digital garden</p>
        </div>
        
        <div class="space-y-4 w-80 mx-auto">
            <a href="register.php" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                <i class="fas fa-user-plus mr-2"></i>Sign Up
            </a>
            <a href="login.php" class="w-full border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                <i class="fas fa-sign-in-alt mr-2"></i>Sign In
            </a>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
