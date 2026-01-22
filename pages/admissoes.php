<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 bg-gradient-to-br from-[#1B8B6F] to-emerald-700 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="max-w-3xl">
                    <span class="inline-block px-4 py-1 bg-white/20 rounded-md text-sm font-semibold mb-4">INSCRIÇÕES ABERTAS 2026</span>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Admissões</h1>
                    <p class="text-xl text-emerald-100">Junte-se à família Colégio MEFEMA Systems e construa um futuro brilhante</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="bg-gradient-to-r from-blue-50 to-emerald-50 dark:from-blue-900/20 dark:to-emerald-900/20 rounded-2xl p-10 mb-20">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-3xl font-bold mb-4">Matrículas Abertas para 2026</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Garanta a vaga do seu filho numa das instituições de ensino mais conceituadas de Mozambique. Vagas limitadas!
                            </p>
                            <a href="#formulario" class="inline-block bg-[#1B8B6F] text-white px-8 py-4 rounded-lg font-bold hover:bg-emerald-700 transition-all shadow-lg">
                                Inscrever Agora
                            </a>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                            <h3 class="font-bold text-lg mb-4">Prazos Importantes</h3>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center shrink-0">
                                        <i data-lucide="calendar" class="w-5 h-5 text-[#1B8B6F]"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">Inscrições</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Janeiro - Fevereiro 2026</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center shrink-0">
                                        <i data-lucide="file-text" class="w-5 h-5 text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">Entrevistas</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Fevereiro - Março 2026</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center shrink-0">
                                        <i data-lucide="check-circle" class="w-5 h-5 text-purple-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">Início das Aulas</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Fevereiro 2026</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Processo de Admissão</h2>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-[#1B8B6F]">1</span>
                            </div>
                            <h3 class="font-bold mb-2">Pré-Inscrição</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Preencha o formulário online ou presencial</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-blue-600">2</span>
                            </div>
                            <h3 class="font-bold mb-2">Documentação</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Entregue os documentos necessários</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-purple-600">3</span>
                            </div>
                            <h3 class="font-bold mb-2">Entrevista</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Conheça a escola e a equipe pedagógica</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-yellow-600">4</span>
                            </div>
                            <h3 class="font-bold mb-2">Matrícula</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Confirmação e pagamento da matrícula</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border-2 border-gray-100 dark:border-gray-700">
                        <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                            <i data-lucide="file-check" class="w-6 h-6 text-[#1B8B6F]"></i>
                            Documentos Necessários
                        </h2>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Certidão de nascimento (cópia autenticada)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">BI dos encarregados de educação (cópia)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Atestado médico atualizado</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Boletim de notas (ano anterior) - se aplicável</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">2 fotografias 3x4 atualizadas</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-[#1B8B6F] shrink-0 mt-0.5"></i>
                                <span class="text-gray-600 dark:text-gray-400">Comprovativo de residência</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-blue-50 dark:from-emerald-900/20 dark:to-blue-900/20 p-8 rounded-2xl">
                        <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                            <i data-lucide="banknote" class="w-6 h-6 text-[#1B8B6F]"></i>
                            Investimento
                        </h2>
                        <div class="space-y-4">
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Taxa de Matrícula</p>
                                <p class="text-2xl font-bold text-[#1B8B6F]">A definir</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Propinas Mensais</p>
                                <p class="text-2xl font-bold text-[#1B8B6F]">A partir de...</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Varia conforme o nível de ensino</p>
                            </div>
                            <a href="<?= url('pages/tabela-propinas') ?>" class="block text-center bg-[#1B8B6F] text-white px-6 py-3 rounded-lg font-bold hover:bg-emerald-700 transition-all">
                                Ver Tabela Completa
                            </a>
                        </div>
                    </div>
                </div>

                <div id="formulario" class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8 md:p-12">
                    <h2 class="text-3xl font-bold mb-8 text-center">Formulário de Pré-Inscrição</h2>
                    <form class="max-w-3xl mx-auto space-y-6">
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl">
                            <h3 class="font-bold text-lg mb-4">Dados do Aluno</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Data de Nascimento *</label>
                                    <input type="date" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Género *</label>
                                    <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                        <option value="">Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Nível de Ensino *</label>
                                    <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                        <option value="">Selecione</option>
                                        <option>Pré-Escolar</option>
                                        <option>1ª Classe</option>
                                        <option>2ª Classe</option>
                                        <option>3ª Classe</option>
                                        <option>4ª Classe</option>
                                        <option>5ª Classe</option>
                                        <option>6ª Classe</option>
                                        <option>7ª Classe</option>
                                        <option>8ª Classe</option>
                                        <option>9ª Classe</option>
                                        <option>10ª Classe</option>
                                        <option>11ª Classe</option>
                                        <option>12ª Classe</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl">
                            <h3 class="font-bold text-lg mb-4">Dados do Encarregado de Educação</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Grau de Parentesco *</label>
                                    <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                        <option value="">Selecione</option>
                                        <option>Pai</option>
                                        <option>Mãe</option>
                                        <option>Tutor Legal</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Telefone *</label>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]" placeholder="+258 XX XXX XXXX">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email *</label>
                                    <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F]">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl">
                            <h3 class="font-bold text-lg mb-4">Informações Adicionais</h3>
                            <div>
                                <label class="block text-sm font-medium mb-2">Observações</label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#1B8B6F] resize-none" placeholder="Informações adicionais relevantes (opcional)"></textarea>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <input type="checkbox" required class="mt-1" id="terms">
                            <label for="terms" class="text-sm text-gray-600 dark:text-gray-400">
                                Declaro que as informações fornecidas são verdadeiras e estou ciente do <a href="<?= url('pages/regulamento-interno') ?>" class="text-[#1B8B6F] underline">Regulamento Interno</a> do Colégio MEFEMA Systems.
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-[#1B8B6F] text-white py-4 rounded-lg font-bold text-lg hover:bg-emerald-700 transition-all shadow-lg hover:shadow-xl">
                            Enviar Pré-Inscrição
                        </button>

                        <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                            Após submeter, entraremos em contacto dentro de 48 horas.
                        </p>
                    </form>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>