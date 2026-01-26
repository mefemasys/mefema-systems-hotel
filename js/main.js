/**
 * COLÉGIO MEFEMA Systems - JAVASCRIPT PRINCIPAL
 * Funcionalidades: Dark Mode, Navegação, Interatividade
 */

// ============================================
// DARK MODE
// ============================================

class ThemeManager {
    constructor() {
        this.STORAGE_KEY = 'colegio-MEFEMA Systems-theme';
        this.DARK_CLASS = 'dark-mode';
        this.init();
    }

    init() {
        // Verificar preferência salva ou preferência do sistema
        const savedTheme = localStorage.getItem(this.STORAGE_KEY);
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme) {
            this.setTheme(savedTheme);
        } else if (prefersDark) {
            this.setTheme('dark');
        } else {
            this.setTheme('light');
        }

        // Listener para botão de tema
        const themeToggle = document.getElementById('themeToggle');
        if (themeToggle) {
            themeToggle.addEventListener('click', () => this.toggle());
        }

        // Listener para mudanças de preferência do sistema
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem(this.STORAGE_KEY)) {
                this.setTheme(e.matches ? 'dark' : 'light');
            }
        });
    }

    setTheme(theme) {
        const isDark = theme === 'dark';
        const body = document.body;

        if (isDark) {
            body.classList.add(this.DARK_CLASS);
        } else {
            body.classList.remove(this.DARK_CLASS);
        }

        localStorage.setItem(this.STORAGE_KEY, theme);
        this.updateMetaThemeColor(isDark);
    }

    toggle() {
        const isDark = document.body.classList.contains(this.DARK_CLASS);
        this.setTheme(isDark ? 'light' : 'dark');
    }

    updateMetaThemeColor(isDark) {
        let metaThemeColor = document.querySelector('meta[name="theme-color"]');
        if (!metaThemeColor) {
            metaThemeColor = document.createElement('meta');
            metaThemeColor.name = 'theme-color';
            document.head.appendChild(metaThemeColor);
        }
        metaThemeColor.content = isDark ? '#1a1a1a' : '#1B8B6F';
    }
}

// ============================================
// NAVEGAÇÃO SUAVE
// ============================================

class SmoothScroll {
    constructor() {
        this.init();
    }

    init() {
        // Interceptar cliques em links internos
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                
                // Ignorar se for apenas "#"
                if (href === '#') {
                    e.preventDefault();
                    return;
                }

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    this.scrollToElement(target);
                }
            });
        });
    }

    scrollToElement(element) {
        const headerHeight = document.querySelector('.header')?.offsetHeight || 70;
        const targetPosition = element.offsetTop - headerHeight;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}

// ============================================
// HEADER STICKY COM EFEITO
// ============================================

class StickyHeader {
    constructor() {
        this.header = document.getElementById('header');
        this.lastScrollY = 0;
        this.init();
    }

    init() {
        window.addEventListener('scroll', () => this.handleScroll());
    }

    handleScroll() {
        const scrollY = window.scrollY;
        
        // Adicionar sombra quando scroll > 0
        if (scrollY > 0) {
            this.header.style.boxShadow = 'var(--shadow-lg)';
        } else {
            this.header.style.boxShadow = 'var(--shadow-sm)';
        }

        this.lastScrollY = scrollY;
    }
}

// ============================================
// ANIMAÇÕES AO SCROLL
// ============================================

class ScrollAnimations {
    constructor() {
        this.init();
    }

    init() {
        // Usar Intersection Observer para detectar elementos visíveis
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeIn 0.6s ease-out forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observar todos os cards
        document.querySelectorAll('.card').forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });

        // Observar seções
        document.querySelectorAll('.section').forEach((section, index) => {
            section.style.animation = `fadeIn 0.8s ease-out ${index * 0.1}s forwards`;
        });
    }
}

// ============================================
// MOBILE MENU (OPCIONAL)
// ============================================

class MobileMenu {
    constructor() {
        this.navMenu = document.querySelector('.nav-menu');
        this.init();
    }

    init() {
        // Fechar menu ao clicar em um link
        if (this.navMenu) {
            this.navMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    this.closeMenu();
                });
            });
        }
    }

    closeMenu() {
        // Implementação se necessário
    }
}

// ============================================
// INICIALIZAÇÃO
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    // Inicializar todos os módulos
    new ThemeManager();
    new SmoothScroll();
    new StickyHeader();
    new ScrollAnimations();
    new MobileMenu();

    console.log('✓ Colégio MEFEMA Systems - Website carregado com sucesso!');
});

// ============================================
// UTILIDADES
// ============================================

// Função para adicionar classe ao elemento mais próximo
function addClassToClosest(element, selector, className) {
    const closest = element.closest(selector);
    if (closest) {
        closest.classList.add(className);
    }
}

// Função para remover classe do elemento mais próximo
function removeClassFromClosest(element, selector, className) {
    const closest = element.closest(selector);
    if (closest) {
        closest.classList.remove(className);
    }
}

// Função para verificar se elemento está em viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
