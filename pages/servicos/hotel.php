<?php
require_once __DIR__ . '/../../config/bootstrap.php';
$page_title = 'Hotel Executivo';
$page_description = 'Quartos confortáveis para viajantes de negócios. Wi-Fi grátis, pequeno-almoço incluído e estacionamento privado.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="hotel" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Hotel Premium</h1>
                </div>
                <p class="text-xl text-gray-200">Luxo, conforto e serviços de classe mundial.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Uma Experiência Inesquecível</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Nosso hotel oferece o que há de melhor em hospitalidade. Com quartos elegantemente decorados, uma piscina relaxante e um restaurante de alta gastronomia, garantimos que sua estadia seja memorável.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Serviço de Quarto 24h</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Pequeno Almoço Buffet Incluído</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Acesso à Piscina e Ginásio</span>
                            </li>
                        </ul>
                        <a href="<?= url('pages/reservas') ?>" class="bg-[#B8860B] text-white px-8 py-3 rounded-lg font-bold hover:bg-[#966d09] transition-all">
                            Reservar Agora
                        </a>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl h-96">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" alt="Hotel Premium" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
