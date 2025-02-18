<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Mubarak 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .mosque-bg {
            background: linear-gradient(to bottom, #663399, #4B0082);
        }
        .star {
            animation: twinkle 1.5s infinite alternate;
        }
        @keyframes twinkle {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
        .window-light {
            animation: glow 2s infinite alternate;
        }
        @keyframes glow {
            from { filter: brightness(0.8); }
            to { filter: brightness(1.2); }
        }
        .prayer-times {
            background: rgba(102, 51, 153, 0.9);
            backdrop-filter: blur(10px);
        }
        .card-hover {
            transition: transform 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
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
                    <a href="#communaute" class="hover:text-yellow-400 transition">Communauté</a>
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