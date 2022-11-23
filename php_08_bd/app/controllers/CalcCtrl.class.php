<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro
	

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = true;
		
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->op = getFromRequest('op');
		$this->form->y = getFromRequest('y');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano na ile lat');
		}

		if ($this->form->op == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->op )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}

			if ($this->form->x < 0 ) {
				getMessages()->addError('Pierwsza wartość nie może być mniejsza od zera');
			}

			if ($this->form->op < 0 ) {
				getMessages()->addError('Trzecia wartość nie może być mniejsza od zera');
			}

			if ($this->form->y < 0 ) {
				getMessages()->addError('Druga wartość nie może być mniejsza od zera');
			}

			
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->op = floatval($this->form->op);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			

			$this->result->rata = $this->form->x / ($this->form->y * 12);

			$this->result->op = $this->result->rata * ($this->form->op / 100);
		
			$this->result->result = $this->result->rata + $this->result->op;
		
			$this->result->result = round($this->result->result, 2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}

		try {
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

			$database->insert("wynik", [
				"kwota" => $this->form->x,
				"procent" => $this->form->op,
				"lat" => $this->form->y,
				"rata" => $this->result->result,
				"data" => date("Y-m-d H:i:s")
			]);

		} catch (\PODException $ex){

			getMessages() -> addError("DB Error ".$ex_.getMessage());

		}
		
		$this->generateView();
	}
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $user;

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('hide_intro',$this->hide_intro);
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->display('calc_kredytowy.tpl');
	}
}
