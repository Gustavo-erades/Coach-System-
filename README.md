# Coach-System
### Projeto de desenvolvimento de um site para coaching baseado na ferramenta de gerenciamento de projetos Trello.
![home1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/11c62802-d3a4-458f-9503-80b64044040c)
![home1-2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/feb7a1d4-7cc8-4eb0-94ee-e0d9f5fe2c82)
## Entrar em Contato
### No lado direito superior há três opções. Ao clicar em "entrar em contato" é possível mandar um email direto para o administrador do site, no caso o Coaching.
![contato](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/b123586a-3244-4f12-ab66-fb26959ae145)
![contato2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/209967a3-d011-4a2b-a376-f6145d58b478)
#### OBS: O Xampp estava sendo utilizado durante o desenvolvimento do sistema e ele possui algumas complicações para o uso do PHP mailer, potanto para o envio desse email é usado o formSubmit
## Entrar
### No lado direito superior há três opções. Ao clicar em "entrar" o usuário é encaminhado para a página de login, onde também pode clicar em "esqueceu a senha?"
![login1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/47de4547-5d0d-421f-807d-3f86d15f0ad9)
### É verificado se o input do usuário existe no banco de dados e o login é validado. Há criptografia com hash md5 na senha e validação dos campos de input e, em caso de erro na senha ou email o sistema apenas apaga os campus de input e impede o acesso (não há mensagens do tipo "senha inválida" ou "email não encontrado" para evitar possíveis ataques), para evitar SQLInjection e aumentar a segurança do usuário.
## Redefinir senha
### Caso a pessoa clique em "Esqueceu a senha?" uma nova página será aberta e lá a pessoa pode preencher as informações que colocou no cadastro e receber uma nova senha (que mais tarde poderá ser redefinida)
![redefinirSenha](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/ff983e51-abb0-40b4-a5b6-0802c1ad08de)
### Em caso de erro em algum dos campos uma mensagem de "usuário não encontrado" é apresentada 
![redefinirSenha2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/da2c9cbb-8742-43c1-91e8-97ff7ce72cd8)
### Caso os dados preenchidos constem no banco de dados, uma nova senha, gerada de modo aleatório, é atribuida àquele email e o usuário pode logar normalmente com ela.
![redefinirSenha3](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/9a1ffaec-703d-4e35-b270-98108d880466)
#### OBS: todos os campos de input possuem validação (para garantir que emails, números de CPF e nomes sejam preenchidos nos campos corretos)
## Entrando no sistema
### Ao realizar o login com sucesso a primeira página apresenta todos os dados preenchidos pelo usuário no momento do cadastro e apresenta ainda a possibilidade de "Completar cadastro" onde é possível alterar todas as informações preenchidas previamente, inclusive a senha
![pag1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/258550f7-1cc2-43e5-a66f-2ff078662a0a)

