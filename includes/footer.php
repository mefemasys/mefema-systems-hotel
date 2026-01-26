<?php
require_once __DIR__ . '/../config/url-config.php';
?>
<footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-2 space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#B8860B] rounded-md flex items-center justify-center text-white font-bold">
                        MH
                    </div>
                    <span class="font-bold text-xl">MEFEMA <span class="text-[#B8860B]">Hospitality</span></span>
                </div>
                <p class="text-gray-400 max-w-md">
                    Oferecendo excelência em hospitalidade em Moçambique. Hotel, Motel e Residencial com o conforto e a segurança que você merece.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#B8860B] transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#B8860B] transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#B8860B] transition-colors">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h4 class="font-bold mb-6">Links Rápidos</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li><a href="<?= url('') ?>" class="hover:text-[#B8860B]">Início</a></li>
                    <li><a href="<?= url('pages/quartos') ?>" class="hover:text-[#B8860B]">Nossos Quartos</a></li>
                    <li><a href="<?= url('pages/sobre') ?>" class="hover:text-[#B8860B]">Sobre Nós</a></li>
                    <li><a href="<?= url('pages/contacto') ?>" class="hover:text-[#B8860B]">Contacto</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-6">Contacto</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-[#B8860B] shrink-0"></i>
                        <span>Av. mefemasys, Expansão, Moçambique</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-[#B8860B] shrink-0"></i>
                        <span>+258 84 123 4567</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-[#B8860B] shrink-0"></i>
                        <span>comercial@mefemasys.co.mz</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
            <p>&copy; <?= date('Y') ?> MEFEMA Hospitality. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="https://mefemasys.co.mz" class="text-[#B8860B]">MEFEMA Systems</a></p>
        </div>
    </div>
</footer>
</body>
</html>
