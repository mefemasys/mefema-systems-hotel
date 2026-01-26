<?php
require_once __DIR__ . '/../config/bootstrap.php';
$page_title = 'Contacto';
$page_description = 'Entre em contacto com o Hotel MEFEMA Systems. Telefone, email e localização em Maputo.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Entre em Contacto</h1>
                <p class="text-xl text-orange-100">Estamos aqui para ajudar a planear o seu evento de sonho.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-8">Informações de Contacto</h2>
                        
                        <div class="space-y-6 mb-10">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-6 h-6 text-brand-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Localização</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Av. mefemasys, Expansão<br>Moçambique</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-6 h-6 text-brand-secondary"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Telefones</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        +258 84 123 4567<br>
                                        +258 85 123 4567
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-6 h-6 text-brand-accent"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">comercial@mefemasys.co.mz</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8">
                        <h2 class="text-2xl font-bold mb-6">Peça um Orçamento</h2>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-brand-primary transition-colors" placeholder="Seu nome">
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email *</label>
                                    <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-brand-primary transition-colors" placeholder="email@exemplo.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Telefone *</label>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-brand-primary transition-colors" placeholder="+258 XX XXX XXXX">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Tipo de Evento *</label>
                                <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-brand-primary transition-colors">
                                    <option value="">Selecione o tipo de evento</option>
                                    <option>Evento Corporativo</option>
                                    <option>Casamento</option>
                                    <option>Festa Particular</option>
                                    <option>Outro</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Mensagem *</label>
                                <textarea required rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-brand-primary transition-colors resize-none" placeholder="Fale-nos sobre o seu evento..."></textarea>
                            </div>

                            <button type="submit" class="w-full bg-brand-primary text-white py-4 rounded-lg font-bold hover:bg-brand-secondary transition-all shadow-lg hover:shadow-xl">
                                Enviar Pedido
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
