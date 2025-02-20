<x-master >
    <!-- Page des témoignages -->
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
                        <h1 class="text-5xl font-bold mb-6">Témoignages du Ramadan</h1>
                        <p class="text-purple-200 max-w-2xl mx-auto">
                            Partagez vos expériences, vos moments de spiritualité et vos réflexions sur ce mois sacré avec notre communauté.
                        </p>
                    </div>

                    <!-- Bouton pour partager un témoignage -->
                    <div class="text-center mb-12">
                        <button 
                            onclick="openShareForm()"
                            class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-300 transition-colors duration-300"
                        >
                            <i class="fas fa-plus mr-2"></i>Partager mon témoignage
                        </button>
                    </div>

                    <!-- Filtres et recherche -->
                    <form action="{{ route('temoignages.search') }}" method="POST" class="flex flex-col md:flex-row gap-4 mb-8">
                        @csrf
                        <div class="relative flex-1">
                            <input 
                                type="text" 
                                id="searchInput"
                                value="{{ $searchTerm }}"
                                name="SearchTemoi"
                                placeholder="Rechercher dans les témoignages..." 
                                class="w-full pl-10 pr-4 py-3 bg-purple-900 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            >
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                <i class="fas fa-search text-purple-400"></i>
                            </span>
                        </div>
                    </form>

                    <!-- Grille des témoignages -->
                    <div id="testimonialsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exemple de carte de témoignage -->
                        @foreach ($temoignages as $temoig)
                            <div class="bg-purple-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <img src="{{ asset('storage/' . $temoig->photo) }}" alt="" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <h3 class="text-xl font-bold">{{ $temoig->titre }}</h3>
                                    </div>
                                    <p class="text-purple-200 mb-4">{{ Str::limit($temoig->description, 40, '...') }}</p>
                                    <div class="flex justify-between items-center text-sm text-purple-200">
                                        <div class="flex items-center">
                                            <div class="h-12 w-12 mr-4 rounded-full bg-yellow-400 flex items-center justify-center">
                                                <i class="fas fa-user text-purple-900"></i>
                                            </div>
                                            <div>
                                                <p>{{ $temoig->user->first_name . ' ' .  $temoig->user->last_name}}</p>
                                                <p>{{ $temoig->created_at }}</p>
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <button class="hover:text-yellow-400 transition-colors duration-300">
                                                <i class="far fa-comment mr-1"></i>{{ $temoig->commentaire_count }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <a href="{{ route('temoignages.show', ['id' => $temoig->id]) }}">
                                            <button class="hover:text-yellow-400 transition-colors duration-300">
                                                <i class="fas fa-info-circle mr-1"></i>Détail →
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-12 space-x-2 ">
                        {{ $temoignages->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de partage de témoignage -->
        <div id="shareModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
            <div class="bg-purple-900 bg-opacity-95 backdrop-blur rounded-lg p-8 max-w-2xl w-full mx-4">
                <h2 class="text-2xl font-bold mb-6">Partager mon témoignage</h2>
                <form id="testimonialForm" action="{{ route('temoignages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-2">Titre</label>
                        <input 
                            type="text" 
                            required
                            name="titre"
                            class="w-full pl-4 pr-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            placeholder="Donnez un titre à votre témoignage"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Votre témoignage</label>
                        <textarea 
                            required
                            name="description"
                            rows="2"
                            class="w-full px-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            placeholder="Partagez votre expérience..."
                        ></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Image (optionnel)</label>
                        <input 
                            type="file" 
                            accept="image/*"
                            name="image"
                            class="w-full text-sm text-purple-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-800 file:text-purple-200 hover:file:bg-purple-700 transition-all duration-300"
                        >
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button 
                            type="button"
                            onclick="closeShareForm()"
                            class="px-6 py-2 rounded-lg border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-purple-900 transition-all duration-300"
                        >
                            Annuler
                        </button>
                        <button 
                            type="submit"
                            class="px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition-colors duration-300"
                        >
                            Publier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Gestionnaires du modal
        function openShareForm() {
            document.getElementById('shareModal').classList.remove('hidden');
        }

        function closeShareForm() {
            document.getElementById('shareModal').classList.add('hidden');
        }
    </script>
</x-master>