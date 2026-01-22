<?php
require_once __DIR__ . '/../../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-blue-500 to-blue-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="palette" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Pré-Escolar</h1>
                </div>
                <p class="text-xl text-blue-100">Primeiros passos rumo ao conhecimento</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Educação Infantil de Qualidade</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            O nosso programa de Pré-Escolar foi cuidadosamente desenhado para proporcionar às crianças um ambiente seguro, estimulante e acolhedor, onde podem explorar, brincar e aprender de forma natural e alegre.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Acreditamos que os primeiros anos são fundamentais para o desenvolvimento cognitivo, emocional e social. Por isso, utilizamos metodologias lúdicas que respeitam o ritmo de cada criança, promovendo a autonomia, criatividade e o gosto pelo aprender.
                        </p>
                        <div class="flex gap-4">
                            <a href="<?= url('pages/admissoes') ?>" class="bg-[#1B8B6F] text-white px-6 py-3 rounded-lg font-bold hover:bg-emerald-700 transition-all">
                                Inscrever Agora
                            </a>
                            <a href="<?= url('pages/contacto') ?>" class="border-2 border-gray-300 dark:border-gray-600 px-6 py-3 rounded-lg font-bold hover:border-[#1B8B6F] transition-all">
                                Agendar Visita
                            </a>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 rounded-2xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="baby" class="w-32 h-32 mx-auto mb-4 text-blue-500 opacity-50"></i>
                            <p class="text-gray-600 dark:text-gray-400 font-medium">Crianças dos 3 aos 5 anos</p>
                        </div>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Áreas de Desenvolvimento</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl text-center">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="brain" class="w-8 h-8 text-blue-600"></i>
                            </div>
                            <h3 class="font-bold mb-2">Desenvolvimento Cognitivo</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Raciocínio lógico, memória e concentração</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl text-center">
                            <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="heart" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h3 class="font-bold mb-2">Desenvolvimento Emocional</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Inteligência emocional e autoconfiança</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl text-center">
                            <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="users" class="w-8 h-8 text-purple-600"></i>
                            </div>
                            <h3 class="font-bold mb-2">Desenvolvimento Social</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Partilha, cooperação e empatia</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl text-center">
                            <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="activity" class="w-8 h-8 text-yellow-600"></i>
                            </div>
                            <h3 class="font-bold mb-2">Desenvolvimento Motor</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Coordenação motora fina e grossa</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 rounded-2xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8">Atividades e Metodologias</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="palette" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Artes e Expressão</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Pintura, desenho, música e expressão dramática para estimular a criatividade.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="book-open" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Iniciação à Leitura</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Contação de histórias e atividades de pré-alfabetização de forma lúdica.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="shapes" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Jogos Educativos</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Brincadeiras estruturadas que desenvolvem o raciocínio lógico-matemático.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="flag" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Inglês Lúdico</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Introdução ao inglês através de canções, jogos e atividades divertidas.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="footprints" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Psicomotricidade</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Atividades físicas que promovem coordenação e consciência corporal.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="sprout" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Exploração da Natureza</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Atividades ao ar livre e descoberta do meio ambiente.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="clock" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Horário
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2"><strong>Manhã:</strong> 7h30 - 12h00</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm"><strong>Tarde:</strong> 13h00 - 17h30</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="users" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Turmas
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">Máximo de 15 alunos por turma</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Acompanhamento personalizado</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="calendar" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Idade
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">3 a 5 anos</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Grupos organizados por faixa etária</p>
                    </div>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>