<?php

namespace app\controllers;
use PDOException;

require getConf()->root_path.'/Medoo/Medoo.class.php';





class ListaCtrl {

	private $records; //rekordy pobrane z bazy danych
    private $hide_intro;

    public function __construct(){
	
		$this->hide_intro = true;
		
	}

	
	public function action_listaWynikow(){
	// 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
		$search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
	
	
		
		try{

            $database = new \Medoo\Medoo([
				// [required]
				'type' => 'mysql',
				'host' => 'localhost',
				'database' => 'mydb',
				'username' => 'root',
				'password' => '',
			 
				// [optional]
				'charset' => 'utf8mb4',
				'collation' => 'utf8mb4_general_ci',
				'port' => 3306,
			
				// [optional] To enable logging. It is disabled by default for better performance.
				//'logging' => true,
			 
				// [optional]
				// Error mode
				// Error handling strategies when the error has occurred.
				// PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
				// Read more from https://www.php.net/manual/en/pdo.error-handling.php.
				//'error' => PDO::ERRMODE_SILENT,
			 
				// [optional]
				// The driver_option for connection.
				// Read more from http://www.php.net/manual/en/pdo.setattribute.php.
				'option' => [
					\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
					\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
				],
			 
				// [optional] Medoo will execute those commands after the database is connected.
			
			]);

			$this->records = $database->select("wynik", [
					"idwynik",
					"kwota",
					"procent",
					"lat",
                    "rata",
                    "data"
				] );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		// 4. wygeneruj widok

        
        getSmarty()->assign('hide_intro',$this->hide_intro);
		getSmarty()->assign('wynik',$this->records);  // lista rekordów z bazy danych
		getSmarty()->display('Lista.tpl');
	}
}