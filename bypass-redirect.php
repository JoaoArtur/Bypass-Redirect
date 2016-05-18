<?php 
	if (count($argv) == 1) {
$text=' _   __ _____  _   _  _____   _   _   ___   _____  _   __ _____  _   _  _____ 
| | / /|  ___|| \ | ||_   _| | | | | / _ \ /  __ \| | / /|_   _|| \ | ||  __ \
| |/ / | |__  |  \| |  | |   | |_| |/ /_\ \| /  \/| |/ /   | |  |  \| || |  \/
|    \ |  __| | . ` |  | |   |  _  ||  _  || |    |    \   | |  | . ` || | __ 
| |\  \| |___ | |\  | _| |_  | | | || | | || \__/\| |\  \ _| |_ | |\  || |_\ \
\_| \_/\____/ \_| \_/ \___/  \_| |_/\_| |_/ \____/\_| \_/ \___/ \_| \_/ \____/'."\nUso: php ".$_SERVER['SCRIPT_NAME']." site tipo\n\nTipos: php,asp,aspx,jsf,html";
		echo $text;
	} else {
		if (count($argv) == 3) {
$text=' _   __ _____  _   _  _____   _   _   ___   _____  _   __ _____  _   _  _____ 
| | / /|  ___|| \ | ||_   _| | | | | / _ \ /  __ \| | / /|_   _|| \ | ||  __ \
| |/ / | |__  |  \| |  | |   | |_| |/ /_\ \| /  \/| |/ /   | |  |  \| || |  \/
|    \ |  __| | . ` |  | |   |  _  ||  _  || |    |    \   | |  | . ` || | __ 
| |\  \| |___ | |\  | _| |_  | | | || | | || \__/\| |\  \ _| |_ | |\  || |_\ \
\_| \_/\____/ \_| \_/ \___/  \_| |_/\_| |_/ \____/\_| \_/ \___/ \_| \_/ \____/'."\n";

function bypassredirect($site,$paginas,$tipo) {
	foreach ($paginas as $pagina) {
		$h=get_headers($site."/".$pagina.".".$tipo);
		if ($h[0] == "HTTP/1.1 302 Found" or $h[0] == "HTTP/1.1 200 OK") {
			$rs = str_replace(array("//","http:/"),array("/","http://"),$site."/".$pagina.".".$tipo);
			echo "[+] ".$rs."\n";
		}
	}
}

$paginas=array("admin","dashboard","dash","painel","index","home","main","noticias","news","panel","adm","trocar-senha","usuario","usuarios","licitacoes","principal","princ","admin_index","default","inicio","logado","online","upload","album","administrator","adm","kpanel","cpanel","gerenciador","manager","registro","local");
switch ($argv[2]) {
	case 'php':
		print $text."Site: $argv[1]\nTipo: $argv[2]\n";
		bypassredirect($argv[1],$paginas,"php");
		break;
	case 'asp':
		print $text."Site: $argv[1]\nTipo: $argv[2]\n";
		bypassredirect($argv[1],$paginas,"asp");
		break;
	case 'aspx':
		print $text."Site: $argv[1]\nTipo: $argv[2]\n";
		bypassredirect($argv[1],$paginas,"aspx");
		break;
	case 'jsf':
		print $text."Site: $argv[1]\nTipo: $argv[2]\n";
		bypassredirect($argv[1],$paginas,"jsf");
		break;
	case 'html':
		print $text."Site: $argv[1]\nTipo: $argv[2]\n";
		bypassredirect($argv[1],$paginas,"html");
		break;
	
	default:
		print $text."Site: $argv[1]\nTipo: o tipo definido invalido.";
		break;
}
		} else {
$text=' _   __ _____  _   _  _____   _   _   ___   _____  _   __ _____  _   _  _____ 
| | / /|  ___|| \ | ||_   _| | | | | / _ \ /  __ \| | / /|_   _|| \ | ||  __ \
| |/ / | |__  |  \| |  | |   | |_| |/ /_\ \| /  \/| |/ /   | |  |  \| || |  \/
|    \ |  __| | . ` |  | |   |  _  ||  _  || |    |    \   | |  | . ` || | __ 
| |\  \| |___ | |\  | _| |_  | | | || | | || \__/\| |\  \ _| |_ | |\  || |_\ \
\_| \_/\____/ \_| \_/ \___/  \_| |_/\_| |_/ \____/\_| \_/ \___/ \_| \_/ \____/'."\nArgumentos faltando.";
print $text;
		}
	}
?>