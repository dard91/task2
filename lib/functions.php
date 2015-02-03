<?php
Class functions{

	private $fn;
	
	public function __construct(){
		$this->fn=file('file.txt');	
    }

	//достали строку
    public function get_string($stringNum){
         
		$string=$this->fn[$stringNum];
		print_r($string);
		
	}
	//достали символ со строки
	public function get_simbol($stringNum, $simbolNum){
	    echo $this->fn[$stringNum][$simbolNum];
    }

	public function add_simbol($stringNum, $simbolNum, $newSimbol){
		$this->fn[$stringNum][$simbolNum]=$newSimbol;
    }
    
	public function add_string($stringNum){
	
	}
	
	public function file_read(){
		$fp = fopen("file.txt", "r"); // Открываем файл в режиме чтения
		if ($fp) 
		{
		while (!feof($fp))
		{
		$mytext = fgets($fp, 999);
		echo $mytext."<br />";
		}
		}
		else echo "Ошибка при открытии файла";
		fclose($fp);
	}
	
	function  __destruct(){
        file_put_contents('old.txt', $this->fn);
    }


	
	
}
	

 ?>
