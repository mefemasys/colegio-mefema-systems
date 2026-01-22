<?php
require_once __DIR__ . '/../../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-purple-600 to-purple-800 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="graduation-cap" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Ensino Secundário</h1>
                </div>
                <p class="text-xl text-purple-100">Preparando líderes para o amanhã</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Excelência Académica</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            O Ensino Secundário do Colégio MEFEMA Systems é reconhecido pela sua exigência académica e preparação rigorosa para os exames nacionais e acesso ao Ensino Superior.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Oferecemos um currículo abrangente que combina disciplinas científicas, humanísticas e tecnológicas, preparando os alunos para os desafios da universidade e do mercado de trabalho.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Com professores altamente especializados e recursos modernos, garantimos uma formação completa que desenvolve competências académicas, pensamento crítico e habilidades de liderança.
                        </p>
                        <div class="flex gap-4">
                            <a href="<?= url('pages/admissoes') ?>" class="bg-purple-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-purple-700 transition-all">
                                Candidatar-se
                            </a>
                            <a href="<?= url('pages/cursos') ?>" class="border-2 border-purple-600 text-purple-600 px-6 py-3 rounded-lg font-bold hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-all">
                                Ver Cursos
                            </a>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900/30 dark:to-purple-800/30 rounded-2xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="award" class="w-32 h-32 mx-auto mb-4 text-purple-600 opacity-50"></i>
                            <p class="text-gray-600 dark:text-gray-400 font-medium">8ª à 12ª Classe</p>
                        </div>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-4">Ciclos do Ensino Secundário</h2>
                    <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                        O nosso programa está dividido em dois ciclos complementares
                    </p>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 p-8 rounded-2xl">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <i data-lucide="book" class="w-6 h-6 text-white"></i>
                                </div>
                                <h3 class="text-2xl font-bold">1º Ciclo (8ª-10ª Classe)</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Consolidação de conhecimentos fundamentais e exploração de diferentes áreas do saber.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
                                    <span>Currículo geral obrigatório</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
                                    <span>Orientação vocacional</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
                                    <span>Desenvolvimento de competências base</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 p-8 rounded-2xl">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                                    <i data-lucide="rocket" class="w-6 h-6 text-white"></i>
                                </div>
                                <h3 class="text-2xl font-bold">2º Ciclo (11ª-12ª Classe)</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Especialização em áreas científicas e preparação intensiva para o Ensino Superior.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-purple-600 shrink-0 mt-0.5"></i>
                                    <span>Cursos especializados</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-purple-600 shrink-0 mt-0.5"></i>
                                    <span>Preparação para exames de admissão</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-purple-600 shrink-0 mt-0.5"></i>
                                    <span>Aprofundamento académico</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-purple-50 to-indigo-50 dark:from-purple-900/20 dark:to-indigo-900/20 rounded-2xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8 text-center">Diferenciais do Nosso Secundário</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="microscope" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Laboratórios Modernos</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Equipamentos de ponta para aulas práticas de física, química e biologia</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="laptop" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Tecnologia Educativa</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Programação, robótica e ferramentas digitais avançadas</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="users-round" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Apoio Psicopedagógico</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Acompanhamento especializado e orientação vocacional</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="trophy" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Olimpíadas Científicas</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Participação em competições nacionais e internacionais</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="languages" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Certificações</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Cambridge English e outras certificações internacionais</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="briefcase" class="w-8 h-8 text-white"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-3">Preparação Profissional</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Workshops sobre carreira e mercado de trabalho</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600 mb-2">100%</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Taxa de Aprovação</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600 mb-2">25</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Alunos por Turma</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600 mb-2">12</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Disciplinas Oferecidas</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600 mb-2">90%</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Acesso ao Superior</p>
                    </div>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>