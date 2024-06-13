# Introdução
As Traits são um poderoso recurso do Laravel quando falamos em reaproveitamento de código.  
Diferente da herança, você pode utilizar uma Trait em classes de diferentes domínios de sua aplicação sem ferir os princípios da orientação a objetos.  
Nesse pequeno projeto, vamos utilizar Traits, Models e sessão, para ilustrar como poderíamos criar um sistema multi-tenant.

# Subindo aplicação
Utilizaremos um container Docker para subir nossa aplicação.

## Configurando variáveis de ambiente
Vamos utilizar um banco SQLite para esse exemplo. Portanto, basta copiar o .env.example para ter tudo configurado.
```bash
cp .env.example .env
```

## Compilando a imagem
```bash
docker build --build-arg user=<usuario> --build-arg uid=$(id -u) -t php8.2-laravel11 .
```
Passamos dois parâmetros ao compilar a imagem. Esses dois parâmetros, servem para criar um usuário com as mesmas permissões do usuário do seu host Linux.  
Isso é importante em um ambiente de desenvolvimento, para que não tenhámos problemas de permissão ao fazer uma alteração fora do container, que queremos que tenho reflexo lá dentro.  
_Atenção: Substitua o \<usuario> pelo nome de usuário que você quiser usar._

## Subindo o container
```bash
docker run --rm -d -v ./:/var/www -p 8000:8000 --name phplaravel php8.2-laravel11
```
Esse comando irá subir a aplicação utilizando a porta 8000.  
O entrypoint configurado no Dockerfile, utiliza o servidor web embutido no PHP.  
É importante salientar que, isso serve bem para um ambiente de desenvolvimento, quando for levar a aplicação para produção, devemos utilizar algo mais robusto como Apache ou Nginx.

## Instalando as dependências
```bash
docker exec phplaravel composer install
```

## Gerando chave de encriptação do Laravel
```bash
docker exec phplaravel php artisan key:generate
```

## Criando a estrutura do banco de dados
```bash
docker exec phplaravel php artisan migrate
```

# Utilização
Com a aplicação rodando, podemos acessá-la pelo endereço `http://localhost:8000/tenant`.  
Nessa primeira tela, informe um código de tenant que deseja utilizar e clique em Entrar.  
Você será redirecionado para a tela de cadastro de itens.  
No cadastro de itens, basta informar os dados solicitados e salvar.  
Ao verificar seu banco (que fica em `database/database.sqlite`), você verá que na tabela `items`, além dos dados do item que você cadastrou, temos um `tenant_id`, que é justamente o código que você informou na primeira tela do sistema.  
Agora basta fazer isso em navegadores diferentes para ver como cada um armazena o seu próprio `tenant_id`.  
Para reforçar o funcionamento das Traits, temos também o cadastro de pessoas, que pode ser acessado pela url `http://localhost:8000/person`.  
