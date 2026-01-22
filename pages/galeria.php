<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeria de Fotos</h1>
                <p class="text-xl text-emerald-100">Momentos especiais da nossa comunidade escolar</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="flex flex-wrap gap-4 justify-center mb-12">
                    <button class="px-6 py-2 bg-[#1B8B6F] text-white rounded-lg font-semibold">Todas</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Eventos</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Aulas</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Desporto</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Cerimónias</button>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="group relative bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-blue-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Cerimónia de Formatura 2025</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-emerald-100 to-emerald-200 dark:from-emerald-900/30 dark:to-emerald-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-emerald-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Laboratório de Ciências</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900/30 dark:to-purple-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-purple-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Feira de Ciências 2025</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-yellow-100 to-yellow-200 dark:from-yellow-900/30 dark:to-yellow-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-yellow-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Torneio de Desporto</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/30 dark:to-red-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-red-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Dia das Crianças</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-indigo-100 to-indigo-200 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-indigo-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Biblioteca Escolar</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-pink-100 to-pink-200 dark:from-pink-900/30 dark:to-pink-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-pink-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Aula de Artes</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-teal-100 to-teal-200 dark:from-teal-900/30 dark:to-teal-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-teal-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Visita de Estudo</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <div class="group relative bg-gradient-to-br from-orange-100 to-orange-200 dark:from-orange-900/30 dark:to-orange-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="image" class="w-16 h-16 mx-auto mb-3 text-orange-500 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Festa de Encerramento</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="px-8 py-3 bg-gray-100 dark:bg-gray-800 rounded-lg font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Carregar Mais Fotos
                    </button>
                </div>

            </div>
        </section>

        <section class="py-16 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-3xl font-bold mb-4">Vídeos em Destaque</h2>
                    <p class="text-gray-600 dark:text-gray-400">Conheça melhor o nosso colégio através de vídeos</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/30 dark:to-red-800/30 aspect-video flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i data-lucide="play" class="w-10 h-10 text-white"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 font-medium">Tour Virtual pelo Colégio</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Conheça as Nossas Instalações</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Faça um tour virtual completo pelas salas de aula, laboratórios e espaços de convivência.</p>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 aspect-video flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i data-lucide="play" class="w-10 h-10 text-white"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 font-medium">Testemunhos de Pais e Alunos</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">O Que Dizem Sobre Nós</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Ouça experiências reais de famílias que fazem parte da nossa comunidade escolar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>