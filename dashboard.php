<?php
session_start();
?>
<?php include('includes/header.php'); ?>
<title>Digital Garden - Dashboard</title>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-gradient-to-r from-green-600 to-green-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-white text-xl font-bold">
                    <i class="fas fa-seedling mr-2"></i>Digital Garden
                </a>
                <div class="flex items-center space-x-4">
                    <span class="text-white"></span>
                    <a href="includes/logout.php" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-3 py-1 rounded-lg transition duration-200">
                    logout    
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-sm p-8 mb-8 text-center">
            <h1 class="text-4xl font-bold text-green-600 mb-4">
                <i class="fas fa-user-circle mr-2"></i>Welcome <?php echo $_SESSION["userName"];?>
            </h1>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 text-center hover:shadow-md transition duration-200">
                <i class="fas fa-palette text-5xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">My Themes</h3>
                <p class="text-gray-600 mb-4">[X] theme(s) created</p>
                <a href="themes.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 inline-flex items-center">
                    ✔ Manage My Themes
                </a>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center hover:shadow-md transition duration-200">
                <i class="fas fa-sticky-note text-5xl text-yellow-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">My Notes</h3>
                <p class="text-gray-600 mb-4">[X] note(s) created</p>
                <a href="notes.php" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 inline-flex items-center">
                    ✔ Manage My Notes
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm">
            <div class="border-b border-gray-200 px-6 py-4">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle mr-2"></i>Account Information
                </h3>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-gray-600"><strong>Login Date:</strong> 
                        <?php
                    if(array_key_exists('loginTime',$_SESSION) && !empty($_SESSION['loginTime'])) {
                  echo $_SESSION["loginTime"];
                    }                       
                        ?>
                    </div>
                           <div>
                        <p class="text-gray-600"><strong>Sign up Date:</strong> 
                        <?php
                    if(array_key_exists('signUp',$_SESSION) && !empty($_SESSION['signUp'])) {
                  echo $_SESSION["signUp"];
                    }                       
                        ?>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>