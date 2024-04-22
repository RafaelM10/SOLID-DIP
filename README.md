# Aplicação do principio SOLID em php o famoso Interface Segregation PRINCIPLE
`Modúlos de alto nivel não devem depender de modulos de baixo nivel ambos devem depender de abstrações. Dependa de uma abstração e não de uma implementação, abstrações não devem depender de detalhes, detalhes deve depender de abstrações.`
é uma boa pratica ter diversas interfaces ao invés de uma unica interface, respeitando as classes para que implementem aquilo que realmente é necessario e pensando em baixo acoplamento e uma alta coesão utilizando nos lugares especificos e coerentes.

## Utilizando nesse mini-projeto: 
Neste mini projeto você vera que foi utilizado uma estrutura simples para aplicação de todos os principios SOLID. Beneficios ao  aplicar o SOLID
- Singgle Resposability Principle
- Open-Closed Principle
- Liskov Substitution Principle
- Interface Segregation Principle
- Dependency Inversion Principle

## Segue também para um melhor entendimento o funcionamento desse DIP e suas qualidades: 
Quando classes implementarem outras classes, quando surgir operador new dentro da classe eu estou estabelecendo um nivel de dependencia da classe consumida. Criando um forte acoplamento entre os objetos…

Ao aplicar Inversão de dependencia através da injeção de dependencia beneficios são alcançados: 

→ Eliminando forte acoplamento entre os objetos.

→ Classe de alto nivel por não depender de uma classe de baixo nivel não se torna fragil devido as mudanças em classes de baixo nivel.

→ Torna o codígo bem mas flexível.

→ escopos bem mas definidos 

→ Facilitando os testes unitarios.

→ baixo acoplamento e coesão.

### Utilizando SOLID temos um código
- Modular e testável.
- Código limpo e de facil compreensão.
- se uma classe precisar ser alterada, apenas um aspecto do sistema será afetado, minimizando o impacto em outras partes do código.
