<?php
require_once __DIR__ . '/../../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="book-open" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Ensino Primário</h1>
                </div>
                <p class="text-xl text-emerald-100">Construindo bases sólidas para o futuro</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="bg-gradient-to-br from-emerald-100 to-emerald-200 dark:from-emerald-900/30 dark:to-emerald-800/30 rounded-2xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="pencil-ruler" class="w-32 h-32 mx-auto mb-4 text-emerald-600 opacity-50"></i>
                            <p class="text-gray-600 dark:text-gray-400 font-medium">1ª à 7ª Classe</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Excelência na Alfabetização</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            O Ensino Primário no Colégio MEFEMA Systems é caracterizado por uma pedagogia rigorosa e inovadora, que garante a aquisição sólida das competências fundamentais em leitura, escrita, matemática e ciências.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Utilizamos metodologias ativas que colocam o aluno no centro do processo de aprendizagem, promovendo o pensamento crítico, a resolução de problemas e o trabalho colaborativo.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Cada aluno recebe acompanhamento individualizado, garantindo que ninguém fica para trás e que todos desenvolvem o seu máximo potencial.
                        </p>
                        <a href="<?= url('pages/admissoes') ?>" class="inline-block bg-[#1B8B6F] text-white px-8 py-3 rounded-lg font-bold hover:bg-emerald-700 transition-all">
                            Inscrever Agora
                        </a>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Disciplinas do Currículo</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="book-a" class="w-6 h-6 text-blue-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Língua Portuguesa</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Leitura, escrita, gramática e interpretação de textos</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="calculator" class="w-6 h-6 text-emerald-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Matemática</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Aritmética, geometria e resolução de problemas</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="flask-conical" class="w-6 h-6 text-purple-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Ciências Naturais</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Biologia, física básica e educação ambiental</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="flag" class="w-6 h-6 text-red-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Língua Inglesa</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Conversação, vocabulário e gramática básica</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="map" class="w-6 h-6 text-yellow-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Ciências Sociais</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">História, geografia e educação cívica</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#1B8B6F] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center">
                                    <i data-lucide="monitor" class="w-6 h-6 text-indigo-600"></i>
                                </div>
                                <h3 class="font-bold text-lg">Informática</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Literacia digital e ferramentas básicas</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-emerald-50 to-blue-50 dark:from-emerald-900/20 dark:to-blue-900/20 rounded-2xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8 text-center">Metodologias Inovadoras</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-bold text-xl mb-4 flex items-center gap-2">
                                <i data-lucide="lightbulb" class="w-6 h-6 text-[#1B8B6F]"></i>
                                Aprendizagem Ativa
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Os alunos são protagonistas do seu próprio aprendizado através de projetos, experimentação e descoberta orientada.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Projetos interdisciplinares</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Laboratórios de ciências</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Trabalho colaborativo</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-4 flex items-center gap-2">
                                <i data-lucide="user-check" class="w-6 h-6 text-[#1B8B6F]"></i>
                                Acompanhamento Individual
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Cada aluno recebe atenção personalizada com estratégias adaptadas ao seu ritmo e estilo de aprendizagem.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Turmas reduzidas</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Apoio pedagógico adicional</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                    <span>Feedback contínuo aos pais</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-[#1B8B6F] mb-2">20</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Alunos por Turma</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-[#1B8B6F] mb-2">7h-13h</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Horário de Aulas</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-[#1B8B6F] mb-2">100%</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Taxa de Aprovação</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                        <div class="text-3xl font-bold text-[#1B8B6F] mb-2">15+</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Atividades Extra</p>
                    </div>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>