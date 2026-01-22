<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colégio MEFEMA Systems | Educar para o Futuro</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            light: '#1B8B6F',
                            dark: '#10B981',
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
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors">
