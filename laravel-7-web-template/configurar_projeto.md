# Configure artisan using PHPStorm

## Como chegar lá
Settings -> Tools -> Command Line Tool Support -> Tool based on Symfony Console

## Configurações
Alias: 'nome do comando'

PHP Interpreter: 'Versão atualizada do PHP'

Tool path: 'diretório para o artisan da pasta'

* Atenção ao Tool path! Verificar o diretório para ver se está na pasta correta.


## Testing
*Dois toques no control*

'nome do comando' serve | *Comando para iniciar o servidor*

# Configure Composer using PHPStorm
## Como chegar lá:
Settings -> Languages & Frameworks -> PHP -> Composer

## Configurar para funcionar com o Laravel
* Right click composer -> Composer -> Install | *Instala as dependências configuradas no ficheiro do composer*
* Right click composer -> Composer -> Dump autoloader | *Configura os namespace e rotas do projeto*

## Alterar configurações do composer
#### Para alterar as dependências do projeto 
Ir ao composer.json, fazer as alterações necessárias, apagar o composer.lock e instalar as dependências do ficheiro

#### Para alterar o path do autoloader
Alterar o valor de: "autoload": { "psr-4" {"App\\": "Novo diretório"}}
