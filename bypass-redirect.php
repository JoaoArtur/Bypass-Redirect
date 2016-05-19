<?php 

// vai falar q kibei?

function bypassredirect($site,$lista,$tipo) {
	foreach ($lista as $caminho) {
		$pagina = $caminho.".".$tipo;
		$link = str_replace(array("//","http:/","https:/"),array("/","http://","https://"),$site."/".$pagina);
		$cabecalho = get_headers($link);
		if (strstr($cabecalho[0],"302")) {
			echo "[+] ".$link."\n";
		}
	}
}

if (count($argv) == 1) {
	echo "Bypass Redirect file finder\nBy Keni Hacking\n\nUso: php ".$_SERVER['SCRIPT_NAME']." site tipo\n\nTipos: php,asp,aspx,jsf,html\n";
} else {
	if (count($argv) == 3) {
		echo "Bypass Redirect file finder\nBy Keni Hacking\n\n";
		$filename = $argv[0];
		$site = $argv[1];
		$tipo = $argv[2];

		$arquivos = array("index","login","dashboard","painel","principal","panel","admin","home","main","noticias","dash","start","usuario","user","users","news","events","licitacoes","config","logado","online","local","adm");
		switch ($tipo) {
			case 'php':
				echo "Site: ".$site."\nTipo: php\n";
				bypassredirect($site,$arquivos,"php");
				break;
			case 'asp':
				echo "Site: ".$site."\nTipo: asp\n";
				bypassredirect($site,$arquivos,"asp");
				break;
			case 'aspx':
				echo "Site: ".$site."\nTipo: aspx\n";
				bypassredirect($site,$arquivos,"aspx");
				break;
			case 'jsf':
				echo "Site: ".$site."\nTipo: jsf\n";
				bypassredirect($site,$arquivos,"jsf");
				break;
			case 'html':
				echo "Site: ".$site."\nTipo: html\n";
				bypassredirect($site,$arquivos,"html");
				break;
			
			default:
				echo "Tipo desconhecido.";
				break;
		}
	} else {
		echo "Bypass Redirect file finder\nBy Keni Hacking\n\nUso: php ".$_SERVER['SCRIPT_NAME']." site tipo\n\nTipos: php,asp,aspx,jsf,html\n";
	}
}

?>
