<?php
$path = "/storage/emulated/0/Documents/php7/site2/public/33_formularios";
$diretorio = dir($path);
 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='33_formularios/".$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?>