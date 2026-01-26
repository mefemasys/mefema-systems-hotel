<?php
require_once __DIR__ . '/../config/bootstrap.php';
$page_title = 'Sobre Nós';
$page_description = 'Conheça a história do Hotel MEFEMA Systems, nossa missão, valores e compromisso com a excelência em hospedagem.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Sobre o MEFEMA Hospitality</h1>
                <p class="text-xl text-gray-200">Uma tradição de bem servir e acolher em Moçambique.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Nossa História</h2>
                        <div class="space-y-4 text-gray-600 dark:text-gray-400">
                            <p>O MEFEMA Hospitality nasceu da visão de criar um ecossistema de alojamento que atendesse a todas as necessidades do viajante moderno em Moçambique. Desde o luxo de um hotel premium até a discrição de um motel e o acolhimento de uma residencial familiar.</p>
                            <p>Ao longo dos anos, consolidamos nossa marca como sinônimo de confiança, segurança e conforto. Nossa dedicação aos detalhes e o treinamento rigoroso de nossa equipe garantem que cada hóspede se sinta em casa, independentemente do tipo de estadia escolhida.</p>
                            <p>Hoje, operamos múltiplas unidades, sempre mantendo o padrão de excelência que nos tornou referência no setor de hospitalidade.</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden h-96">
                        <img src="https://images.unsplash.com/photo-1551882547-ff43c63fe78d?auto=format&fit=crop&w=800&q=80" alt="Equipe do Hotel" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-8 text-center">Por que escolher o MEFEMA Hospitality?</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#B8860B] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="shield-check" class="w-8 h-8 text-[#B8860B]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Segurança Total</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Monitoramento 24h e protocolos rigorosos para sua tranquilidade.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#B8860B] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="star" class="w-8 h-8 text-[#B8860B]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Serviço Premium</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Atendimento personalizado focado na satisfação do hóspede.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-[#B8860B] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="map-pin" class="w-8 h-8 text-[#B8860B]"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Localização Privilegiada</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Unidades situadas nos melhores pontos estratégicos da cidade.</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#B8860B] mb-2">15+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Anos de Experiência</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#B8860B] mb-2">5000+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Hóspedes Felizes</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#B8860B] mb-2">50+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Quartos Modernos</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <div class="text-4xl font-bold text-[#B8860B] mb-2">24/7</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Suporte ao Hóspede</div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
