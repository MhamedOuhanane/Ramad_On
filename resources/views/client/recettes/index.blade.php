<x-master >
    <div class="bg-gradient-to-b from-purple-800 to-purple-950 min-h-screen relative overflow-hidden">
        <!-- Éléments décoratifs (étoiles) -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-200 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-yellow-200 rounded-full animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-yellow-200 rounded-full animate-pulse delay-700"></div>
            <div class="absolute top-20 right-20 w-16 h-16 bg-yellow-200 rounded-full opacity-90"></div>
        </div>
    
        <!-- Contenu principal -->
        <div class="relative z-10">
            <!-- En-tête de la page -->
            <div class="pt-24 pb-12">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-12">
                        <h1 class="text-5xl font-bold mb-6">Recettes pour le Ramadan</h1>
                        <p class="text-purple-200 max-w-2xl mx-auto">
                            Découvrez une sélection de délicieuses recettes pour le Suhoor et l'Iftar
                        </p>
                    </div>
    
                    <!-- Barre de recherche et filtres -->
                    <form class="flex flex-col md:flex-row gap-4 mb-8">
                        @csrf
                        <div class="relative flex-1">
                            <input 
                                type="text" 
                                id="searchInput"
                                placeholder="Rechercher une recette..." 
                                class="w-full pl-10 pr-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            >
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                <i class="fas fa-search text-purple-400"></i>
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <select 
                                id="categoryFilter"
                                name="category"
                                class="px-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            >
                                <option value="">Toutes les catégories</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
    
                    <!-- Grille des recettes -->
                    <div id="recipesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exemple de carte de recette -->
                        <div class="bg-purple-900 bg-opacity-90 rounded-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-2 backdrop-blur">
                            <div class="relative h-48">
                                <img src="/api/placeholder/400/320" alt="Recette" class="w-full h-full object-cover" />
                                <div class="absolute top-2 right-2">
                                    <span class="bg-yellow-400 text-purple-900 px-3 py-1 rounded-full text-sm font-bold">
                                        Iftar
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Harira Marocaine</h3>
                                <p class="text-purple-200 mb-4">Une délicieuse soupe traditionnelle pour l'iftar...</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-yellow-400">Soupes</span>
                                    <div class="flex items-center text-purple-200">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>45 min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Pagination -->
                    <div class="flex justify-center mt-12 space-x-2">
                        <button id="prevPage" class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div id="pageNumbers" class="flex space-x-2">
                            <!-- Les numéros de page seront injectés ici -->
                            <button class="px-4 py-2 bg-yellow-400 text-purple-900 rounded-lg font-bold">1</button>
                            <button class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">2</button>
                            <button class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">3</button>
                        </div>
                        <button id="nextPage" class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

            grid.innerHTML = recipesToShow.map(recipe => `
                <div class="bg-purple-800 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="${recipe.image}" alt="${recipe.title}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">${recipe.title}</h3>
                            <span class="bg-yellow-400 text-purple-900 px-2 py-1 rounded-full text-sm font-bold">
                                ${recipe.category}
                            </span>
                        </div>
                        <p class="text-purple-200 mb-4">${recipe.description}</p>
                        <div class="flex justify-between text-sm text-purple-200">
                            <span><i class="far fa-clock mr-2"></i>${recipe.time}</span>
                            <span><i class="fas fa-signal mr-2"></i>${recipe.difficulty}</span>
                        </div>
                    </div>
                </div>
            `).join('');
    </script>
</x-master>