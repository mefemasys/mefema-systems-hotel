<?php
require_once __DIR__ . '/../../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <i data-lucide="home" class="w-12 h-12"></i>
                    <h1 class="text-4xl md:text-5xl font-bold">Residencial Familiar</h1>
                </div>
                <p class="text-xl text-gray-200">O seu lar longe de casa.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Conforto para Toda a Família</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Nossa residencial oferece um ambiente acolhedor e seguro, ideal para estadias prolongadas, viagens em família ou grupos que buscam uma opção económica sem abrir mão da qualidade.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Quartos Familiares Espaçosos</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Cozinha Comunitária Equipada</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="text-[#B8860B]"></i>
                                <span>Ambiente Seguro e Familiar</span>
                            </li>
                        </ul>
                        <a href="<?= url('pages/reservas') ?>" class="bg-[#B8860B] text-white px-8 py-3 rounded-lg font-bold hover:bg-[#966d09] transition-all">
                            Consultar Disponibilidade
                        </a>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl h-96">
                        <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?auto=format&fit=crop&w=800&q=80" alt="Residencial Familiar" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
