<?php

#error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

//ini_set('error_reporting', E_ALL & ~E_WARNING);

$array=[1];
echo $array[3];

//display_errors
//ini_set('display_errors', 0);
$array=[1];
echo $array[3];

//post_max_size
//bir istekte ne kadar veri yollanabileceğini sınırlar.

//max_execution_time()
//bir işlemin en fazla kaç sn'de execute edileceğini belirtir. istenilen süreden fazla olursa fatal eror veririr.

//ini_set('max_execution_time', 3);
//sleep(5);

//memory_limit()
//değeri -1 verirsen memory limiti kaldırır.

var_dump((ini_get('memory_limit')));
//ini_set('memory_limit',10000000); byte cinsindden yazar.

#bu aşağıdakileri bir bak
//file_uploads
//upload_tmp_dir
//upload_max_filesize
//date_timezone
//include_path






