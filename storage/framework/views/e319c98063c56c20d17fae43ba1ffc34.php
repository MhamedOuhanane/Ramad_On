<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Ramadan 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .mosque-decoration {
            clip-path: polygon(0 0, 100% 0, 100% 70%, 85% 70%, 85% 100%, 70% 70%, 55% 70%, 55% 100%, 40% 70%, 25% 70%, 25% 100%, 15% 70%, 0 70%);
        }
        .auth-bg {
            background: linear-gradient(135deg, #4B0082 0%, #663399 100%);
        }
        .star {
            animation: twinkle 1.5s infinite alternate;
        }
        @keyframes twinkle {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
        
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
<body class="min-h-screen auth-bg text-white">
    <?php echo e($slot); ?>

</body>
</html><?php /**PATH C:\Users\ycode\Desktop\Briefs\Ramad_On\resources\views/components/authentifier.blade.php ENDPATH**/ ?>