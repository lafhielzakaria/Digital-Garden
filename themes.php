<?php include('includes/header.php'); ?>
<title>Digital Garden - Gestion des Thèmes</title>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-gradient-to-r from-green-600 to-green-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="dashboard.php" class="text-white text-xl font-bold">
                    <i class="fas fa-seedling mr-2"></i>Digital Garden
                </a>
                <a href="dashboard.php" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-3 py-1 rounded-lg transition duration-200">
                    <i class="fas fa-arrow-left mr-1"></i>Retour
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            <i class="fas fa-palette mr-2 text-blue-500"></i>Gestion des Thèmes
        </h1>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-plus mr-2"></i>Créer un nouveau thème
                        </h3>
                    </div>
                    <div class="p-6">
                        <form method="POST" class="space-y-4">
                            <div>
                                <label for="theme_name" class="block text-sm font-medium text-gray-700 mb-1">Nom du thème</label>
                                <input type="text" id="theme_name" name="theme_name" required 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="theme_color" class="block text-sm font-medium text-gray-700 mb-1">Couleur du thème</label>
                                <input type="color" id="theme_color" name="theme_color" value="#3b82f6" 
                                       class="w-full h-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <label for="theme_tags" class="block text-sm font-medium text-gray-700 mb-1">Tags (optionnel)</label>
                                <input type="text" id="theme_tags" name="theme_tags" placeholder="Séparés par des virgules" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1">Exemple: travail, personnel, études</p>
                            </div>
                            
                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-save mr-2"></i>Créer le thème
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-list mr-2"></i>Mes thèmes
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <!-- Exemple de thème -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-5 h-5 rounded-full mr-3" style="background-color: #3b82f6;"></div>
                                    <h4 class="font-semibold text-gray-800">Travail</h4>
                                </div>
                                
                                <div class="mb-3">
                                    <span class="inline-block bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded mr-1">professionnel</span>
                                    <span class="inline-block bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">bureau</span>
                                </div>
                                
                                <p class="text-sm text-gray-600 mb-3">
                                    <i class="fas fa-sticky-note mr-1"></i>5 note(s)
                                </p>
                                
                                <div class="flex space-x-2">
                                    <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flex-1 bg-red-500 hover:bg-red-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Exemple de thème 2 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-5 h-5 rounded-full mr-3" style="background-color: #10b981;"></div>
                                    <h4 class="font-semibold text-gray-800">Personnel</h4>
                                </div>
                                
                                <div class="mb-3">
                                    <span class="inline-block bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">vie privée</span>
                                </div>
                                
                                <p class="text-sm text-gray-600 mb-3">
                                    <i class="fas fa-sticky-note mr-1"></i>3 note(s)
                                </p>
                                
                                <div class="flex space-x-2">
                                    <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flex-1 bg-red-500 hover:bg-red-600 text-white text-sm py-1 px-3 rounded transition duration-200">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>