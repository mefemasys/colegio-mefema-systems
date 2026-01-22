# Colégio MEFEMA Systems - Website Institucional

![Banner / Screenshot do site](https://via.placeholder.com/1200x400.png?text=Col%C3%A9gio+MEFEMA Systems+-+Educar+para+o+Futuro)  
*(substitui por um screenshot real do site quando fizeres upload)*

**Demo online:** [https://demo-colegio-MEFEMA Systems.mefemasys.co.mz/](https://demo-colegio-MEFEMA Systems.mefemasys.co.mz/)

## Descrição

Este é o código-fonte do website institucional do **Colégio MEFEMA Systems**, uma escola privada localizada em **Mozambique, Cabo Delgado, Moçambique**. O site apresenta a instituição, os níveis de ensino (Pré-Escolar, Primário e Secundário), missão, valores, contactos e informações sobre matrículas.

O projeto foi desenvolvido pela **Mefema Systems** como uma solução moderna, limpa e responsiva para divulgação da escola.

### Principais características do site
- Design moderno e acessível
- Estrutura modular com includes (header, footer, scripts)
- Páginas dedicadas para:
  - Sobre a escola
  - Missão e valores
  - Níveis de ensino (Pré-escolar, Primário, Secundário)
  - Corpo docente
  - Cursos / Oferta educativa
  - Admissões / Matrículas
  - Galeria
  - Contactos
- Configuração de URLs e paths centralizada
- Uso de Bootstrap (provavelmente via CDN ou local)

## Estrutura do projeto

```
colegio-MEFEMA Systems-clone/
├── config/
│   ├── bootstrap.php       → Define ROOT_PATH, helpers e autoload simples
│   └── url-config.php      → Função url() e BASE_URL
├── css/                    → Estilos personalizados
├── images/                 → Imagens do site (logos, fotos da escola, etc.)
├── includes/               → Partes reutilizáveis
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   └── scripts.php
├── js/                     → Scripts JavaScript personalizados
├── pages/                  → Páginas principais
│   ├── admissoes.php
│   ├── contacto.php
│   ├── cursos.php
│   ├── docentes.php
│   ├── galeria.php
│   ├── sobre.php
│   ├── missao-valores.php
│   └── ensino/
│       ├── pre-escolar.php
│       ├── primario.php
│       └── secundario.php
└── index.php               → Página inicial
```

## Tecnologias utilizadas

- **HTML5** + **CSS3**
- **PHP** (estrutura modular com includes)
- **JavaScript** (interações básicas)
- **Bootstrap** (framework CSS principal – versão não especificada no código visível)
- Servidor web: Apache / PHP (testado localmente e em hospedagem)

## Instalação e uso local

1. Clona o repositório:
   ```bash
   git clone https://github.com/mefemasys/colegio-MEFEMA Systems.git
   ```

2. Entra na pasta:
   ```bash
   cd colegio-MEFEMA Systems
   ```

3. (Opcional) Ajusta o `BASE_URL` em `config/url-config.php` para o teu ambiente local:
   ```php
   define('BASE_URL', 'http://localhost/colegio-MEFEMA Systems');
   ```

4. Inicia um servidor local:
   - PHP built-in: `php -S localhost:8000`
   - Ou usa XAMPP / WAMP / Laragon / VS Code Live Server

5. Abre no browser: `http://localhost:8000` (ou a porta que escolheste)

## Licença e uso do código

Copyright © 2025–2026 **Mefema Systems** (https://mefemasys.co.mz)

**Licença proprietária** – Todos os direitos reservados.

Este repositório está público **apenas para fins de divulgação e portfólio**.  
**Não é permitida a utilização, cópia, modificação, distribuição ou uso comercial do código sem autorização expressa por escrito da Mefema Systems.**

Para solicitar permissão de uso ou uma versão adaptada para outra instituição, contacta:  
📧 [contato@mefemasys.co.mz](mailto:contato@mefemasys.co.mz)  
🌐 https://mefemasys.co.mz

## Créditos

- Desenvolvimento: Mefema Systems  
- Design e conteúdo baseado no Colégio MEFEMA Systems Mozambique  
- Mantenedor do repositório: [mefemasys / @mefemasys]

## Contactos do Colégio MEFEMA Systems (para referência)

- Endereço: Moçambique  
- Telefone: 
- Email: comercial@mefemasys.co.mz
- 

---
