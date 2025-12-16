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
                    <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-3 py-1 rounded-lg transition duration-200">
                        <i class="fas fa-sign-out-alt mr-1"></i>Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-sm p-8 mb-8 text-center">
            <h1 class="text-4xl font-bold text-green-600 mb-4">
                <i class="fas fa-user-circle mr-2"></i>
            </h1>
            <p class="text-xl text-gray-600"></p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 text-center hover:shadow-md transition duration-200">
                <i class="fas fa-palette text-5xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Mes Thèmes</h3>
                <p class="text-gray-600 mb-4">[X] thème(s) créé(s)</p>
                <a href="themes.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 inline-flex items-center">
                    <i class="fas fa-cog mr-2"></i>Gérer mes Thèmes
                </a>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center hover:shadow-md transition duration-200">
                <i class="fas fa-sticky-note text-5xl text-yellow-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Mes Notes</h3>
                <p class="text-gray-600 mb-4">[X] note(s) créée(s)</p>
                <a href="notes.php" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 inline-flex items-center">
                    <i class="fas fa-edit mr-2"></i>Gérer mes Notes
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm">
            <div class="border-b border-gray-200 px-6 py-4">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle mr-2"></i>Informations du compte
                </h3>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-gray-600"><strong>Nom d'utilisateur:</strong></p>
                    </div>
                    <div>
                        <p class="text-gray-600"><strong>ID utilisateur:</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>