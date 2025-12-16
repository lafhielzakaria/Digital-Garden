<?php include('includes/header.php'); ?>
<title>Digital Garden - Gestion des Notes</title>
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
                    <i class="fas fa-arrow-left mr-1"></i>Retour
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            <i class="fas fa-sticky-note mr-2 text-yellow-500"></i>Gestion des Notes
        </h1>

        <!-- Filtres -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <form method="GET" class="grid md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Rechercher</label>
                    <input type="text" name="search" placeholder="Titre ou contenu..." 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filtrer par thème</label>
                    <select name="theme" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <option value="">Tous les thèmes</option>
                        <option value="1">Travail</option>
                        <option value="2">Personnel</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filtrer par importance</label>
                    <select name="importance" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <option value="">Toutes</option>
                        <option value="1">1 - Faible</option>
                        <option value="2">2 - Normale</option>
                        <option value="3">3 - Moyenne</option>
                        <option value="4">4 - Élevée</option>
                        <option value="5">5 - Critique</option>
                    </select>
                </div>
                <div class="flex items-end space-x-2">
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition duration-200">
                        <i class="fas fa-search mr-1"></i>Filtrer
                    </button>
                    <button type="reset" class="border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg transition duration-200">
                        <i class="fas fa-times mr-1"></i>Reset
                    </button>
                </div>
            </form>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-plus mr-2"></i>Créer une nouvelle note
                        </h3>
                    </div>
                    <div class="p-6">
                        <form method="POST" class="space-y-4">
                            <div>
                                <label for="theme_id" class="block text-sm font-medium text-gray-700 mb-1">Thème associé</label>
                                <select id="theme_id" name="theme_id" required 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    <option value="">Choisir un thème</option>
                                    <option value="1">Travail</option>
                                    <option value="2">Personnel</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="note_title" class="block text-sm font-medium text-gray-700 mb-1">Titre de la note</label>
                                <input type="text" id="note_title" name="note_title"  
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="note_importance" class="block text-sm font-medium text-gray-700 mb-1">Importance (1-5)</label>
                                <select id="note_importance" name="note_importance"  
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    <option value="1">1 - Faible</option>
                                    <option value="2">2 - Normale</option>
                                    <option value="3">3 - Moyenne</option>
                                    <option value="4">4 - Élevée</option>
                                    <option value="5">5 - Critique</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="note_content" class="block text-sm font-medium text-gray-700 mb-1">Contenu</label>
                                <textarea id="note_content" name="note_content" rows="6" required 
                                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-save mr-2"></i>Ajouter la note
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-list mr-2"></i>Mes notes
                        </h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <!-- Exemple de note -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                            <div class="flex justify-between items-start mb-3">
                                <h4 class="font-semibold text-gray-800">Réunion équipe projet</h4>
                                <div class="flex space-x-1">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="h-2 rounded-full mb-3 importance-4"></div>
                            
                            <div class="flex items-center mb-3">
                                <span class="inline-block px-2 py-1 text-xs text-white rounded" style="background-color: #3b82f6;">Travail</span>
                                <span class="text-sm text-gray-500 ml-2">Importance: 4/5</span>
                            </div>
                            
                            <p class="text-gray-600 text-sm">
                                Points importants à discuter lors de la prochaine réunion d'équipe. Prévoir les objectifs du trimestre...
                            </p>
                        </div>
                        
                        <!-- Exemple de note 2 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200">
                            <div class="flex justify-between items-start mb-3">
                                <h4 class="font-semibold text-gray-800">Liste de courses</h4>
                                <div class="flex space-x-1">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white text-sm px-2 py-1 rounded transition duration-200">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="h-2 rounded-full mb-3 importance-2"></div>
                            
                            <div class="flex items-center mb-3">
                                <span class="inline-block px-2 py-1 text-xs text-white rounded" style="background-color: #10b981;">Personnel</span>
                                <span class="text-sm text-gray-500 ml-2">Importance: 2/5</span>
                            </div>
                            
                            <p class="text-gray-600 text-sm">
                                Lait, pain, œufs, légumes pour la semaine. Ne pas oublier les produits d'entretien...
                            </p>
                        </div>
                        
                        <!-- Message si aucune note -->
                        <!-- 
                        <div class="text-center py-12">
                            <i class="fas fa-sticky-note text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-500 mb-2">Aucune note trouvée</h3>
                            <p class="text-gray-400">Créez votre première note ou ajustez vos filtres</p>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>