<?php
require_once __DIR__ . '/../config/url-config.php';
?>

<header class="fixed w-full z-50 glass-nav bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-[#B8860B] rounded-md flex items-center justify-center text-white font-bold">
                MH
            </div>
            <span class="font-bold text-lg">MEFEMA <span class="text-[#B8860B]">Hospitality</span></span>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold">
            <a href="<?= url('') ?>" class="hover:text-[#B8860B]">Início</a>

            <!-- Dropdown Alojamento -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-[#B8860B]">
                    Alojamento <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-56 pt-4 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/quartos') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Nossos Quartos</a>
                        <a href="<?= url('pages/servicos/hotel') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Hotel</a>
                        <a href="<?= url('pages/servicos/motel') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Motel</a>
                        <a href="<?= url('pages/servicos/residencial') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Residencial</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Institucional -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-[#B8860B]">
                    Institucional <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-56 pt-4 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/sobre') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Sobre Nós</a>
                        <a href="<?= url('pages/missao-valores') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Missão e Valores</a>
                        <a href="<?= url('pages/galeria') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Galeria</a>
                    </div>
                </div>
            </div>

            <a href="<?= url('pages/contacto') ?>" class="hover:text-[#B8860B]">Contacto</a>

            <button id="dark-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <i data-lucide="moon" class="w-4 h-4"></i>
            </button>

            <a href="<?= url('pages/reservas') ?>" class="bg-[#B8860B] text-white px-5 py-2 rounded-lg hover:bg-[#966d09] transition-colors">
                Reservar Agora
            </a>
        </nav>

        <!-- Mobile Toggle -->
        <button id="open-menu" class="md:hidden">
            <i data-lucide="menu" class="w-7 h-7"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <aside id="mobile-menu"
        class="fixed inset-y-0 right-0 w-72 bg-white dark:bg-gray-900
               transform translate-x-full transition-transform duration-300
               flex flex-col p-6 z-[60] shadow-lg">

        <div class="flex justify-between items-center mb-8">
            <span class="text-lg font-bold">Menu</span>
            <button id="close-menu">
                <i data-lucide="x" class="w-7 h-7"></i>
            </button>
        </div>

        <nav class="flex flex-col gap-4 text-lg font-semibold">
            <a href="<?= url('') ?>">Início</a>
            <a href="<?= url('pages/quartos') ?>">Quartos</a>
            <a href="<?= url('pages/sobre') ?>">Sobre Nós</a>
            <a href="<?= url('pages/contacto') ?>">Contacto</a>
            <a href="<?= url('pages/reservas') ?>" class="text-[#B8860B]">Reservas</a>
        </nav>
    </aside>
</header>
