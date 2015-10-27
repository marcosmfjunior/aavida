//---------------------------//-------------------------------//


Obs :

Front-end = utilizamos bootstrap como framework de front-end com foco na usabalidade do leitor,
colocando pouca estilização para o administrador do blog. 
Todos os casos de acentuação foram tratados.


Back-end = Foi utilizado a função base_64 para criptografar a senha. Foi criada a funcionalidade de criar um blog. 
Foi alterado o Banco de Dados,
para as funçoes de postagens.



//---------------------------//-------------------------------//



Matricula:


71913 - Ismael Altenhofen

71921 - Marcos Martins



//---------------------------//-------------------------------//


Relatorio de segurança:


Como o SQL Injection é uma grande ameaça para sistemas que se utilizam de base de dados SQL,

há certos cuidados para se evitar invasões:



->  prepared statements
	utilizar ?(placeholder) para se fazer consultas ao BD, com o PDO bindValue
	

-> PDO
	A classe PDO tem mais segurança para se trabalhar com BD do que outras classes do PHP
	

-> mysql_real_escape_string 
	Escapa os caracteres especiais numa string para usar em um comando SQL, levando em conta o conjunto atual de caracteres.
	


//---------------------------//-------------------------------//




