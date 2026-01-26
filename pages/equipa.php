<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nossa Equipa</h1>
                <p class="text-xl text-orange-100">Conheça os talentos por trás de cada sabor.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold mb-6">Profissionais Apaixonados</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Nossa equipa é composta por chefs experientes, gestores de eventos dedicados e um staff de serviço impecável, todos comprometidos em tornar o seu evento um sucesso absoluto.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-orange-400 to-orange-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Chef Alberto</h3>
                            <p class="text-brand-primary text-sm font-semibold mb-3">Chef Executivo</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Especialista em fusão de sabores tradicionais moçambicanos com técnicas internacionais.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-xs rounded-full">Gastronomia</span>
                                <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-xs rounded-full">Liderança</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-red-400 to-red-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Maria Silva</h3>
                            <p class="text-brand-secondary text-sm font-semibold mb-3">Gestora de Eventos</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Especialista em planeamento e logística, garantindo que cada detalhe seja perfeito.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs rounded-full">Planeamento</span>
                                <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs rounded-full">Logística</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="bg-gradient-to-br from-emerald-400 to-emerald-600 h-48 flex items-center justify-center">
                            <i data-lucide="user" class="w-24 h-24 text-white opacity-30"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Chef Ricardo</h3>
                            <p class="text-brand-accent text-sm font-semibold mb-3">Mestre de Grelhados</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Especialista em carnes e peixes grelhados, trazendo o sabor autêntico do fogo para o seu evento.</p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-xs rounded-full">Grelhados</span>
                                <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-xs rounded-full">Tradição</span>
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
