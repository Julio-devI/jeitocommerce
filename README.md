<h1>Teste de desenvolvimento</h1>
<h2> Como rodar o projeto em sua máquina</h2>
<br>
- baixe o diretorio do projeto na sua máquina
<br>
- Caso esteja utilizando docker com algum componente de host virtualization mova a pasta para o diretorio do seu host
<br>
- Caso seja devilbox, mova o arquivo para a pasta www
<br>
- Crie um domínio no arquivo hosts do windows
<br>
- Crie um banco de dados chamado: jeitocommerce
<br>
- Em seguida abra o arquivo no seu editor de código, de preferência um que tenha terminal
<br>
- Execute o comando php artisan migrate
<br>
- Acesse o domínio criado no hosts
<br> 
<h3>Para acessar todas as funções de administrador</h3>
<br>
- Crie um usuário
<br>
- Abra o banco de dados na tabela user
<br>
- mude o campo USR para ADM
<br>
<h3>Caso não esteja usando serviço de virtualizacao de host</h3>
<br>
- baixe o diretorio do projeto
<br>
- execute php artisan serve 
