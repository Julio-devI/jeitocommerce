<h1>Teste de desenvolvimento</h1>
<h2> Como rodar o projeto em sua máquina</h2>
<br>
- baixe o diretorio do projeto na sua máquina
- Caso esteja utilizando docker com algum componente de host virtualization mova a pasta para o diretorio do seu host
- Caso seja devilbox, mova o arquivo para a pasta www
- Crie um domínio no arquivo hosts do windows
- Crie um banco de dados chamado: jeitocommerce
- Em seguida abra o arquivo no seu editor de código, de preferência um que tenha terminal
- Execute o comando php artisan migrate
- Acesse o domínio criado no hosts
<br> 
<h3>Para acessar todas as funções de administrador</h3>
<br>
- Crie um usuário 
- Abra o banco de dados na tabela user
- mude o campo USR para ADM
<br>
<h3>Caso não esteja usando serviço de virtualizacao de host</h3>
<br>
- baixe o diretorio do projeto
- execute php artisan serve 
