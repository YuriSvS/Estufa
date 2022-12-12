<h2>Projeto de estufa inteligente intregado com arduino</h2>

Integrantes:<br>
Pedro Henrique Avila Zelenski <br>
Pedro Henrique Gonçalves <br>
Rafael Albino Romano <br>
Yuri Santos Viana <br>


Caso deseje incrementar o sistema de notificação por e-mail, será necessário seguir o tutorial a baixo:

Para funcionar o envio de email faça o seguinte procedimento:

Abra o php.ini 

Procure:

- mail function e altere o servidor smtp_localhost para SMTP = smpt.gmail.com

smpt_port=25 para smpt_port=587


sendmail_from = E COLOQUE O SEU EMAIL QUE IRÁ ENVIAR OS EMAILS

Procure na pasta xampp o sendmail e copie seu caminho e cole no campo a seguir:
sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"


AGORA NA PASTA DO SENDMAIL
Abra o sendmail.ini
smpt_server = smtp.gmail.com
smtp_port=587

tira o ; do debug_logfile=debug.log

auth_username = email
auth_password = senha email

force_sender = cole seu email

hostname=localhost
