<?php
	//Manipulaçao de Arquivo

	/*
	fopen()
	fclose()
	fwrite()
	!feof()
	fgets()
	filesize
	*/
	
	$arquivo ='54_arquivo.txt';
	$conteudo = "Conteudo de teste\r\n";
	
	$arqAberto = fopen($arquivo,'r');
//	fwrite($arqAberto,$conteudo); //escrever no arquivo
	$tamArq = filesize($arquivo);
	
	while(!feof($arqAberto)){
		$row = fgets($arqAberto,$tamArq);
		echo "$row<br>";
	}
	
	fclose($arqAberto);
/*
‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
*/
	
?>