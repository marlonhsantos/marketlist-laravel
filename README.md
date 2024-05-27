# Market List

(WIP)

Algumas considerações a respeito do projeto:

**Solução em container Docker utilizando o Sail do Laravel para build**

Este projeto utiliza o Sail do Laravel para construir e executar o container de desenvolvimento local.


**Rotas para API REST (Nesse cenário específico utilizando ApiResource do Laravel)**

As rotas da API REST são definidas em `routes/api.php`. Neste projeto, estou utilizando o recurso `ApiResource` do Laravel para definir as rotas da API para definir rotas para diferentes métodos HTTP (GET, POST, PUT, DELETE) e URLs. 


**Requisições recebidas através de CONTROLLER com validação na entrada (app/Http/Controllers/ProductController.php)**


**Banco de dados acessado através de Repository (respeitando um contrato específico) que acessa a Model**

O acesso ao banco de dados é feito através de repositories, responsáveis por encapsular a lógica de acesso aos dados. Os repositories implementam interfaces que definem os métodos para acessar os dados. Neste projeto, o contrato utilizado é o `app/Repositories/Contracts/ProductRepositoryInterface.php` 


**Implementações sempre dependentes de interfaces e não de implementações**

As implementações das classes de negócio dependem sempre de interfaces, e não de implementações específicas. 


**Binding de Interfaces registradas no Service Provider **

O binding de interfaces com suas implementações concretas é feito no service provider `app/Providers/AppServiceProvider.php`.


**Dependências injetadas nos construtores e não instanciadas dentro de outras implementações**

As dependências das classes de negócio são injetadas nos construtores das classes, e não instanciadas dentro das próprias classes. Isso facilita o teste das classes de negócio e torna o código mais modular.


**Camada "Services" criada para implementar as chamadas a views (ainda não implementado)**

Uma camada de serviços está sendo criada para encapsular a lógica de chamada às views. Essa camada ainda não está implementada, mas será utilizada para separar a lógica de negócio da camada de apresentação.


**Versionamento de banco de dados em migrations**

O versionamento do banco de dados é feito utilizando migrations. As migrations são arquivos PHP que definem as alterações na estrutura do banco de dados. O Laravel fornece um sistema de versionamento de migrations que permite acompanhar as alterações no banco de dados ao longo do tempo.


**Código respeitando PSR's em assinatura de métodos, namespaces**

O código deste projeto segue as PSRs (PHP Standards Recommendations) em relação à assinatura de métodos e namespaces. 
