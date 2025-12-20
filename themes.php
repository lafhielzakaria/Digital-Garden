<?php include('includes/header.php'); ?>
<?php include('config/database.php');?>

<?php 
// Fetch themes from database
$themes_query = "SELECT * FROM themes ORDER BY id DESC";
$themes_result = mysqli_query($connection, $themes_query);

$error_message = "";
if($_POST){
    $themeNeme = $_POST["themeNeme"];
    $themeColor = $_POST["themeColor"];
    if($themeColor == "" || $themeNeme == ""){
        $error_message = "All fields are required";
    }
    else{
        $query = "insert into themes (title,color) values('$themeNeme','$themeColor')";
        $response = mysqli_query($connection, $query);
        if($response){
            header("Location: themes.php");
            exit();
        }
    }
}
?>

<title>Digital Garden - Theme Management</title>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-gradient-to-r from-green-600 to-green-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="dashboard.php" class="text-white text-xl font-bold">
                    <i class="fas fa-seedling mr-2"></i>Digital Garden
                </a>
                <a href="dashboard.php" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-3 py-1 rounded-lg transition duration-200">
                    <i class="fas fa-arrow-left mr-1"></i>Back
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            <i class="fas fa-palette mr-2 text-blue-500"></i>Theme Management
        </h1>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-plus mr-2"></i>Create a new theme
                        </h3>
                    </div>
                    <div class="p-6">
                        <form method="POST" class="space-y-4">
                            <div>
                                <label for="theme_name" class="block text-sm font-medium text-gray-700 mb-1">Theme name</label>
                                <input type="text" id="theme_name" name="themeNeme" required 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="theme_color" class="block text-sm font-medium text-gray-700 mb-1">Theme color</label>
                                <input type="color" id="theme_color" name="themeColor" value="" 
                                       class="w-full h-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-save mr-2"></i>Create theme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-list mr-2"></i>My themes
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <?php if(mysqli_num_rows($themes_result) > 0): ?>
                                <?php while($theme = mysqli_fetch_assoc($themes_result)): ?>
                                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                                        <div class="flex items-center mb-3">
                                            <div class="w-5 h-5 rounded-full mr-3" style="background-color: <?php echo $theme['color']; ?>;"></div>
                                            <h4 class="font-semibold text-gray-800"><?php echo htmlspecialchars($theme['title']); ?></h4>
                                        </div>                                
                                        <div class="flex space-x-2">
                                            <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="flex-1 bg-red-500 hover:bg-red-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <div class="col-span-2 text-center py-8">
                                    <i class="fas fa-palette fa-3x text-gray-300 mb-4"></i>
                                    <h3 class="text-xl font-semibold text-gray-500 mb-2">No themes created yet</h3>
                                    <p class="text-gray-400">Create your first theme to get started</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>