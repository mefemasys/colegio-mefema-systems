<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Missão e Valores</h1>
                <p class="text-xl text-emerald-100">Os princípios que nos guiam</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-blue-500 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Missão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Proporcionar uma educação de excelência, promovendo o desenvolvimento integral dos nossos alunos através de práticas pedagógicas inovadoras, valores éticos e preparação para os desafios do mundo contemporâneo, contribuindo assim para a formação de cidadãos responsáveis e competentes.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="eye" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Visão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Ser reconhecido como a instituição de ensino de referência em Cabo Delgado, destacando-se pela qualidade académica, inovação pedagógica e formação de valores, preparando cidadãos globais capazes de transformar positivamente a sociedade moçambicana.
                        </p>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Nossos Valores</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="book-open" class="w-6 h-6 text-[#1B8B6F]"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Excelência</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Buscamos constantemente a excelência em tudo o que fazemos, desde o ensino até o atendimento às famílias.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="heart-handshake" class="w-6 h-6 text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Respeito</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Cultivamos o respeito mútuo, a diversidade e a dignidade humana em todas as nossas relações.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="lightbulb" class="w-6 h-6 text-purple-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Inovação</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Abraçamos a inovação pedagógica e tecnológica para preparar nossos alunos para o futuro.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="shield-check" class="w-6 h-6 text-yellow-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Integridade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Agimos com honestidade, transparência e ética em todas as nossas ações e decisões.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="users" class="w-6 h-6 text-red-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Colaboração</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Promovemos o trabalho em equipa e a parceria entre alunos, professores e famílias.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="sprout" class="w-6 h-6 text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Responsabilidade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Incentivamos a responsabilidade social, ambiental e o compromisso com a comunidade.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-[#1B8B6F] to-emerald-600 rounded-2xl p-12 text-white text-center">
                    <h2 class="text-3xl font-bold mb-4">Junte-se à Nossa Comunidade</h2>
                    <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">Venha fazer parte de uma instituição que valoriza a excelência, o respeito e a inovação na educação.</p>
                    <a href="<?= url('pages/admissoes') ?>" class="inline-block bg-white text-[#1B8B6F] px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-all">
                        Iniciar Inscrição
                    </a>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>