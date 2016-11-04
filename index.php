<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("ARQUIVO_LOG","log.txt");
	
	$log = @fopen(ARQUIVO_LOG, "x");
	// se for  igual a false, o arquivo de log já existe
	if($log == false){
		// o atributo a abre o arquivo e posiciona o ponteiro no final do mesmo
		$log = fopen(ARQUIVO_LOG,"a");
	}
	
	require_once("controller/ctrl_login.php");	
        ?>
    </body>
</html>
