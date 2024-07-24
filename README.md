# PHP Profissional Orientado a Objetos

## PHP 8 - Sistemas de rotas OO


[Playlist](https://www.youtube.com/playlist?list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN)

> [!NOTE]
> O arquivo phpproj.bat é um batch que monta todos as pastas, sendo necessário apenas para criar projetos novos criando as pastas do padrão do projeto.

## Estrutura inicial de projeto
<pre>
app/
  ├── controllers/
  ├── core/
  ├── database/
  │   └── models
  ├── helpers/
  ├── routes/
  ├── support/
  ├── traits/
  ├── views/
  public/
  │   ├── css
  │   ├── js
  │   └── index.php
  

Link do vídeo   | tempo
--------- | ------
[#00 - Apresentação do curso](https://www.youtube.com/watch?v=v3yCBmhUUtY&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=1&pp=iAQB) | 1:32
[#01 - Estrutura das pastas e dependências com composer](https://www.youtube.com/watch?v=nvCDYRS2QzM&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=2&pp=iAQB) | 7:36
[#02 - Como vai funcionar o carregamento das rotas](https://www.youtube.com/watch?v=LVcIgUlbhcM&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=3&pp=iAQB) | 10:22
[#03 - Pegando as rotas exatas](https://www.youtube.com/watch?v=VPO68M8cpsM&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=4&pp=iAQB) | 16:43
[#04 - Pegando as rotas dinâmicas](https://www.youtube.com/watch?v=zPARkz2Krgw&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=5&pp=iAQB) | 10:36
[#05 - Instanciando controller e chamando o método](https://www.youtube.com/watch?v=MdWI6m5hHzU&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=6&pp=iAQB) | 13:26
[#06 - Parâmetros das rotas dinâmicas](https://www.youtube.com/watch?v=3k-w0R5mA3w&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=7&pp=iAQB) | 16:24
[#07 - Sistema de templates](https://www.youtube.com/watch?v=7CZW4cea49c&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=8&pp=iAQB) | 18:56
[#08 - Criando e testando o form criado no Plates #plates #php](https://www.youtube.com/watch?v=KIovWG1FRbU&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=9&pp=iAQB) | 6:28
[#09 - Classe Request - Método only](https://www.youtube.com/watch?v=AonNyAW6zEs&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=10&pp=iAQB) | 13:43
[#10 - Classe Request - Método excepts](https://www.youtube.com/watch?v=K_sEnhWyBP0&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=11&pp=iAQB) | 11:02
[#11 - Classe Request - Resolvendo bug método only](https://www.youtube.com/watch?v=wAVwmcHRQfs&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=12&pp=iAQB) | 6:02
[#12 - Criando banco de dados e conexão](https://www.youtube.com/watch?v=aU9vy4I3ufc&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=13&pp=iAQB) | 6:29
[#13 - Criando filtros para o select com PDO](https://www.youtube.com/watch?v=5qB3Wj8EiQo&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=14&pp=iAQB) | 23:46
[#14 - Find By com filtros](https://www.youtube.com/watch?v=5vnf8yNSZ5o&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=15&pp=iAQB) | 14:07
[#15 - Deletar com filtros](https://www.youtube.com/watch?v=WJdeBO2QLls&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=16&pp=iAQB) | 6:46
[#16 - Pegando primeiro registro na ordem que quiser](https://www.youtube.com/watch?v=5XXzDRndoWQ&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=17&pp=iAQB) | 6:44
[#17 - Contagem de registros](https://www.youtube.com/watch?v=m1IvfjMLYdA&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=18&pp=iAQB) | 2:58
[#18 - Como fazer um join no php](https://www.youtube.com/watch?v=IlEUtTK8D-0&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=19&pp=iAQB) | 9:55
[#19 - Criando o método create](https://www.youtube.com/watch?v=eZopCl7mRKg&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=20&pp=iAQB) | 10:25
[#20 - Criando o método update | Como fazer update no php](https://www.youtube.com/watch?v=rAjKLoliz3Q&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=21&pp=iAQB) | 10:37
[#21 - Paginação com php | Criando a paginação parte 1](https://www.youtube.com/watch?v=IKblKZXMvcM&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=22&pp=iAQB) | 13:19
[#22 - Paginação com php | Criando a paginação parte 2](https://www.youtube.com/watch?v=n9zr-bkB-68&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=23&pp=iAQB) | 13:44
[#23 - Paginação com php | Criando a paginação parte 3](https://www.youtube.com/watch?v=Y0PLXuxbQRg&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=24&pp=iAQB) | 14:56
[#24 - Token contra csrf | Proteção contra CSRF](https://www.youtube.com/watch?v=ELH-N5S3PJk&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=25&pp=iAQB) | 14:14
[#25 - Validando dados com php | parte 1](https://www.youtube.com/watch?v=TUpZ44nUh9E&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=26&pp=iAQB) | 19:00
[#26 - Validando dados com php | parte 2](https://www.youtube.com/watch?v=oEea-e87srg&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=27&pp=iAQB) | 9:22
[#27 - Validando dados com php | parte 3](https://www.youtube.com/watch?v=Qf8NpTD8c4k&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=28&pp=iAQB) | 6:36
[#28 - Como criar flash messages com php](https://www.youtube.com/watch?v=g5FPAppZiqo&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=29&pp=iAQB) | 8:14
[#29 - Validação com Flash Message](https://www.youtube.com/watch?v=efB8fUzMZe0&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=30&pp=iAQB) | 20:53
[#30 - Refatorando a classe de validação](https://www.youtube.com/watch?v=aoJRTkKnBNY&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=31&pp=iAQB) | 25:43
[#31 - Validação de campo único](https://www.youtube.com/watch?v=EwU0ijjMTSw&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=32&pp=iAQB) | 7:00
[#32 - Como enviar emails | parte 1](https://www.youtube.com/watch?v=N-071QyQ_gg&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=33&pp=iAQB) | 18:47
[#33 - Como enviar emails | parte 2](https://www.youtube.com/watch?v=JT063o8OaHY&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=34&pp=iAQB) | 18:12
[#34 - Como enviar emails | parte 3](https://www.youtube.com/watch?v=BFyEVqqaX9c&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=35&pp=iAQB) | 13:55
[PHP Profissional Orientado a Objetos | Resolvendo bug do sql injection](https://www.youtube.com/watch?v=O4reeB1WkcM&list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&index=36&pp=iAQB) | 22:58
