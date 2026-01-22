<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Cursos Oferecidos</h1>
                <p class="text-xl text-emerald-100">Escolha o caminho certo para o seu futuro</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold mb-6">Cursos do Ensino Secundário</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        No 2º Ciclo do Ensino Secundário (11ª e 12ª classes), oferecemos cursos especializados que preparam os alunos para diferentes áreas do conhecimento e carreiras profissionais.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-20">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-2xl p-8 border-2 border-blue-200 dark:border-blue-700">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-blue-500 rounded-xl flex items-center justify-center">
                                <i data-lucide="flask-conical" class="w-8 h-8 text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Ciências</h3>
                                <p class="text-sm text-blue-600 dark:text-blue-400">Área Científica</p>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Curso voltado para alunos interessados em carreiras nas áreas de ciências exatas, engenharias, medicina e tecnologia.
                        </p>
                        
                        <h4 class="font-bold mb-4">Disciplinas Específicas:</h4>
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-blue-600"></i>
                                <span class="text-sm">Física</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-blue-600"></i>
                                <span class="text-sm">Química</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-blue-600"></i>
                                <span class="text-sm">Biologia</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-blue-600"></i>
                                <span class="text-sm">Matemática</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 mb-6">
                            <h4 class="font-bold text-sm mb-3">Possíveis Carreiras:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Medicina</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Engenharia</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Farmácia</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Biologia</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Química</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Física</span>
                            </div>
                        </div>

                        <a href="<?= url('pages/admissoes') ?>" class="block w-full text-center bg-blue-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-600 transition-all">
                            Candidatar-se ao Curso
                        </a>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-2xl p-8 border-2 border-purple-200 dark:border-purple-700">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center">
                                <i data-lucide="book-text" class="w-8 h-8 text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Letras</h3>
                                <p class="text-sm text-purple-600 dark:text-purple-400">Área de Humanidades</p>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Curso direcionado para alunos com interesse em ciências humanas, sociais, línguas, direito e comunicação.
                        </p>
                        
                        <h4 class="font-bold mb-4">Disciplinas Específicas:</h4>
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-purple-600"></i>
                                <span class="text-sm">História</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-purple-600"></i>
                                <span class="text-sm">Geografia</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-purple-600"></i>
                                <span class="text-sm">Filosofia</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-purple-600"></i>
                                <span class="text-sm">Literatura</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 mb-6">
                            <h4 class="font-bold text-sm mb-3">Possíveis Carreiras:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Direito</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Psicologia</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Jornalismo</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Sociologia</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Letras</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">História</span>
                            </div>
                        </div>

                        <a href="<?= url('pages/admissoes') ?>" class="block w-full text-center bg-purple-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-purple-600 transition-all">
                            Candidatar-se ao Curso
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-emerald-50 to-blue-50 dark:from-emerald-900/20 dark:to-blue-900/20 rounded-2xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8 text-center">Orientação Vocacional</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="compass" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Testes Vocacionais</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Avaliações para identificar aptidões e interesses profissionais</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="user-round-search" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Aconselhamento Individual</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Sessões personalizadas com psicólogos especializados</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="presentation" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Palestras e Workshops</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Eventos com profissionais de diversas áreas</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Preparação para o Ensino Superior</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Todos os nossos cursos preparam rigorosamente os alunos para os exames nacionais e para o acesso ao Ensino Superior, seja em universidades nacionais ou internacionais.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Aulas de preparação para exames de admissão</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Apoio na escolha de universidades e cursos</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Simulados e provas modelo regulares</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Acompanhamento psicopedagógico contínuo</span>
                            </li>
                        </ul>
                        <a href="<?= url('pages/contacto') ?>" class="inline-block bg-[#1B8B6F] text-white px-8 py-3 rounded-lg font-bold hover:bg-emerald-700 transition-all">
                            Saber Mais
                        </a>
                    </div>
                    <div class="bg-gradient-to-br from-emerald-100 to-blue-100 dark:from-emerald-900/30 dark:to-blue-900/30 rounded-2xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="graduation-cap" class="w-32 h-32 mx-auto mb-4 text-emerald-600 opacity-50"></i>
                            <p class="text-gray-600 dark:text-gray-400 font-medium text-lg">Preparação de Excelência</p>
                            <p class="text-gray-500 dark:text-gray-500 text-sm mt-2">Taxa de aprovação de 100%</p>
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