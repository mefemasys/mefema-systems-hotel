<?php
require_once __DIR__ . '/../config/bootstrap.php';
$page_title = 'Tarifas e Promoções';
$page_description = 'Confira nossas tarifas e promoções especiais. Melhores preços para reservas antecipadas.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Reservar Estadia</h1>
                <p class="text-xl text-gray-200">Garanta o seu lugar no paraíso.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-lg">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Data de Check-in</label>
                                <input type="date" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#B8860B]">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Data de Check-out</label>
                                <input type="date" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#B8860B]">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Tipo de Alojamento</label>
                                <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#B8860B]">
                                    <option value="">Selecione</option>
                                    <option>Hotel - Quarto Standard</option>
                                    <option>Hotel - Quarto Deluxe</option>
                                    <option>Hotel - Suíte Presidencial</option>
                                    <option>Motel - Suíte Simples</option>
                                    <option>Motel - Suíte Luxo</option>
                                    <option>Residencial - Quarto Familiar</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Número de Hóspedes</label>
                                <input type="number" min="1" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#B8860B]" placeholder="Ex: 2">
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl">
                            <h3 class="font-bold text-lg mb-4">Seus Dados</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#B8860B]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email *</label>
                                    <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#B8860B]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Telefone *</label>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:border-[#B8860B]" placeholder="+258">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-[#B8860B] text-white py-4 rounded-lg font-bold hover:bg-[#966d09] transition-all shadow-lg text-lg">
                            Confirmar Pedido de Reserva
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
