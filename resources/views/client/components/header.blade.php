<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Mubarak 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        
    </style>
</head>
<body class="bg-purple-900 text-white">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-opacity-90 bg-purple-900">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="text-xl font-bold">
                        <span class="text-yellow-400">◆</span> RAMADAN
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="hover:text-yellow-400 transition">Accueil</a>
                    <a href="#horaires" class="hover:text-yellow-400 transition">Horaires</a>
                    <a href="#ressources" class="hover:text-yellow-400 transition">Ressources</a>
                    <button id="loginBtn" class="bg-yellow-400 text-purple-900 px-6 py-2 rounded-full font-bold hover:bg-yellow-300 transition">
                        Connexion
                    </button>
                </div>
                <button class="md:hidden text-white" id="menuBtn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>
    
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