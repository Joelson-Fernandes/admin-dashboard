<h1 align="center">Admin Dashboard 👨🏻‍💻</h1>

> Um dashboard é um tipo de interface gráfica do usuário que geralmente fornece visualizações rápidas dos principais indicadores de desempenho relevantes para um objetivo ou processo de negócios específico.
Este projeto utiliza como base para sua construção o Framework <a href="https://www.codeigniter.com/user_guide/intro/index.html">Codeigniter</a> e, templates de <a href="https://adminlte.io/">AdmiLte</a>.

<div align="center">
 <h3 align="center">Tecnologias utilizadas:</h3>
 
 [Badges]: <> ( Você pode procurar por badges aqui: https://github.com/alexandresanlim/Badges4-README.md-Profile )
 
![Badge](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Badge](https://img.shields.io/badge/Codeigniter-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![Badge](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

</div>

## 💻 Pré-requisitos

Antes de começar, certifique-se de atender a esses requisitos:

* Gerenciador de pacotes <a href="https://getcomposer.org/">Composer</a>.
* PHP na versão 7.4.29 ou mais recente.


## 🔧 Configuração do projeto

Para instalar, siga estas etapas:

Clone o projeto e execute o comando no diretório raiz:
```
composer install 
```

Renomeie `.env-example` para `.env` e configure com seu banco de dados.
Exemplo:
```
database.default.hostname = localhost
database.default.database = dashboardadmin
database.default.username = root
database.default.password = root
database.default.DBDriver = MySQLi
database.default.DBPrefix =
```


## ⚙️ Usando AdminDashboard

#### Execute estes comandos em seu CMD: 
```
php spark migrate
php spark db:seed
Seeder name : Usuarios
php spark serve
```

Sua aplicação deverá está rodando no endereço <a href="http://localhost:8080">http://localhost:8080.</a> A porta pode ser alterada em: `app` `Config` `App.php`.
 

Os dados de usuário e senha dos arquivos de seed são:

<ul>
<li> Usuário = admin </li>
<li> senha = 123456 </li>
</ul>

Teste e aproveite! 😅

Você pode ler mais sobre Codeigniter <a href="https://www.codeigniter.com/user_guide/intro/index.html">aqui</a>

## 📫 Contribuindo para Admin Dashboard

Para contribuir, siga estes passos:

1. Fork este repositório.
2. Crie uma branch com seu nome de recurso: `git checkout -b mynewfeature`.
3. Faça suas alterações e confirme: `git commit -m 'messagehere'`
4. Push sua mudança para a branch principal: `git push origin mynewfeature`
5. Crie a solicitação pull request.

você pode verificar a documentação do GitHub [Criando uma Pull Request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).
