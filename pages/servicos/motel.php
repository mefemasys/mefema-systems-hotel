<?php
require_once __DIR__ . '/../../config/bootstrap.php';
$page_title = 'Motel Romântico';
$page_description = 'Suítes temáticas para momentos especiais. Privacidade, jacuzzi e todo o conforto para casais.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="shield-check" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Motel Discreto</h1>
                </div>
                <p class="text-xl text-gray-200">Privacidade, conforto e discrição total.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="rounded-2xl overflow-hidden shadow-xl h-96">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" alt="Motel Discreto" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Seu Refúgio Particular</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Projetado para oferecer o máximo de privacidade e conforto, nosso motel conta com suítes modernas, garagem privativa e um serviço discreto disponível 24 horas por dia.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Entrada e Saída Discreta</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Suítes com Hidromassagem</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Serviço de Bar e Cozinha 24h</span>
                            </li>
                        </ul>
                        <a href="<?= url('pages/reservas') ?>" class="bg-[#B8860B] text-white px-8 py-3 rounded-lg font-bold hover:bg-[#966d09] transition-all">
                            Ver Suítes
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
