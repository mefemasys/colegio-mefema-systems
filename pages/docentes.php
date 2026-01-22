<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Corpo Docente</h1>
                <p class="text-xl text-emerald-100">Conheça os profissionais que fazem a diferença</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold mb-6">Professores Altamente Qualificados</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Nossa equipe é composta por profissionais experientes, comprometidos com a excelência educativa e o desenvolvimento integral de cada aluno. Todos os nossos docentes possuem formação superior e participam regularmente de programas de capacitação contínua.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-blue-400 to-blue-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof.ª Maria Santos</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Coordenadora Pré-Escolar</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Licenciada em Educação Infantil com 12 anos de experiência em pedagogia lúdica e desenvolvimento infantil.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Pedagogia</span>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Psicomotricidade</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-emerald-400 to-emerald-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof. João Macamo</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Professor de Matemática</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Mestre em Matemática Aplicada, especialista em metodologias ativas e resolução de problemas complexos.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-xs rounded-full">Matemática</span>
                                <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-xs rounded-full">Física</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-purple-400 to-purple-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof.ª Ana Chambule</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Professora de Língua Portuguesa</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Licenciada em Letras, especializada em literatura africana e metodologias de ensino de línguas.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Português</span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Literatura</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-red-400 to-red-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof. Carlos Sitoe</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Professor de Inglês</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Certificação TEFL, experiência internacional em ensino de inglês como segunda língua.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs rounded-full">Inglês</span>
                                <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs rounded-full">TEFL</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof.ª Beatriz Cossa</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Professora de Ciências</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Licenciada em Biologia, especialista em educação ambiental e metodologia científica.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-full">Biologia</span>
                                <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-full">Química</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-indigo-400 to-indigo-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Prof. Daniel Moiane</h3>
                            <p class="text-[#1B8B6F] text-sm font-semibold mb-3">Professor de Informática</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Engenheiro de Software, especialista em programação, robótica educativa e literacia digital.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 text-xs rounded-full">Programação</span>
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 text-xs rounded-full">Robótica</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="graduation-cap" class="w-8 h-8 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">100%</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Formação Superior</p>
                    </div>
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 dark:from-emerald-900/20 dark:to-emerald-800/20 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="book-open" class="w-8 h-8 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">30+</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Professores Dedicados</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="award" class="w-8 h-8 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">15+</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Anos de Experiência Média</p>
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-12">
                    <h2 class="text-2xl font-bold mb-6 text-center">Desenvolvimento Profissional Contínuo</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-center max-w-3xl mx-auto mb-8">
                        Investimos regularmente na formação dos nossos professores através de workshops, seminários e programas de capacitação, garantindo que estejam sempre atualizados com as melhores práticas pedagógicas e tecnologias educacionais.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#1B8B6F] bg-opacity-10 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Workshops Mensais</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Sessões práticas sobre novas metodologias de ensino</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#1B8B6F] bg-opacity-10 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Certificações Internacionais</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Apoio para obtenção de certificações reconhecidas</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#1B8B6F] bg-opacity-10 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Intercâmbio de Experiências</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Partilha de boas práticas entre a equipe docente</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#1B8B6F] bg-opacity-10 rounded-lg flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Avaliação Contínua</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Feedback regular para melhoria constante</p>
                            </div>
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