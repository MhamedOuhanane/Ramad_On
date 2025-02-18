

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed inset-0 bg-purple-900 z-40 hidden">
    <div class="container mx-auto px-6 py-20">
        <div class="flex flex-col space-y-6 text-center">
            <a href="#home" class="text-xl hover:text-yellow-400 transition">Accueil</a>
            <a href="#horaires" class="text-xl hover:text-yellow-400 transition">Horaires</a>
            <a href="#ressources" class="text-xl hover:text-yellow-400 transition">Ressources</a>
            <a href="#communaute" class="text-xl hover:text-yellow-400 transition">Communauté</a>
            <button class="bg-yellow-400 text-purple-900 px-6 py-2 rounded-full font-bold hover:bg-yellow-300 transition">
                Connexion
            </button>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section id="home" class="mosque-bg min-h-screen flex items-center relative overflow-hidden">
    <!-- Stars and Moon -->
    <div class="absolute inset-0">
        <div class="star absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-200 rounded-full"></div>
        <div class="star absolute top-1/3 right-1/3 w-2 h-2 bg-yellow-200 rounded-full"></div>
        <div class="star absolute top-1/2 left-1/2 w-2 h-2 bg-yellow-200 rounded-full"></div>
        <div class="absolute top-20 right-20 w-16 h-16 bg-yellow-200 rounded-full opacity-90"></div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 relative z-10 pt-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-6">Ramadan Mubarak</h1>
                <p class="text-purple-200 mb-8">
                    Bienvenue dans ce mois béni de spiritualité et de partage. 
                    Découvrez nos ressources, horaires de prière et rejoignez notre communauté.
                </p>
                <div class="flex space-x-4">
                    <button class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-300 transition">
                        Commencer
                    </button>
                    <button class="border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-full font-bold hover:bg-yellow-400 hover:text-purple-900 transition">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class="relative hidden md:block">
                <!-- Mosque Illustration -->
                <div class="relative">
                    <div class="w-full h-64 bg-purple-800 rounded-t-full opacity-80"></div>
                    <div class="absolute bottom-0 w-full">
                        <div class="flex justify-center space-x-4">
                            <div class="window-light w-8 h-12 bg-yellow-400 rounded-t-lg opacity-75"></div>
                            <div class="window-light w-8 h-12 bg-yellow-400 rounded-t-lg opacity-75"></div>
                            <div class="window-light w-8 h-12 bg-yellow-400 rounded-t-lg opacity-75"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prayer Times Section -->
<section id="horaires" class="py-20 bg-purple-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">Horaires de Prière</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="prayer-times p-6 rounded-lg card-hover">
                <h3 class="text-xl font-bold mb-4">Aujourd'hui</h3>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Fajr</span>
                        <span class="text-yellow-400">05:30</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Dhuhr</span>
                        <span class="text-yellow-400">12:30</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Asr</span>
                        <span class="text-yellow-400">15:45</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Maghrib</span>
                        <span class="text-yellow-400">18:30</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Isha</span>
                        <span class="text-yellow-400">20:00</span>
                    </div>
                </div>
            </div>
            <!-- Plus de cartes peuvent être ajoutées ici -->
        </div>
    </div>
</section>

<!-- Resources Section -->
<section id="ressources" class="py-20 bg-purple-900">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">Ressources</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-purple-800 p-6 rounded-lg card-hover">
                <i class="fas fa-book text-yellow-400 text-3xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Lectures Quotidiennes</h3>
                <p class="text-purple-200">Découvrez notre sélection de lectures spirituelles pour chaque jour.</p>
            </div>
            <div class="bg-purple-800 p-6 rounded-lg card-hover">
                <i class="fas fa-utensils text-yellow-400 text-3xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Recettes pour l'Iftar</h3>
                <p class="text-purple-200">Des idées de recettes saines et délicieuses pour votre rupture du jeûne.</p>
            </div>
            <div class="bg-purple-800 p-6 rounded-lg card-hover">
                <i class="fas fa-hands-helping text-yellow-400 text-3xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Guide du Ramadan</h3>
                <p class="text-purple-200">Conseils et guides pratiques pour vivre au mieux ce mois sacré.</p>
            </div>
        </div>
    </div>
</section>

<!-- Community Section -->
<section id="communaute" class="py-20 bg-purple-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">Notre Communauté</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-purple-900 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4">Forum de Discussion</h3>
                <div class="space-y-4">
                    <!-- Sample Discussion Topics -->
                    <div class="p-4 bg-purple-800 rounded-lg">
                        <h4 class="font-bold">Préparation du Suhoor</h4>
                        <p class="text-purple-200">Partagez vos astuces pour un Suhoor équilibré...</p>
                    </div>
                    <div class="p-4 bg-purple-800 rounded-lg">
                        <h4 class="font-bold">Gestion du Temps</h4>
                        <p class="text-purple-200">Comment organiser sa journée pendant le Ramadan...</p>
                    </div>
                </div>
            </div>
            <div class="bg-purple-900 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4">Événements à Venir</h3>
                <div class="space-y-4">
                    <div class="p-4 bg-purple-800 rounded-lg">
                        <h4 class="font-bold">Iftar Communautaire</h4>
                        <p class="text-purple-200">Rejoignez-nous pour un Iftar communautaire...</p>
                    </div>
                    <div class="p-4 bg-purple-800 rounded-lg">
                        <h4 class="font-bold">Nuit du Destin</h4>
                        <p class="text-purple-200">Programme spécial pour Laylat al-Qadr...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
