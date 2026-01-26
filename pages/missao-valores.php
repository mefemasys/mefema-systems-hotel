<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section class="pt-32 pb-16 hero-gradient text-white">
            <div class="max-w-6xl mx-auto px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Missão e Valores</h1>
                <p class="text-xl text-orange-100">Os princípios que nos guiam em cada evento.</p>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-brand-primary rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Missão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Proporcionar experiências gastronómicas de excelência, superando as expectativas dos nossos clientes através da qualidade inegociável dos nossos ingredientes, da inovação constante nas nossas receitas e de um serviço impecável que celebra a arte de bem servir.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-brand-secondary rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="eye" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Visão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Ser reconhecida como a empresa de catering líder e mais admirada em Moçambique, destacando-se pela autenticidade dos sabores, pela sofisticação das apresentações e pela capacidade de transformar qualquer evento num momento memorável e único.
                        </p>
                    </div>
                </div>

                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Nossos Valores</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-brand-primary transition-all">
                            <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="award" class="w-6 h-6 text-brand-primary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Qualidade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Buscamos a perfeição em cada ingrediente e em cada etapa da preparação dos nossos pratos.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-brand-primary transition-all">
                            <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="heart" class="w-6 h-6 text-brand-secondary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Paixão</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Amamos o que fazemos e essa paixão reflete-se no sabor e no cuidado que dedicamos a cada cliente.</p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-brand-primary transition-all">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center mb-4">
                                <i data-lucide="shield-check" class="w-6 h-6 text-brand-accent"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Integridade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Agimos com total transparência, honestidade e ética em todas as nossas relações comerciais.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-brand-primary to-brand-secondary rounded-2xl p-12 text-white text-center">
                    <h2 class="text-3xl font-bold mb-4">Planeie o Seu Próximo Evento Connosco</h2>
                    <p class="text-orange-100 mb-8 max-w-2xl mx-auto">Venha descobrir como podemos tornar a sua celebração num momento verdadeiramente inesquecível.</p>
                    <a href="<?= url('pages/orcamentos') ?>" class="inline-block bg-white text-brand-primary px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-all">
                        Pedir Orçamento
                    </a>
                </div>

            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
