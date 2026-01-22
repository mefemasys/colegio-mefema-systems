<?php
require_once __DIR__ . '/config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section id="inicio" class="pt-32 pb-20 md:pt-40 md:pb-32 hero-gradient text-white relative">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <div class="max-w-6xl mx-auto px-6 relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 text-center md:text-left">
                        <span class="inline-block px-4 py-1 bg-white/20 rounded-md text-sm font-semibold tracking-wide backdrop-blur-sm">MATRÍCULAS ABERTAS PARA 2026</span>
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                            Construindo o <span class="text-emerald-300">Futuro</span> hoje.
                        </h1>
                        <p class="text-lg text-emerald-50 text-balance opacity-90">
                            O Colégio MEFEMA Systems em Mozambique oferece um ambiente de excelência, onde a inovação pedagógica e os valores humanos se unem para formar cidadãos globais.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="#admissoes" class="bg-white text-[#1B8B6F] px-8 py-3 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all flex items-center justify-center gap-2">
                                Quero me inscrever <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                            <a href="#sobre" class="border-2 border-white/30 hover:bg-white/10 px-8 py-3 rounded-lg font-bold text-lg transition-all text-center">
                                Conhecer o Colégio
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block relative">
                        <div class="w-full aspect-square bg-emerald-400/20 rounded-xl border border-white/20 p-4">
                            <div class="w-full h-full bg-white/10 rounded-lg flex items-center justify-center overflow-hidden">
                                 <div class="text-center p-8">
                                    <i data-lucide="graduation-cap" class="w-24 h-24 mx-auto mb-4 opacity-50"></i>
                                    <p class="text-sm font-medium italic">"Excelência no ensino em Mozambique"</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">+500</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Alunos Graduados</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">100%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Taxa de Aprovação</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">15+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Anos de História</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">30+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Professores Mestres</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="niveis" class="py-24 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Nossa Oferta Educativa</h2>
                    <p class="text-gray-600 dark:text-gray-400">Acompanhamos o crescimento do seu filho em todas as etapas fundamentais.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="palette" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Pré-Escolar</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Foco no desenvolvimento psicomotor e social através de atividades lúdicas e ambiente acolhedor.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Jardim de Infância</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Estimulação Precoce</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Inglês Lúdico</li>
                        </ul>
                        <a href="#" class="text-[#1B8B6F] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-[#1B8B6F] card-hover shadow-lg">
                        <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="book-open" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Ensino Primário</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Excelência na alfabetização e raciocínio lógico, preparando bases sólidas para o percurso académico.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Metodologia Própria</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Acompanhamento Individual</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Laboratórios de Ciência</li>
                        </ul>
                        <a href="#" class="text-[#1B8B6F] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-purple-50 dark:bg-purple-900/30 text-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Ensino Secundário</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Foco no alto desempenho académico e preparação rigorosa para o acesso ao Ensino Superior.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Orientação Vocacional</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Preparação Exames</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Programação e Robótica</li>
                        </ul>
                        <a href="#" class="text-[#1B8B6F] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="bg-gray-900 dark:bg-gray-800 rounded-xl overflow-hidden flex flex-col lg:flex-row text-white">
                    <div class="lg:w-1/2 p-12 md:p-16 space-y-8">
                        <h2 class="text-3xl md:text-4xl font-bold">Entre em Contacto</h2>
                        <p class="text-gray-400">Estamos aqui para responder a todas as suas questões. Agende uma visita guiada.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-emerald-400"></i>
                                </div>
                                <p class="text-sm">Av. mefemasys, Expansão, Mozambique, Moçambique</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-5 h-5 text-emerald-400"></i>
                                </div>
                                <div class="text-sm">
                                    <p>+258 84 123 4567</p>
                                    <p>+258 85 123 4567</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5 text-emerald-400"></i>
                                </div>
                                <p class="text-sm">comercial@mefemasys.co.mz</p>
                            </div>
                        </div>

                        <div class="pt-8 flex gap-4">
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 bg-gray-800 dark:bg-gray-700/50 p-8 md:p-16">
                        <form class="space-y-4">
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Nome do Encarregado</label>
                                <input type="text" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-emerald-400 transition-colors" placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Email</label>
                                <input type="email" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-emerald-400 transition-colors" placeholder="email@exemplo.com">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Assunto</label>
                                <select class="w-full bg-white/10 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-emerald-400 transition-colors text-sm">
                                    <option>Informações sobre Matrículas</option>
                                    <option>Agendar Visita</option>
                                    <option>Recrutamento</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Mensagem</label>
                                <textarea rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-emerald-400 transition-colors" placeholder="Como podemos ajudar?"></textarea>
                            </div>
                            <button class="w-full bg-[#1B8B6F] py-4 rounded-lg font-bold hover:bg-emerald-700 transition-colors shadow-lg">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      
    </main>
<?php
get_part('scripts');
get_part('footer'); ?>