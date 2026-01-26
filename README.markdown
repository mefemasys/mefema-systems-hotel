# Hotel MEFEMA Systems - Website Institucional

![Banner / Screenshot do site](https://via.placeholder.com/1200x400.png?text=Hotel+MEFEMA+Systems+-+Conforto+que+Acolhe)  
*(substitui por um screenshot real do site quando fizeres upload)*

**Demo online:** [https://demo-hotel-mefema.mefemasys.co.mz/](https://demo-hotel-mefema.mefemasys.co.mz/)

## Descrição

Este é o código-fonte do website institucional do **Hotel MEFEMA Systems**, um estabelecimento de hospedagem localizado em **Maputo, Moçambique**. O site apresenta a instituição, os tipos de acomodação (Hotel Executivo, Motel Romântico e Residencial Familiar), serviços, comodidades e informações sobre reservas.

O projeto foi desenvolvido pela **Mefema Systems** como uma solução moderna, elegante e responsiva para divulgação do estabelecimento hoteleiro.

### Principais características do site
- Design moderno e responsivo
- Estrutura modular com includes (header, footer, scripts)
- Seções dedicadas para:
  - Sobre o estabelecimento
  - Tipos de acomodação
  - Serviços e comodidades
  - Galeria de quartos
  - Sistema de reservas
  - Tarifas e promoções
  - Localização e contactos
- Configuração de URLs e paths centralizada
- Dark mode integrado
- Animações suaves e design contemporâneo

## Estrutura do projeto

```
hotel-mefema-clone/
├── config/
│   ├── bootstrap.php       → Define ROOT_PATH, helpers e autoload simples
│   └── url-config.php      → Função url() e BASE_URL
├── css/                    → Estilos personalizados (Tailwind CSS)
├── images/                 → Imagens do site (quartos, instalações, etc.)
├── includes/               → Partes reutilizáveis
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   └── scripts.php
├── js/                     → Scripts JavaScript personalizados
├── pages/                  → Páginas principais
│   ├── reservas.php
│   ├── contacto.php
│   ├── acomodacoes.php
│   ├── servicos.php
│   ├── galeria.php
│   ├── sobre.php
│   ├── tarifas.php
│   └── tipos/
│       ├── hotel-executivo.php
│       ├── motel-romantico.php
│       └── residencial-familiar.php
└── index.php               → Página inicial
```

## Tecnologias utilizadas

- **HTML5** + **CSS3**
- **PHP** (estrutura modular com includes)
- **JavaScript** (interações e animações)
- **Tailwind CSS** (framework CSS principal)
- **Lucide Icons** (ícones modernos)
- Servidor web: Apache / PHP (testado localmente e em hospedagem)

## Instalação e uso local

1. Clona o repositório:
   ```bash
   git clone https://github.com/mefemasys/hotel-mefema.git
   ```

2. Entra na pasta:
   ```bash
   cd hotel-mefema
   ```

3. (Opcional) Ajusta o `BASE_URL` em `config/url-config.php` para o teu ambiente local:
   ```php
   define('BASE_URL', 'http://localhost/hotel-mefema');
   ```

4. Inicia um servidor local:
   - PHP built-in: `php -S localhost:8000`
   - Ou usa XAMPP / WAMP / Laragon / VS Code Live Server

5. Abre no browser: `http://localhost:8000` (ou a porta que escolheste)

## Tipos de Acomodação

### 🏢 Hotel Executivo
- Quartos confortáveis para viajantes de negócios e turismo
- Wi-Fi grátis, pequeno-almoço incluído e estacionamento privado

### 💕 Motel Romântico
- Suítes temáticas com privacidade total
- Jacuzzi privativo e garagem discreta

### 🏠 Residencial Familiar
- Acomodações acessíveis para longas estadias
- Quartos espaçosos, cozinha compartilhada e tarifas mensais

## Licença e uso do código

Copyright © 2025–2026 **Mefema Systems** (https://mefemasys.co.mz)

**Licença proprietária** – Todos os direitos reservados.

Este repositório está público **apenas para fins de divulgação e portfólio**.  
**Não é permitida a utilização, cópia, modificação, distribuição ou uso comercial do código sem autorização expressa por escrito da Mefema Systems.**

Para solicitar permissão de uso ou uma versão adaptada para outro estabelecimento hoteleiro, contacta:  
📧 [contacto@mefemasys.co.mz](mailto:contacto@mefemasys.co.mz)  
🌐 https://mefemasys.co.mz

## Créditos

- Desenvolvimento: Mefema Systems  
- Design e conteúdo baseado no Hotel MEFEMA Systems Maputo  
- Mantenedor do repositório: [mefemasys / @mefemasys]

## Contactos do Hotel MEFEMA Systems (para referência)

- 📍 Endereço: Av. mefemasys, Expansão, Maputo, Moçambique  
- 📞 Telefone: +258 84 123 4567 / +258 85 123 4567
- 📧 Email: reservas@mefemasys.co.mz
- 🌐 Website: https://hotel.mefemasys.co.mz

---

**Reservas abertas para 2026** | Conforto que Acolhe em cada estadia.