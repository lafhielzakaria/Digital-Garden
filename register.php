<?php include('includes/header.php'); ?>
<title>Digital Garden - Inscription</title>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-96">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-green-600">
                <i class="fas fa-seedling mr-2"></i>Digital Garden
            </h2>
            <p class="text-gray-600 mt-2">Créer un nouveau compte</p>
        </div>
        
        <form method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Nom d'utilisateur</label>
                <input type="text" id="username" name="username"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <p class="text-xs text-gray-500 mt-1">Minimum 3 caractères</p>
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                <input ca type="password" id="password" name="password"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <p class="text-xs text-gray-500 mt-1">Minimum 6 caractères</p>
            </div>
            
            <div>
                <label for="confirmpassword" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                <input  type="Password" id="confirmPassword" name="confirmPassword"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>
            
            <div class="space-y-3 pt-4">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    <i class="fas fa-user-plus mr-2"></i>S'inscrire
                </button>
                <a href="index.php" class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-2 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                    <i class="fas fa-arrow-left mr-2"></i>Retour à l'accueil
                </a>
            </div>
        </form>
    </div>
<?php include('includes/footer.php'); ?>