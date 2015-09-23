#GAP - Gerador Automático de Petições
Gerador automático de petições focado na área trabalhista, para construção de iniciais padronizadas com 100% de cobertura da CLT (Consolidação das Leis do Trabalho).

Questionário inteligente que monta a inicial de acordo com as respostas do cliente e suas motivações.

##Configurando a aplicação
Edite o arquivo config/local.ini e altere as credenciais do seu banco de dados local.

```
host   = localhost
name   = gap
user   = root
pass   = root
type   = mysqli
```

##Caso ainda não tenha o composer, instale-o
```
curl -sS https://getcomposer.org/installer | php
php composer.phar self-update
```

##Baixe todas as dependências
```
php composer.phar install
```

##Ajuste as migrations
Edite o arquivo **phinx.yml** e informe as credenciais de  banco: desenvolvimento, homologação/teste e produção.

##Execute as migrations
```
php vendor/bin/phinx migrate -e production
```
