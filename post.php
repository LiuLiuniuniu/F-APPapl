<?phprequire_once('file.php');$data=array(	'id'=>1,	'name'=>'xiaoming');$file=new file();if($file->cacheData('index_liuhai',null)){		echo 'success';}else{	echo 'error';}