<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Témoignage - Ramadan 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-purple-900">
    <!-- Contenu principal -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-purple-800 rounded-lg shadow-xl overflow-hidden text-white">
            <!-- En-tête de l'article -->
            <div class="p-6 border-b border-purple-700">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 rounded-full bg-yellow-400 flex items-center justify-center">
                        <i class="fas fa-user text-purple-900"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-400">Sarah Benali</h3>
                        <p class="text-sm text-purple-200">Publié le 15 Mars 2025</p>
                    </div>
                </div>
            </div>

            <!-- Contenu du témoignage -->
            <div class="p-6">
                <h1 class="text-2xl font-bold text-yellow-400 mb-4">Mon premier jour de Ramadan</h1>
                <div class="mb-6">
                    <img src="/api/placeholder/800/400" alt="Image du témoignage" class="w-full rounded-lg mb-4">
                    <p class="text-purple-200 leading-relaxed">
                        Alhamdulillah pour ce premier jour de Ramadan. J'ai ressenti une paix intérieure 
                        particulière pendant la prière de Fajr. Le jeûne m'a permis de me recentrer sur 
                        l'essentiel et de ressentir plus de gratitude...
                    </p>
                </div>

                <!-- Boutons d'interaction -->
                <div class="flex items-center space-x-6 text-purple-200">
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="far fa-heart"></i>
                        <span>24 likes</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="far fa-comment"></i>
                        <span>12 commentaires</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="far fa-share-square"></i>
                        <span>Partager</span>
                    </button>
                </div>
            </div>

            <!-- Section commentaires -->
            <div class="bg-purple-700 p-6">
                <h2 class="text-xl font-semibold text-yellow-400 mb-6">Commentaires</h2>
                
                <!-- Formulaire de commentaire -->
                <div class="mb-8">
                    <div class="flex space-x-4">
                        <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                            <i class="fas fa-user text-purple-900"></i>
                        </div>
                        <div class="flex-1">
                            <textarea 
                                class="w-full px-4 py-2 rounded-lg bg-purple-600 border border-purple-500 text-white placeholder-purple-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                                placeholder="Ajouter un commentaire..."
                                rows="3"
                            ></textarea>
                            <button class="mt-2 px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition font-semibold">
                                Commenter
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Liste des commentaires -->
                <div class="space-y-6">
                    <!-- Commentaire 1 -->
                    <div class="flex space-x-4">
                        <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                            <i class="fas fa-user text-purple-900"></i>
                        </div>
                        <div class="flex-1">
                            <div class="bg-purple-800 p-4 rounded-lg">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-semibold text-yellow-400">Fatima K.</h4>
                                    <span class="text-sm text-purple-200">Il y a 2 heures</span>
                                </div>
                                <p class="text-purple-200">Ma sha Allah, merci d'avoir partagé cette belle expérience !</p>
                                <div class="mt-2 flex items-center space-x-4 text-sm text-purple-300">
                                    <button class="hover:text-yellow-400 transition">
                                        <i class="far fa-heart"></i>
                                        <span>8</span>
                                    </button>
                                    <button class="hover:text-yellow-400 transition">Répondre</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commentaire 2 -->
                    <div class="flex space-x-4">
                        <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                            <i class="fas fa-user text-purple-900"></i>
                        </div>
                        <div class="flex-1">
                            <div class="bg-purple-800 p-4 rounded-lg">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-semibold text-yellow-400">Ahmed M.</h4>
                                    <span class="text-sm text-purple-200">Il y a 3 heures</span>
                                </div>
                                <p class="text-purple-200">Très inspirant, qu'Allah accepte nos actes d'adoration.</p>
                                <div class="mt-2 flex items-center space-x-4 text-sm text-purple-300">
                                    <button class="hover:text-yellow-400 transition">
                                        <i class="far fa-heart"></i>
                                        <span>5</span>
                                    </button>
                                    <button class="hover:text-yellow-400 transition">Répondre</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>