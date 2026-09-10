# Super UNI9 World - Site Oficial

O jogo foi o **Projeto Integrador** realizado no 4° semestre do meu bacharelado de Ciências da Computação na Uninove.

A ideia é um jogo de plataforma 2D, inspirado no **Super Mário World** de Super Nintendo.

## Objetivo
O jogo tem como objetivo demonstrar as dificuldades dos alunos enquanto tentam seguir com seu curso na universidade.

## Estrutura do Projeto
```
my-game/
├── Dockerfile
├── README.md
├── public/
│   ├── index.php
│   └── assets/
│       ├── style.css
│       ├── logo.png
│       └── banner.png
└── resources/
    └── views/
        ├── components/
        │   ├── header.php
        │   └── footer.php 
        └── pages/
            ├── homepage.php
            ├── game.php
            ├── wiki.php
            ├── contact.php
            └── error.php
```
O projeto está dividido em:
- public/ - Roteamento e layout das páginas
- assets/ - Pasta de assets com a estilização e imagens utilizadas.
- resources/views/components/ - Componentes padrão do layout.
- resources/views/pages/ - Páginas do site.

## Tecnologias Utilizadas
- **PHP**: Para o backend e inclusão dinâmica de páginas.
- **HTML5/CSS** Para estrutura e estilização das páginas.
- **Docker**: Containerização para facilidades dos testes
- **Itch.io**: Plataforma de hospedagem do jogo.

## Como acessar
O site está hospedado no Render e pode ser acessado diretamente em: [https://superuni9.onrender.com](https://superuni9.onrender.com).
O jogo está hospedado no itch.io. O site apenas faz a indexação via iframe.
