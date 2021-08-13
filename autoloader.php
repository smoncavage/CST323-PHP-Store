
<?php
spl_autoload_register(function($className) {

	// $lastdirectories = substr(getcwd(), strlen(__DIR__));

	// $numoflastdirectories = substr_count($lastdirectories,'/');

	// $directories = ['businessService', 'businessService/model', 'database', 'presentation', 'presentation/css', 'presentation/handlers', 
	// 			'presentation/javascript', 'presentation/pictures', 'presentation/views', 'presentation/views/login', 'utility'];
	
	// foreach($directories as $dir){
	// 	$currentdirectory = $dir;
	// 	for($x = 0; $x < $numoflastdirectories; $x++){
	// 		$currentdirectory = "../".$currentdirectory;
	// 	}
	// 	$classfile = $currentdirectory. '/' .$className. '.php';
	// 	if(is_readable($classfile)){
	// 		if(require $dir. '/' .$className. ".php"){
	// 			break;
	// 		}
	// 	}
	// }

	$file = __DIR__ . '\\' . $className . '.php';
	$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
	if (file_exists($file)) {
		include $file;
	}
});
?>