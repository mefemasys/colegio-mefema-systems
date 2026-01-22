<?php
// header.php
require_once __DIR__ . '/../config/url-config.php';
?>

<header class="fixed w-full z-50 glass-nav">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-brand-light rounded-md flex items-center justify-center text-white font-bold">
                CB
            </div>
            <span class="font-bold text-lg">Colégio <span class="text-brand-light">MEFEMA Systems</span></span>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold">
            <a href="<?= url('') ?>" class="hover:text-brand-light">Início</a>

            <!-- Dropdown Institucional -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-brand-light">
                    O Colégio <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-56 pt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/sobre') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Sobre Nós</a>
                        <a href="<?= url('pages/missao-valores') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Missão e Valores</a>
                        <a href="<?= url('pages/docentes') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Corpo Docente</a>
                        <a href="<?= url('pages/galeria') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Galeria de Fotos</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Ensino -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-brand-light">
                    Ensino <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-64 pt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/ensino/pre-escolar') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Pré-Escolar</a>
                        <a href="<?= url('pages/ensino/primario') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Ensino Primário</a>
                        <a href="<?= url('pages/ensino/secundario') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Ensino Secundário</a>
                        <a href="<?= url('pages/cursos') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Cursos</a>
                    </div>
                </div>
            </div>

            <a href="<?= url('pages/contacto') ?>" class="hover:text-brand-light">Contacto</a>

            <button id="dark-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <i data-lucide="moon" class="w-4 h-4"></i>
            </button>

            <a href="<?= url('pages/admissoes') ?>" class="bg-brand-light text-white px-5 py-2 rounded-lg">
                Admissões 2026
            </a>
        </nav>

        <!-- Mobile Toggle -->
        <button id="open-menu" class="md:hidden">
            <i data-lucide="menu" class="w-7 h-7"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <aside id="mobile-menu"
        class="fixed inset-y-0 right-0 w-72 bg-white dark:bg-gray-900
               transform translate-x-full transition-transform duration-300
               flex flex-col p-6 z-[60] shadow-lg">

        <div class="flex justify-between items-center mb-8">
            <span class="text-lg font-bold">Menu</span>
            <button id="close-menu">
                <i data-lucide="x" class="w-7 h-7"></i>
            </button>
        </div>

        <nav class="flex flex-col gap-4 text-lg font-semibold">
            <a href="<?= url('') ?>">Início</a>

            <!-- Institucional -->
            <details class="group">
                <summary class="cursor-pointer">O Colégio</summary>
                <div class="flex flex-col pl-4 mt-2 gap-2">
                    <a href="<?= url('pages/sobre') ?>">Sobre Nós</a>
                    <a href="<?= url('pages/missao-valores') ?>">Missão e Valores</a>
                    <a href="<?= url('pages/docentes') ?>">Corpo Docente</a>
                    <a href="<?= url('pages/galeria') ?>">Galeria de Fotos</a>
                </div>
            </details>

            <!-- Ensino -->
            <details class="group">
                <summary class="cursor-pointer">Ensino</summary>
                <div class="flex flex-col pl-4 mt-2 gap-2">
                    <a href="<?= url('pages/ensino/pre-escolar') ?>">Pré-Escolar</a>
                    <a href="<?= url('pages/ensino/primario') ?>">Ensino Primário</a>
                    <a href="<?= url('pages/ensino/secundario') ?>">Ensino Secundário</a>
                    <a href="<?= url('pages/cursos') ?>">Cursos</a>
                </div>
            </details>

            <a href="<?= url('pages/contacto') ?>">Contacto</a>
            <a href="<?= url('pages/admissoes') ?>" class="text-brand-light">Inscrições</a>
        </nav>
    </aside>
</header>

