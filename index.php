<?php
require_once __DIR__ . '/config/bootstrap.php';
$page_title = 'Início';
$page_description = 'Hotel MEFEMA Systems - Conforto que Acolhe. Hotel Executivo, Motel Romântico e Residencial Familiar em Maputo.';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section id="inicio" class="pt-32 pb-20 md:pt-40 md:pb-32 hero-gradient text-white relative">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <div class="max-w-6xl mx-auto px-6 relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 text-center md:text-left">
                        <span class="inline-block px-4 py-1 bg-white/20 rounded-md text-sm font-semibold tracking-wide backdrop-blur-sm">RESERVAS ABERTAS PARA 2026</span>
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                            Conforto que <span class="text-orange-200">Acolhe</span> em cada estadia.
                        </h1>
                        <p class="text-lg text-orange-50 text-balance opacity-90">
                            A MEFEMA Hospitality em Moçambique oferece experiências de hospedagem de excelência, onde o conforto e a hospitalidade se unem para tornar a sua estadia inesquecível.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="#orcamentos" class="bg-white text-[#B8860B] px-8 py-3 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all flex items-center justify-center gap-2">
                                Fazer Reserva <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                            <a href="#sobre" class="border-2 border-white/30 hover:bg-white/10 px-8 py-3 rounded-lg font-bold text-lg transition-all text-center">
                                Conhecer o Estabelecimento
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block relative">
                        <div class="w-full aspect-square bg-orange-400/20 rounded-xl border border-white/20 p-4">
                            <div class="w-full h-full bg-white/10 rounded-lg flex items-center justify-center overflow-hidden">
                                 <div class="text-center p-8">
                                    <i data-lucide="bed-double" class="w-24 h-24 mx-auto mb-4 opacity-50"></i>
                                    <p class="text-sm font-medium italic">"Excelência em Hospedagem em Moçambique"</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#B8860B] mb-1">+5000</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Hóspedes Atendidos</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#DC2626] mb-1">100%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Satisfação Garantida</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">10+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Anos de Experiência</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#B8860B] mb-1">50+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Quartos Disponíveis</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="py-24 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Nossos Serviços</h2>
                    <p class="text-gray-600 dark:text-gray-400">Oferecemos acomodações completas para todos os tipos de necessidades.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-orange-50 dark:bg-orange-900/30 text-orange-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Hotel Executivo</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Quartos confortáveis para viajantes de negócios e turismo com todas as comodidades que você precisa.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Wi-Fi Grátis</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Pequeno-almoço Incluído</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Estacionamento Privado</li>
                        </ul>
                        <a href="#" class="text-[#B8860B] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-[#B8860B] card-hover shadow-lg">
                        <div class="w-12 h-12 bg-red-50 dark:bg-red-900/30 text-red-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="heart" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Motel Romântico</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Suítes especiais com privacidade e ambientes temáticos para momentos inesquecíveis a dois.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Suítes Temáticas</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Jacuzzi Privativo</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Garagem Discreta</li>
                        </ul>
                        <a href="#" class="text-[#DC2626] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="home" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Residencial Familiar</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Acomodações acessíveis e acolhedoras ideais para longas estadias e famílias.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Quartos Espaçosos</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Cozinha Compartilhada</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Tarifas Mensais</li>
                        </ul>
                        <a href="#" class="text-[#1B8B6F] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="bg-gray-900 dark:bg-gray-800 rounded-xl overflow-hidden flex flex-col lg:flex-row text-white">
                    <div class="lg:w-1/2 p-12 md:p-16 space-y-8">
                        <h2 class="text-3xl md:text-4xl font-bold">Entre em Contacto</h2>
                        <p class="text-gray-400">Estamos prontos para recebê-lo. Faça sua reserva sem compromisso.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <p class="text-sm">Av. mefemasys, Expansão, Moçambique</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <div class="text-sm">
                                    <p>+258 84 123 4567</p>
                                    <p>+258 85 123 4567</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <p class="text-sm">reservas@mefemasys.co.mz</p>
                            </div>
                        </div>

                        <div class="pt-8 flex gap-4">
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 bg-gray-800 dark:bg-gray-700/50 p-8 md:p-16">
                        <form class="space-y-4">
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Nome Completo</label>
                                <input type="text" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Email</label>
                                <input type="email" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="email@exemplo.com">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Tipo de Acomodação</label>
                                <select class="w-full bg-white/10 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors text-sm">
                                    <option>Hotel Executivo</option>
                                    <option>Motel Romântico</option>
                                    <option>Residencial Familiar</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Mensagem / Detalhes</label>
                                <textarea rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="Conte-nos sobre suas necessidades de hospedagem..."></textarea>
                            </div>
                            <button class="w-full bg-[#B8860B] py-4 rounded-lg font-bold hover:bg-orange-700 transition-colors shadow-lg">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      
    </main>
<?php
get_part('scripts');
get_part('footer'); ?><?php
require_once __DIR__ . '/config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <section id="inicio" class="pt-32 pb-20 md:pt-40 md:pb-32 hero-gradient text-white relative">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <div class="max-w-6xl mx-auto px-6 relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 text-center md:text-left">
                        <span class="inline-block px-4 py-1 bg-white/20 rounded-md text-sm font-semibold tracking-wide backdrop-blur-sm">RESERVAS ABERTAS PARA 2026</span>
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                            Conforto que <span class="text-orange-200">Acolhe</span> em cada estadia.
                        </h1>
                        <p class="text-lg text-orange-50 text-balance opacity-90">
                            A MEFEMA Hospitality em Moçambique oferece experiências de hospedagem de excelência, onde o conforto e a hospitalidade se unem para tornar a sua estadia inesquecível.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="#orcamentos" class="bg-white text-[#B8860B] px-8 py-3 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all flex items-center justify-center gap-2">
                                Fazer Reserva <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                            <a href="#sobre" class="border-2 border-white/30 hover:bg-white/10 px-8 py-3 rounded-lg font-bold text-lg transition-all text-center">
                                Conhecer o Estabelecimento
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block relative">
                        <div class="w-full aspect-square bg-orange-400/20 rounded-xl border border-white/20 p-4">
                            <div class="w-full h-full bg-white/10 rounded-lg flex items-center justify-center overflow-hidden">
                                 <div class="text-center p-8">
                                    <i data-lucide="bed-double" class="w-24 h-24 mx-auto mb-4 opacity-50"></i>
                                    <p class="text-sm font-medium italic">"Excelência em Hospedagem em Moçambique"</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#B8860B] mb-1">+5000</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Hóspedes Atendidos</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#DC2626] mb-1">100%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Satisfação Garantida</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#1B8B6F] mb-1">10+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Anos de Experiência</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                        <div class="text-4xl font-bold text-[#B8860B] mb-1">50+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Quartos Disponíveis</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="py-24 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Nossos Serviços</h2>
                    <p class="text-gray-600 dark:text-gray-400">Oferecemos acomodações completas para todos os tipos de necessidades.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-orange-50 dark:bg-orange-900/30 text-orange-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Hotel Executivo</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Quartos confortáveis para viajantes de negócios e turismo com todas as comodidades que você precisa.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Wi-Fi Grátis</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Pequeno-almoço Incluído</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-orange-500"></i> Estacionamento Privado</li>
                        </ul>
                        <a href="#" class="text-[#B8860B] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-[#B8860B] card-hover shadow-lg">
                        <div class="w-12 h-12 bg-red-50 dark:bg-red-900/30 text-red-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="heart" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Motel Romântico</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Suítes especiais com privacidade e ambientes temáticos para momentos inesquecíveis a dois.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Suítes Temáticas</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Jacuzzi Privativo</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-500"></i> Garagem Discreta</li>
                        </ul>
                        <a href="#" class="text-[#DC2626] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 card-hover">
                        <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="home" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Residencial Familiar</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Acomodações acessíveis e acolhedoras ideais para longas estadias e famílias.</p>
                        <ul class="space-y-3 mb-8 text-sm text-gray-500 dark:text-gray-400">
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Quartos Espaçosos</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Cozinha Compartilhada</li>
                            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Tarifas Mensais</li>
                        </ul>
                        <a href="#" class="text-[#1B8B6F] font-bold text-sm flex items-center gap-2 hover:gap-4 transition-all">Ver Detalhes <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="bg-gray-900 dark:bg-gray-800 rounded-xl overflow-hidden flex flex-col lg:flex-row text-white">
                    <div class="lg:w-1/2 p-12 md:p-16 space-y-8">
                        <h2 class="text-3xl md:text-4xl font-bold">Entre em Contacto</h2>
                        <p class="text-gray-400">Estamos prontos para recebê-lo. Faça sua reserva sem compromisso.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <p class="text-sm">Av. mefemasys, Expansão, Moçambique</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <div class="text-sm">
                                    <p>+258 84 123 4567</p>
                                    <p>+258 85 123 4567</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5 text-orange-400"></i>
                                </div>
                                <p class="text-sm">reservas@mefemasys.co.mz</p>
                            </div>
                        </div>

                        <div class="pt-8 flex gap-4">
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                            <a href="#" class="p-3 bg-white/5 hover:bg-white/10 rounded-full transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 bg-gray-800 dark:bg-gray-700/50 p-8 md:p-16">
                        <form class="space-y-4">
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Nome Completo</label>
                                <input type="text" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Email</label>
                                <input type="email" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="email@exemplo.com">
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Tipo de Acomodação</label>
                                <select class="w-full bg-white/10 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors text-sm">
                                    <option>Hotel Executivo</option>
                                    <option>Motel Romântico</option>
                                    <option>Residencial Familiar</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-medium mb-2 text-gray-300">Mensagem / Detalhes</label>
                                <textarea rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-orange-400 transition-colors" placeholder="Conte-nos sobre suas necessidades de hospedagem..."></textarea>
                            </div>
                            <button class="w-full bg-[#B8860B] py-4 rounded-lg font-bold hover:bg-orange-700 transition-colors shadow-lg">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      
    </main>
<?php
get_part('scripts');
get_part('footer'); ?>