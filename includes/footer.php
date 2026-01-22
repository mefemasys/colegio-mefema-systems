<?php
// footer.php
require_once __DIR__ . '/../config/url-config.php';
?>

<footer class="bg-gray-50 dark:bg-gray-950 pt-20 pb-10 border-t border-gray-200 dark:border-gray-800">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 bg-[#1B8B6F] rounded flex items-center justify-center text-white font-bold">CB</div>
                    <span class="text-xl font-bold">Colégio MEFEMA Systems</span>
                </div>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6">
                    Instituição de ensino dedicada à formação de excelência em Mozambique. Educar é a nossa paixão, o futuro é o nosso destino.
                </p>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-sm uppercase tracking-wider">Links Rápidos</h4>
                <ul class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="<?= url('pages/sobre') ?>" class="hover:text-[#1B8B6F] transition-colors">Quem Somos</a></li>
                    <li><a href="<?= url('pages/missao-valores') ?>" class="hover:text-[#1B8B6F] transition-colors">Missão e Visão</a></li>
                    <li><a href="<?= url('pages/docentes') ?>" class="hover:text-[#1B8B6F] transition-colors">Corpo Docente</a></li>
                    <li><a href="<?= url('pages/galeria') ?>" class="hover:text-[#1B8B6F] transition-colors">Galeria de Fotos</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-sm uppercase tracking-wider">Pedagogia</h4>
                <ul class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="<?= url('pages/atividades-extra') ?>" class="hover:text-[#1B8B6F] transition-colors">Atividades Extra</a></li>
                    <li><a href="<?= url('pages/calendario-escolar') ?>" class="hover:text-[#1B8B6F] transition-colors">Calendário Escolar</a></li>
                    <li><a href="<?= url('pages/portal-aluno') ?>" class="hover:text-[#1B8B6F] transition-colors">Portal do Aluno</a></li>
                    <li><a href="<?= url('pages/recursos-didaticos') ?>" class="hover:text-[#1B8B6F] transition-colors">Recursos Didáticos</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-sm uppercase tracking-wider">Secretaria</h4>
                <ul class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="<?= url('pages/processo-admissao') ?>" class="hover:text-[#1B8B6F] transition-colors">Processo de Admissão</a></li>
                    <li><a href="<?= url('pages/tabela-propinas') ?>" class="hover:text-[#1B8B6F] transition-colors">Tabela de Propinas</a></li>
                    <li><a href="<?= url('pages/regulamento-interno') ?>" class="hover:text-[#1B8B6F] transition-colors">Regulamento Interno</a></li>
                    <li><a href="<?= url('pages/bolsas-estudo') ?>" class="hover:text-[#1B8B6F] transition-colors">Bolsas de Estudo</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-10 border-t border-gray-200 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-400 text-xs">
                &copy; 2026 Colégio MEFEMA Systems. Todos os direitos reservados.
            </p>
            <p class="text-gray-400 text-xs">
                Desenvolvido por <a href="https://mefemasys.co.mz" target="_blank" class="text-[#1B8B6F] font-semibold hover:underline">MEFEMA Systems</a>
            </p>
        </div>
    </div>
</footer>
