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
![pag1-2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/0577fbee-1bda-4044-9b88-f488f19b2c2d)
## Formulário
Na barra lateral há uma parte dedicada à formulários, isso porque o projeto foi feito para um coach que fazia alguns questionários com seus clientes com o intuito de conhecê-los melhor. Essa aba tem por objetivo auxiliar a pessoa nesses questionários, assim em "editar fomrulário" o usuário pode preencher os questionários que serão automáticamente enviados para o administrador do site, em "comentários" os usuários podem visualizar comentários feitos pelo próprio coach para aquele formulário específico, para aquela pessoa em específico. 
### OBS: "a visão de futuro daqui 12 meses" se refere a metodologia do coach em questão, cada um dos botões (saúde, relacionamento, Trabalho, Dinheiro, Outros objetivos) leva para um questionário diferente referente a esses temas (por questões de estilo todos seguem o mesmo padrão de estilização), todos tendo suas respostas enviadas automáticamente para o administrador do site e podendo receber seus comentários específicos também.
![forms1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/7f625cfe-f930-4271-8b45-02cd8f6a4051)
![forms3](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/e0dd23bf-aca6-46f9-8baa-63b412b6cf7d)
![forms2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/78e61d30-4901-495e-92e6-6960bb7252c2)
## Metas
### Essa aba de metas também se refere a metodologia do coach. Aqui há 5 metas (cards inicialmente vazios) referentes aos objetivos de 12 meses dos usuários, essas metas são cadastradas pelo coach e os alunos podem marcar os tópicos já realizados em cada meta ( ao clicar em 'ok' esses dados são enviados ao  adminitrador do site).
![met1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/4ea5b2b5-7b7f-4721-8c81-7941a3c02ed8)
![met2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/b9b74bcf-d3e0-46c1-a0ef-b7b1cd25d0e1)
### A parte de baixo "Conclusão Das Metas" possui dois gráficos e ambos são referentes a taxa de conclusão separada por meta, porém um é referente a turma que o aluno está alocado (inicialmente todos estão em uma turma geral, mas por questões de organização o coach pode dividir seus alunos em turmas) e outro individual. 
![concmet](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/95b65136-3445-4b3a-bbae-3be8fe5ad580)
### a parte é apenas um compilado de frases motivacionais
![frases](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/cf2709a2-00a3-4302-9a30-b281248f474e)
## Mensagem e Sair
### Clicando em 'mensagem' o usuário é redirecionado para enviar uma mensagem automática "quero bater minhas metas" para o whatsapp do administrador do site.
### Em 'Sair' uma mensagem personalizada com o nome do usuário aparece perguntando se ele deseja encerrar a sessão, em caso positivo volta para a página inicial.
# -----------------------------------------------------------
# Acesso do Administrador 




