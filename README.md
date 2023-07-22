# Coach-System
### Projeto de desenvolvimento de um site para coaching baseado na ferramenta de gerenciamento de projetos Trello.
![home1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/11c62802-d3a4-458f-9503-80b64044040c)
![home1-2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/feb7a1d4-7cc8-4eb0-94ee-e0d9f5fe2c82)
## Entrar em Contato
### No lado direito superior há três opções. Ao clicar em "entrar em contato" é possível mandar um email direto para o administrador do site, no caso o Coaching.
![contato](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/b123586a-3244-4f12-ab66-fb26959ae145)
![contato2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/209967a3-d011-4a2b-a376-f6145d58b478)
#### OBS: O Xampp estava sendo utilizado durante o desenvolvimento do sistema e ele possui algumas complicações para o uso do PHP mailer, potanto para o envio desse email é usado o formSubmit
## Cadastro
### O site tinha como objetivo servir apenas para aqueles alunos que comprassem o curso do administrador do site, nesse caso o Coach. Portanto para o cadastro é necessário clicar em 'começar agora' e apertar em qualquer uma das opções de "compra"
![compra](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/48d56d88-07fa-4250-ac7d-d44901dc6e44)
![cad](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/66681467-082e-4cba-941e-89f6259ab737)
### todos os campos do cadastro possuem validação e são de preenchimento obrigatório; as senhas são criptografadas com hash md5 e armazenadas no banco de dados e além disso devem possuir no mínimo 6 caracteres; o campo de CPF possui validação tanto para quantidade de caracteres como para aceitar apenas números e também para validar se o CPF colocado no input de fato existe; também é necessário, para submeter o formulário, clicar em 'li e concordo com os termos de privacidade' (ao clicar em cima é possível baixar um pdf com os termos de privacidade)
#### termos de privacidade:
[termo-de-privacidade (1).pdf](https://github.com/Gustavo-erades/Coach-System-/files/12135553/termo-de-privacidade.1.pdf)
### Após o cadastro o usuário é direcionado para a página de login
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
# -------------------------------------------------------------
# Acesso do Usuário (caso não deseje criar uma conta pode usr essa de exemplo -> email:teste@gmail.com | senha: 123456)
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
# -------------------------------------------------------------
# Acesso do Administrador 
### O acesso do administrador é por meio do login, assim como o de usuário, porém o login do administrador dado por (email:adm@gmail.com | senha: 996716) apresenta páginas e funcionalidades diferentes.
![admHome](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/44650d77-6355-4372-a829-43338c7a723f)
### Essa primeira parte serve para mostrar ao administrador do sistema os principais dados dos seus alunos (nome, sobrenome, cpf, email, telefone, turma, etc.); nessa página é possível usar a barra de pesquisa para pesquisar por um aluno em específico (pode ser usado para a pesquisa qualquer atributo mostrado na tabela) ou ainda excluir um aluno deletando seu registro (clicando na lixeirinha), ao fazer isso todos os dados referentes ao aluno excluido são apagados.
### Clicando no número de telefone o administrador é redirecionado para o whatsapp do aluno em questão.
## Formulário-alunos
![admForms1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/4229fae8-ac34-4442-be3a-347054ceb7c4)
### Aqui a barra de pesquisa funciona da mesma maneira que na página inicial, porém aqui o administrador pode acessar todos os formulários preenchidos por seus alunos e fazer comentários sobre eles (os comentários devem possuir no máximo 490 caracteres).
![admForms2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/b0d4bf3e-d86e-4b2b-9d99-4e45d9027e90)

## Meta-Alunos
### Nessa aba o administrador pode cadastrar até 5 tópicos para cada meta, analisar a evolução individual do aluno ao realizar essas metas, analisar a conclusão das metas de forma geral de todos os alunos e ainda analisar a realização de cada meta específica mas no aspecto geral dos seus alunos.
![admMetas1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/43bf9164-7013-4ca2-916e-de2120b197c6)
![admMetas2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/f108effd-e6b5-4c19-a583-c020280872b9)
## Turmas
### Nessa aba há uma barra de pesquisa que funciona da mesma forma que as anteriores, porém essa aba serve exclusivamente para o gerenciamento de turmas. Assim há como criar turmas, alocar alunos a turmas específicas, ver a porcentagem de conclusão das metas filtrando por turma (por meio do gráfico, que é mostrado ao clicar no símbolo '%'), deletar turma, ver a quantidade de alunos numa turma específica e realocar alunos para a "Turma Geral" (clicando no desenho do boneco cortado ao lado de 'Sobrenome-Aluno').
### A "Turma Geral" é uma turma fantasma na qual todos os alunos cadastrados vão automáticamente, essa turma não é apresentada nos gráficos pois demonstram alunos recém chegados e portanto ainda não alocados em uma turma; não há limite de turmas ou de alunos nelas.
![adminTurmas1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/e2cd2149-0562-49e1-99a4-e49b0584a38d)
![adminTurmas2](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/0eea956d-2ece-4922-a093-f6217fe60c28)
![adminTurmas3](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/7ad797c6-2c43-4720-bf84-280f9d4c7701)
## Gerar QrCode
### Essa aba gera um Qr code que ao ser escaneado leva para a página de registro, além disso ao clicar em 'Gerar QR Code' um arquivo pdf é baixado, arquivo esse que também possui o mesmo QrCode e também um link para a página de cadastro. Serve para caso o administrador deseje fornecer outro caminho de registro, um caminho mais rápido.
![adminQRcode1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/c48cfa79-7e82-4299-bf46-97fa3ce55b92)
#### arquivo pdf:
[Qr_code_register.pdf](https://github.com/Gustavo-erades/Coach-System-/files/12135270/Qr_code_register.pdf)
## Alterar Cadastro
### Essa página serve para caso o administrador desee alterar o email e/ou senha de login, as alterações feitas aqui são alteradas no banco de dados ao clicar em 'Alterar'
![adminAltcad1](https://github.com/Gustavo-erades/Coach-System-/assets/108373134/217b49f3-3573-4803-8e54-28e7a9e1fdf0)
## OBS: ao clicar em sair também é exibida uma mensagem de confirmação personalizada.
# -------------------------------------------------------------
# Demais informações sobre o sistema
#### - Foi usado para hospedar o banco de dados o PlanetScale, ele foi modelado no BrModelo e foi ultilizado o MySQL Workbench como SGBD;
#### - Fui responsável pelo Back-end do site, embora tenha feito pequenas alterações no Front-end ao londo das diferentes versões do projeto;
#### - Projeto freelancer feito com a colaboração de mais programadores;
#### - Tecnologias utilizadas: PHP, JavaScript, HTML, CSS, Bootstrap;
####  - O Front-end do site foi baseado em um template pago da internet;
#### - projeto realizado entre Novembro/Dezembro de 2022 e Janeiro/Fevereiro de 2023;
#### - Para usar o banco de dados vá para o arquivo 'bancoDeDados.txt' e se conecte ao banco, não foi possível hospedar o site (mas o banco sim) então para sua visualização é necessário que se baixe os arquivos e se conecte ao banco de dados.
