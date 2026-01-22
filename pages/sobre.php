<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Sobre Nós</h1>
                <p class="text-xl text-emerald-100">Conheça a história e os valores do Colégio MEFEMA Systems</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Nossa História</h2>
                        <div class="space-y-4 text-gray-600 dark:text-gray-400">
                            <p>Fundado há mais de 15 anos, o Colégio MEFEMA Systems nasceu do sonho de criar uma instituição de ensino de excelência em Mozambique, Moçambique. Desde o início, nossa missão tem sido proporcionar educação de qualidade que forma cidadãos preparados para os desafios do século XXI.</p>
                            <p>Ao longo dos anos, temos nos destacado pela inovação pedagógica, pelo corpo docente altamente qualificado e pelo compromisso com o desenvolvimento integral de cada aluno. Nosso crescimento reflete a confiança que as famílias de Mozambique depositam em nosso trabalho.</p>
                            <p>Hoje, somos referência em educação na região, com mais de 500 alunos graduados e uma taxa de aprovação de 100% nos exames nacionais.</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="school" class="w-32 h-32 mx-auto mb-4 text-[#1B8B6F] opacity-50"></i>
                            <p class="text-gray-500 dark:text-gray-400">Excelência em Educação desde 2010</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8 text-center">Por que escolher o Colégio MEFEMA Systems?</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#1B8B6F] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="award" class="w-8 h-8 text-[#1B8B6F]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Qualidade Académica</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Currículo robusto e metodologias modernas de ensino</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#1B8B6F] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="users" class="w-8 h-8 text-[#1B8B6F]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Professores Qualificados</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Equipe experiente e comprometida com a excelência</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#1B8B6F] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="heart" class="w-8 h-8 text-[#1B8B6F]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Valores Humanos</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Formação integral focada em ética e cidadania</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-2">15+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Anos de Excelência</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-2">500+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Alunos Formados</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-2">30+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Professores</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-2">100%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Taxa de Aprovação</div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>