<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | MEFEMA Hospitality' : 'MEFEMA Hospitality | Conforto que Acolhe'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Hotel, Motel e Residencial em Maputo, Moçambique. Acomodações de qualidade para todas as necessidades.'; ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            primary: '#B8860B',
                            secondary: '#DC2626',
                            accent: '#1B8B6F',
                        }
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }

        .glass-nav {
            background: rgba(255,255,255,.8);
            backdrop-filter: blur(12px);
        }
        .dark .glass-nav {
            background: rgba(17,24,39,.8);
        }

        #mobile-menu.active {
            transform: translateX(0);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #B8860B 0%, #DC2626 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors">