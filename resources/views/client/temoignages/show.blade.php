<x-master >
    <!-- Contenu principal -->
    <div class="container mx-auto pt-24 pb-12">
        <div class="bg-purple-800 rounded-lg shadow-xl overflow-hidden text-white">
            <!-- En-tête de l'article -->
            <div class="p-6 border-b border-purple-700">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 rounded-full bg-yellow-400 flex items-center justify-center">
                        <i class="fas fa-user text-purple-900"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-400">{{ $temoignage->user->first_name . ' ' .  $temoignage->user->last_name}}</h3>
                        <p class="text-sm text-purple-200">Publié le {{ $temoignage->created_at }}</p>
                    </div>
                </div>
            </div>

            <!-- Contenu du témoignage -->
            <div class="p-6">
                <h1 class="text-2xl font-bold text-yellow-400 mb-4">{{ $temoignage->titre }}</h1>
                <div class="mb-6">
                    <img src="/api/placeholder/800/400" alt="Image du témoignage" class="w-full rounded-lg mb-4">
                    <p class="text-purple-200 leading-relaxed">
                        {{ $temoignage->description }}
                    </p>
                </div>

                <!-- Boutons d'interaction -->
                <div class="flex items-center space-x-6 text-purple-200">
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="far fa-comment"></i>
                        <span>{{ $comments->count() }} commentaires</span>
                    </button>
                </div>
            </div>

            <!-- Section commentaires -->
            <div class="bg-purple-700 p-6">
                <h2 class="text-xl font-semibold text-yellow-400 mb-6">Commentaires</h2>
                
                <!-- Formulaire de commentaire -->
                <form action="{{ route('Commentaire', ['id' => $temoignage->id]) }}" method="POST" class="mb-8">
                    @csrf
                    <div class="flex space-x-4">
                        <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                            <i class="fas fa-user text-purple-900"></i>
                        </div>
                        <div class="flex-1">
                            <textarea 
                                class="w-full px-4 py-2 rounded-lg bg-purple-600 border border-purple-500 text-white placeholder-purple-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                                placeholder="Ajouter un commentaire..."
                                name="commentaire"
                                rows="3"
                            ></textarea>
                            <button type="submit" class="mt-2 px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition font-semibold">
                                Commenter
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Liste des commentaires -->
                <div class="space-y-6">
                    @foreach ($comments as $comment)
                        <div class="flex space-x-4">
                            <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                                <i class="fas fa-user text-purple-900"></i>
                            </div>
                            <div class="flex-1">
                                <div class="bg-purple-800 p-4 rounded-lg">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-semibold text-yellow-400">{{ $comment->user->first_name .' '. $comment->user->last_name}}</h4>
                                        <span class="text-sm text-purple-200">{{ $comment->created_at }}</span>
                                    </div>
                                    <p class="text-purple-200">{{ $comment->commentaire }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-master>