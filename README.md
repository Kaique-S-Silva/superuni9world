# Super UNI9 World - Site Oficial

## Descrição
Bem-vindo ao site oficial do **Super UNI9 World**, um emocionante jogo de plataforma 2D desenvolvido para proporcionar diversão e aprendizado. Este site serve como portal para acessar o jogo, explorar sua wiki, entrar em contato e descobrir mais sobre o universo do jogo.

O jogo está hospedado gratuitamente na plataforma [Itch.io](https://itch.io/), permitindo que os jogadores mergulhem em desafios interativos diretamente no navegador.

## Funcionalidades do Site
- **Página Inicial**: Apresenta uma seção hero com banner atrativo, descrição do jogo e botão para jogar. Inclui cards destacando recursos como jogabilidade interativa e design moderno.
- **Página do Jogo**: Incorpora o jogo via iframe do Itch.io, com título e descrição explicativa.
- **Página de Erro**: Tratamento de páginas não encontradas com redirecionamento amigável.

## Estrutura do Projeto
```
my-game/
├── Dockerfile                 # Configuração para containerização com Docker
├── README.md                  # Este arquivo
├── public/
│   ├── index.php              # Arquivo principal que gerencia o roteamento
│   └── assets/
│       ├── style.css          # Estilos CSS com design escuro e responsivo
│       ├── logo.png           # Logo da marca Super UNI9 World
│       └── banner.png         # Banner usado na seção hero
└── resources/
    └── views/
        ├── components/
        │   ├── header.php     # Cabeçalho com navegação
        │   └── footer.php     # Rodapé com copyright
        └── pages/
            ├── homepage.php   # Página inicial
            ├── game.php       # Página do jogo com iframe
            ├── wiki.php       # Página da wiki
            ├── contact.php    # Página de contato
            └── error.php      # Página de erro 404
```

## Tecnologias Utilizadas
- **PHP**: Para o backend e inclusão dinâmica de páginas.
- **HTML5**: Estrutura semântica das páginas.
- **CSS3**: Estilos modernos com variáveis customizadas, animações e responsividade.
- **Docker**: Containerização para fácil deployment.
- **Itch.io**: Plataforma de hospedagem do jogo.

## Acesso ao Site
O site está hospedado no Render e pode ser acessado diretamente em: [https://superuni9.onrender.com](https://superuni9.onrender.com).


## Imagens e Assets
- **Logo**: `assets/logo.png` - Ícone da marca usado no header.
- **Banner**: `assets/banner.png` - Imagem de fundo para a seção hero, aplicada via CSS com gradiente.
- Outros assets podem ser adicionados conforme necessário.

## Hospedagem e Deployment
O site está hospedado no [Render](https://render.com/) em https://superuni9.onrender.com. O jogo em si é hospedado gratuitamente na plataforma [Itch.io](https://itch.io/).