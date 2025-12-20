<?php include('includes/header.php'); ?>
<?php include('config/database.php');?>

<?php 
// Fetch notes with themes from database
$notes_query = "SELECT n.*, t.title as theme_name, t.color as theme_color FROM notes n JOIN themes t ON n.themeId = t.id ORDER BY n.id DESC";
$notes_result = mysqli_query($connection, $notes_query);

// Fetch themes for dropdown
$themes_query = "SELECT * FROM themes ORDER BY title";
$themes_result = mysqli_query($connection, $themes_query);

$error_message = "";
if($_POST){
    $noteTitle = $_POST["noteTitle"];
    $noteContent = $_POST["noteContent"];
    $themeId = $_POST["themeId"];
    $important = $_POST["important"];
    
    if($noteTitle == "" || $noteContent == "" || $themeId == "" || $important == ""){
        $error_message = "All fields are required";
    }
    else{
        $query = "insert into notes (title, content, themeId, important) values('$noteTitle','$noteContent','$themeId','$important')";
        $response = mysqli_query($connection, $query);
        if($response){
            header("Location: notes.php");
            exit();
        }
    }
}
?>

<title>Digital Garden - Notes Management</title>
<style>
    .importance-1 { background: linear-gradient(90deg, #10b981 0%, #10b981 20%, #e5e7eb 20%); }
    .importance-2 { background: linear-gradient(90deg, #8b5cf6 0%, #8b5cf6 40%, #e5e7eb 40%); }
    .importance-3 { background: linear-gradient(90deg, #f59e0b 0%, #f59e0b 60%, #e5e7eb 60%); }
    .importance-4 { background: linear-gradient(90deg, #ef4444 0%, #ef4444 80%, #e5e7eb 80%); }
    .importance-5 { background: linear-gradient(90deg, #7f1d1d 0%, #7f1d1d 100%); }
</style>
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
            <i class="fas fa-sticky-note mr-2 text-yellow-500"></i>Notes Management
        </h1>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-plus mr-2"></i>Create a new note
                        </h3>
                    </div>
                    <div class="p-6">
                        <form method="POST" class="space-y-4">
                            <div>
                                <label for="note_title" class="block text-sm font-medium text-gray-700 mb-1">Note title</label>
                                <input type="text" id="note_title" name="noteTitle" required 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="theme_id" class="block text-sm font-medium text-gray-700 mb-1">Theme</label>
                                <select id="theme_id" name="themeId" required 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    <option value="">Choose a theme</option>
                                    <?php while($theme = mysqli_fetch_assoc($themes_result)): ?>
                                        <option value="<?php echo $theme['id']; ?>"><?php echo htmlspecialchars($theme['title']); ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            
                            <div>
                                <label for="important" class="block text-sm font-medium text-gray-700 mb-1">Importance (1-5)</label>
                                <select id="important" name="important" required 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    <option value="1">1 - Low</option>
                                    <option value="2">2 - Normal</option>
                                    <option value="3">3 - Medium</option>
                                    <option value="4">4 - High</option>
                                    <option value="5">5 - Critical</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="note_content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                                <textarea id="note_content" name="noteContent" rows="4" required 
                                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-save mr-2"></i>Create note
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-list mr-2"></i>My notes
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <?php if(mysqli_num_rows($notes_result) > 0): ?>
                                <?php while($note = mysqli_fetch_assoc($notes_result)): ?>
                                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-gray-800"><?php echo htmlspecialchars($note['title']); ?></h4>
                                            <div class="flex space-x-1">
                                                <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="bg-red-500 hover:bg-red-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center mb-3">
                                            <span class="inline-block px-2 py-1 text-xs text-white rounded" style="background-color: <?php echo $note['theme_color']; ?>;">
                                                <?php echo htmlspecialchars($note['theme_name']); ?>
                                            </span>
                                            <span class="text-sm text-gray-500 ml-2">Importance: <?php echo $note['important']; ?>/5</span>
                                        </div>
                                        
                                        <p class="text-gray-600 text-sm">
                                            <?php echo nl2br(htmlspecialchars(substr($note['content'], 0, 150))); ?>
                                            <?php if(strlen($note['content']) > 150): ?>...<?php endif; ?>
                                        </p>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <div class="text-center py-8">
                                    <i class="fas fa-sticky-note fa-3x text-gray-300 mb-4"></i>
                                    <h3 class="text-xl font-semibold text-gray-500 mb-2">No notes created yet</h3>
                                    <p class="text-gray-400">Create your first note to get started</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>