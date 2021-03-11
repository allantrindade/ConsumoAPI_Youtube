![logo](https://user-images.githubusercontent.com/48301110/110535915-992fe200-80ff-11eb-89b1-9941709581c2.png)

# ConsumoAPI_Youtube
Trabalho de Desenvolvimento para Servidores, consumindo uma API do Youtube utilizando PHP.

## Introdução
Este documento é destinado a desenvolvedores que desejam criar aplicativos que interagem com o YouTube. Ele explica os conceitos básicos do YouTube e da própria API. Também oferece uma visão geral das diferentes funções compatíveis com a API.

## Primeiros Passos:

1. Você precisa de uma [Conta do Google](https://www.google.com/accounts/NewAccount) para acessar o Console de APIs do Google, solicitar uma chave da API e cadastrar seu aplicativo.

2. [Cadastre seu aplicativo](https://developers.google.com/youtube/registering_an_application) no Google para que ele possa enviar solicitações de API.

3. Após cadastrar seu aplicativo, selecione a API de dados do YouTube como um dos serviços usados por seu aplicativo:

  * Acesse o [Console de APIs](https://console.developers.google.com/apis/) e selecione o projeto que você acabou de cadastrar.
  * Clique no painel **Serviços**.
  * Na lista de APIs, mude o status da **API de dados do YouTube** para **ON**.

4. Acesse [Credenciais](https://console.developers.google.com/apis/credentials) em Chaves de API copie sua chave.

  * Abra o arquivo de configurações "/ConsumoAPI_Youtube/Trabalho API/src/config.php/" e adicione sua chave na constante KEY.
   
  ![Capture](https://user-images.githubusercontent.com/48301110/110540118-d9de2a00-8104-11eb-8489-98632df6e662.PNG)
  
5. Após essas configurações você ja pode consumir a API do Youtube através desse projeto MineTube.
  
  * Qualquer dúvida acesse o site offical da [API Youtube](https://developers.google.com/youtube/v3/getting-started).