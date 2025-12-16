<?php include('includes/header.php'); ?>
<title>Digital Garden - Connexion</title>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-96">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-green-600">
                <i class="fas fa-seedling mr-2"></i>Digital Garden
            </h2>
            <p class="text-gray-600 mt-2">Connectez-vous à votre jardin</p>
        </div>
        
        <form  id= "loginForm" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Nom d'utilisateur</label>
                <input type="text" id="username" name="username"  
                       class="loginInputs w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    <p></p>
                    </div>
                
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                <input id="password" name="password"  
                       class="loginInputs w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
            
            <div class="space-y-3 pt-4">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    <i class="fas fa-sign-in-alt mr-2"></i>Se connecter
                </button>
                <a href="index.php" class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-2 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                    <i class="fas fa-arrow-left mr-2"></i>Retour à l'accueil
                </a>
            </div>
        </form> 
    </div>
        <script src="public/js/login.js"></script>
<?php include('includes/footer.php'); ?>