<?php
require_once __DIR__ . '/../config/bootstrap.php';
$page_title = 'Galeria';
$page_description = 'Veja fotos dos nossos quartos, instalações e acomodações. Conheça o Hotel MEFEMA Systems.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeria de Acomodações</h1>
                <p class="text-xl text-orange-100">Conforto e elegância capturados em cada detalhe.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="flex flex-wrap gap-4 justify-center mb-12">
                    <button class="px-6 py-2 bg-brand-primary text-white rounded-lg font-semibold">Todas</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Hotel Executivo</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Motel Romântico</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Residencial</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Instalações</button>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <!-- Quarto Hotel Executivo -->
                    <div class="group relative bg-gradient-to-br from-orange-100 to-orange-200 dark:from-orange-900/30 dark:to-orange-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="bed-double" class="w-16 h-16 mx-auto mb-3 text-brand-primary opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Quarto Executivo Luxo</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Suíte Romântica -->
                    <div class="group relative bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/30 dark:to-red-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="heart" class="w-16 h-16 mx-auto mb-3 text-brand-secondary opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Suíte Romântica com Jacuzzi</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Quarto Residencial -->
                    <div class="group relative bg-gradient-to-br from-emerald-100 to-emerald-200 dark:from-emerald-900/30 dark:to-emerald-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="home" class="w-16 h-16 mx-auto mb-3 text-brand-accent opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Quarto Residencial Familiar</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Recepção -->
                    <div class="group relative bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="building-2" class="w-16 h-16 mx-auto mb-3 text-blue-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Recepção e Lobby</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Restaurante -->
                    <div class="group relative bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900/30 dark:to-purple-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="utensils" class="w-16 h-16 mx-auto mb-3 text-purple-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Restaurante</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Piscina -->
                    <div class="group relative bg-gradient-to-br from-cyan-100 to-cyan-200 dark:from-cyan-900/30 dark:to-cyan-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="waves" class="w-16 h-16 mx-auto mb-3 text-cyan-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Área de Lazer e Piscina</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Estacionamento -->
                    <div class="group relative bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800/30 dark:to-gray-700/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="car" class="w-16 h-16 mx-auto mb-3 text-gray-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Estacionamento Privado</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Café da Manhã -->
                    <div class="group relative bg-gradient-to-br from-amber-100 to-amber-200 dark:from-amber-900/30 dark:to-amber-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="coffee" class="w-16 h-16 mx-auto mb-3 text-amber-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Pequeno-Almoço Buffet</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>

                    <!-- Ginásio -->
                    <div class="group relative bg-gradient-to-br from-rose-100 to-rose-200 dark:from-rose-900/30 dark:to-rose-800/30 rounded-xl overflow-hidden aspect-square cursor-pointer hover:shadow-2xl transition-all">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="dumbbell" class="w-16 h-16 mx-auto mb-3 text-rose-600 opacity-50"></i>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Ginásio e Fitness</p>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i data-lucide="zoom-in" class="w-10 h-10 text-white"></i>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="px-8 py-3 bg-gray-100 dark:bg-gray-800 rounded-lg font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors inline-flex items-center gap-2">
                        <i data-lucide="image-plus" class="w-5 h-5"></i>
                        Ver Mais Fotos
                    </button>
                </div>

            </div>
        </section>

        <!-- Seção de Testemunhos -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">O que dizem os nossos hóspedes</h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">"Excelente localização e quartos muito confortáveis. O pequeno-almoço é maravilhoso!"</p>
                        <p class="font-semibold">João Silva</p>
                        <p class="text-sm text-gray-500">Hotel Executivo</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">"A suíte romântica superou todas as expectativas. Momento inesquecível!"</p>
                        <p class="font-semibold">Maria Santos</p>
                        <p class="text-sm text-gray-500">Motel Romântico</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">"Ótima relação qualidade-preço. Perfeito para longas estadias em família."</p>
                        <p class="font-semibold">Carlos Mendes</p>
                        <p class="text-sm text-gray-500">Residencial Familiar</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>