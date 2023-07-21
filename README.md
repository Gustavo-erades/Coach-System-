# Coach-System
Projeto de desenvolvimento de um site para coaching baseado na ferramenta de gerenciamento de projetos Trello.
![home1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/11c62802-d3a4-458f-9503-80b64044040c)
![home1-2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/feb7a1d4-7cc8-4eb0-94ee-e0d9f5fe2c82)
## Entrar em Contato
No lado direito superior há três opções. Ao clicar em "entrar em contato" é possível mandar um email direto para o administrador do site, no caso o Coaching.
![contato](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/b123586a-3244-4f12-ab66-fb26959ae145)
![contato2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/209967a3-d011-4a2b-a376-f6145d58b478)
#### OBS: O Xampp estava sendo utilizado durante o desenvolvimento do sistema e ele possui algumas complicações para o uso do PHP mailer, potanto para o envio desse email é usado o formSubmit
## Entrar
No lado direito superior há três opções. Ao clicar em "entrar" o usuário é encaminhado para a página de login, onde também pode clicar em "esqueceu a senha?"
![login1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/47de4547-5d0d-421f-807d-3f86d15f0ad9)
É verificado se o input do usuário existe no banco de dados e o login é validado. Há criptografia com hash md5 na senha e validação dos campos de input e, em caso de erro na senha ou email o sistema apenas apaga os campus de input e impede o acesso (não há mensagens do tipo "senha inválida" ou "email não encontrado" para evitar possíveis ataques), para evitar SQLInjection e aumentar a segurança do usuário.
## Redefinir senha
Caso a pessoa clique em "Esqueceu a senha?" uma nova página será aberta e lá a pessoa pode preencher as informações que colocou no cadastro e receber uma nova senha (que mais tarde poderá ser redefinida)
