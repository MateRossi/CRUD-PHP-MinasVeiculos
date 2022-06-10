# MinasVeiculos - Como executar e testar o projeto:
 Implementação de um CRUD em PHP utilizando Laravel, Composer, MySQL, HTML e CSS.
 
 <h3>1 - Este programa utilizza Laravel, Composer MySQL para funcionar, então é necessário dizponibilizar estes recursos na máquina anteriormente:</h3>
    1.1 - PHP: Utilizei a última versão, que pode ser obtida em https://windows.php.net/download#php-8.1 (sistemas windows - non thread safe).<br>
    1.2 - Composer: Utilizei a última versão, que pode ser obtida em https://getcomposer.org/download/ (recomendo instalar a versão .exe)<br>
    1.3 - MySQL: Utilizei o XAMPP para simular um servidor de banco de dados local na minha máquina. Com o XAMPP aberto, é necessário inciar os serviços 'Apache' e 'MySQL'. O XAMPP pode ser obtido em https://www.apachefriends.org/download.html
 
 <h3>2 - Com os recursos acima instalados, podemos começar as configurações necessárias: </h3>
    2.1 - Criando o banco de dados (XAMPP): acesse http://localhost/phpmyadmin/ clique na aba 'SQL', digite <strong>CREATE DATABASE minas_veiculos</strong> (ou o nome que preferir) e execute o comando.<br>
    2.2 - Abra o cmd e digite: <strong>composer create-project --prefer-dist laravel/laravel minasVeiculos</strong>. Este comando irá criar uma pasta com o nome "minasVeiculos" em C:\Users\seu_usuario_atual, onde serão instalados os recursos necessários do Laravel utilizando o composer.<br>  
    2.3 - Faça o download deste projeto em .zip<br>
    2.4 - Abra o arquivo .zip e copie todos os arquivos da pasta <strong>CRUD-PHP-MinasVeiculos-main</strong> para dentro da pasta <strong>minasVeiculos</strong> gerada no tópico 2.2, substituindo todos os arquivos da mesma.<br>
    2.5 - Agora, com os arquivos substituídos, entre em C:\Users\seu_usuario_atual\minasVeiculos e abra o arquivo <strong>.env</strong> em um bloco de notas. Neste arquivo você verá a seguinte seção:<br><br>
    
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=laravel<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

O código acima se refere ao banco de dados utilizado no projeto. Para que este funcione, deve-se alterar o DB_DATABASE=<strong>laravel</strong> para DB_DATABASE=<strong>minas_veiculos (ou o nome do banco de dados que você escolheu no tópico 2.1)</strong>. Se estiver usando outra porta, ou o seu banco de dados necessitar de senha, lembre-se de alterar os outros campos também. Por fim, salve o arquivo <strong>.env</strong>.<br>

 <h3>3 - Migrations: </h3>
 3.1 - Abra o cmd e digite: <strong>cd minasVeiculos</strong> (entra na pasta criada no tópico 2.2).<br>
 3.2 - Agora digite <strong>php artisan migrate</strong><br>
 3.3 - Deixe o cmd aberto neste ponto, ele será utilizado nos tópicos a seguir.
 
 <h3>4 - Com todos os passos acima realizados com sucesso, podemos finalmente executar e testar o programa. Que será feito da seguinte forma: </h3>
 4.1 - Com o cmd aberto, digite: <strong>php artisan serve</strong> ou <strong>php artisan serve --port=8080 </strong>para escolher uma porta específica. Lembre-se de que é necessário ter rodado o comando <strong>cd minasVeiculos</strong> anteriormente, pois todos os comandos a partir daqui deverão ser feitos dentro da pasta do projeto.<br> 
 4.2 - Agora que programa já está rodando, basta abrir um navegador e entrar no seguinte endereço: http://127.0.0.1:8000/veiculo/todos. Esta página será nossa <strong>index</strong>, visto que é um projeto simples. Lembre-se que, se você optou por mudar a porta no tópico anterior, será necessário mudar no link da "index".<br>
 4.3 - A partir daqui é só fazer os testes que desejar, como adicionar novos veículos, editar veículos, excluir e listar os veículos, ou seja, as funções de um CRUD.<br>
 
 

