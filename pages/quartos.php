<?php
require_once __DIR__ . '/../config/bootstrap.php';
$page_title = 'Hotel Executivo';
$page_description = 'Quartos confortáveis para viajantes de negócios. Wi-Fi grátis, pequeno-almoço incluído e estacionamento privado.';


get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nossos Quartos</h1>
                <p class="text-xl text-gray-200">Conforto e elegância em cada detalhe.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Quarto Standard -->
                    <div class="card-hotel">
                        <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80" alt="Quarto Standard" class="card-img">
                        <div class="card-body">
                            <h3 class="text-2xl font-bold mb-2">Quarto Standard</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Ideal para viagens de negócios ou estadias curtas. Confortável e funcional.</p>
                            <a href="<?= url('pages/reservas') ?>" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>

                    <!-- Quarto Deluxe -->
                    <div class="card-hotel">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=800&q=80" alt="Quarto Deluxe" class="card-img">
                        <div class="card-body">
                            <h3 class="text-2xl font-bold mb-2">Quarto Deluxe</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Mais espaço e uma vista deslumbrante da cidade. Perfeito para relaxar.</p>
                            <a href="<?= url('pages/reservas') ?>" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>

                    <!-- Suíte Presidencial -->
                    <div class="card-hotel">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=800&q=80" alt="Suíte Presidencial" class="card-img">
                        <div class="card-body">
                            <h3 class="text-2xl font-bold mb-2">Suíte Presidencial</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">O máximo em luxo e exclusividade, com sala de estar e serviços VIP.</p>
                            <a href="<?= url('pages/reservas') ?>" class="btn btn-primary">Reservar</a>
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
