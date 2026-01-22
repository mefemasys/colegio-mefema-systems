<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Entre em Contacto</h1>
                <p class="text-xl text-emerald-100">Estamos prontos para responder às suas questões</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-8">Informações de Contacto</h2>
                        
                        <div class="space-y-6 mb-10">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-6 h-6 text-[#1B8B6F]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Localização</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Av. mefemasys, Expansão<br>Mozambique, Cabo Delgado<br>Moçambique</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-6 h-6 text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Telefones</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        +258 85 200 2003<br>
                                        +258 85 270 0027
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-6 h-6 text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">colegioMEFEMA Systems.co@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="clock" class="w-6 h-6 text-yellow-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Horário de Atendimento</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Segunda a Sexta: 7h30 - 17h30<br>
                                        Sábado: 8h00 - 12h00
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                            <h3 class="font-bold mb-4">Siga-nos nas Redes Sociais</h3>
                            <div class="flex gap-4">
                                <a href="#" class="w-12 h-12 bg-blue-500 hover:bg-blue-600 rounded-lg flex items-center justify-center text-white transition-colors">
                                    <i data-lucide="facebook" class="w-6 h-6"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-pink-500 hover:bg-pink-600 rounded-lg flex items-center justify-center text-white transition-colors">
                                    <i data-lucide="instagram" class="w-6 h-6"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-blue-600 hover:bg-blue-700 rounded-lg flex items-center justify-center text-white transition-colors">
                                    <i data-lucide="linkedin" class="w-6 h-6"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-red-500 hover:bg-red-600 rounded-lg flex items-center justify-center text-white transition-colors">
                                    <i data-lucide="youtube" class="w-6 h-6"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8">
                        <h2 class="text-2xl font-bold mb-6">Envie-nos uma Mensagem</h2>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#1B8B6F] transition-colors" placeholder="Seu nome">
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email *</label>
                                    <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#1B8B6F] transition-colors" placeholder="email@exemplo.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Telefone *</label>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#1B8B6F] transition-colors" placeholder="+258 XX XXX XXXX">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Assunto *</label>
                                <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#1B8B6F] transition-colors">
                                    <option value="">Selecione um assunto</option>
                                    <option>Informações sobre Matrículas</option>
                                    <option>Agendar Visita ao Colégio</option>
                                    <option>Questões Académicas</option>
                                    <option>Propinas e Pagamentos</option>
                                    <option>Recrutamento</option>
                                    <option>Outros</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Mensagem *</label>
                                <textarea required rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#1B8B6F] transition-colors resize-none" placeholder="Como podemos ajudar?"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#1B8B6F] text-white py-4 rounded-lg font-bold hover:bg-emerald-700 transition-all shadow-lg hover:shadow-xl">
                                Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bg-gray-100 dark:bg-gray-800 rounded-2xl overflow-hidden h-96">
                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-emerald-100 to-blue-100 dark:from-emerald-900/20 dark:to-blue-900/20">
                        <div class="text-center">
                            <i data-lucide="map" class="w-24 h-24 mx-auto mb-4 text-emerald-600 opacity-50"></i>
                            <p class="text-gray-600 dark:text-gray-400 font-medium">Mapa de Localização</p>
                            <p class="text-sm text-gray-500 dark:text-gray-500 mt-2">Av. mefemasys, Expansão, Mozambique</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-16 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Perguntas Frequentes</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="help-circle" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Como posso agendar uma visita?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Pode agendar uma visita através do formulário acima, por telefone ou email. Teremos prazer em mostrar as nossas instalações.
                        </p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="help-circle" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Qual é o processo de admissão?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            O processo inclui preenchimento de formulário, apresentação de documentos e entrevista. Consulte a página de Admissões para mais detalhes.
                        </p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="help-circle" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Oferecem transporte escolar?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Sim, disponibilizamos serviço de transporte escolar com rotas que cobrem toda a cidade de Mozambique. Contacte-nos para mais informações.
                        </p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <i data-lucide="help-circle" class="w-5 h-5 text-[#1B8B6F]"></i>
                            Há bolsas de estudo disponíveis?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Sim, oferecemos bolsas de mérito e de apoio social. Consulte a nossa página de Bolsas de Estudo para critérios e candidaturas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>