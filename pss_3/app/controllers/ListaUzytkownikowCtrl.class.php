<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\SzukajUzytkownikaForm;

class ListaUzytkownikowCtrl {

    private $data;
    private $rola = array();
    private $page = 1;
    
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new SzukajUzytkownikaForm();
    }

    
    public function action_listaUzytkownikow() { 

        $this->form->login = ParamUtils::getFromRequest('sf_login');
      
        $this->page = ParamUtils::getFromCleanURL(1, true);

        if(!empty(ParamUtils::getFromCleanURL(2, true)))
        $this->form->login = ParamUtils::getFromCleanURL(2, true);

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->login) && strlen($this->form->login) > 0) {
            $search_params['login[~]'] = $this->form->login . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        
        
        //wykonanie zapytania
        
        

        if($this->page == 0)
        $this->page = 1;

        $limit = 6;        
        $offset = $limit*($this->page-1);

        $where ["LIMIT"] = [$offset, $limit];

        $this->data = App::getDB()->select("user", [
                "idUser",
                "login",
                "password",
                "email",
                "data_modyfikacji",
                "data_utworzenia",
                "id_modyfikacja"      
        ], $where);
        
        
        $sum = count($this->data);
        
        if($sum == 0)
        $this->page = $this->page - 1;
        

        

        $countUser = App::getDB()->count("user");

        
        
        foreach ($this->data as &$p) {

            $record = App::getDB()->select("user_has_role", [            
                "[><]user" => ["User_idUser" => "idUser"],
                "[><]role" => ["Role_idRole" => "idRole"]
            ], [
                "user.idUser",
                "role.nazwa"
            ],[
                "User_idUser" => $p["idUser"]
            ]); 

            foreach ($record as &$p)
                array_push($this->rola, $p);
        }

  
        App::getSmarty()->assign("data",$this->data); 
        App::getSmarty()->assign("rola",$this->rola);
        App::getSmarty()->assign("page",$this->page); 
        App::getSmarty()->assign('searchForm', $this->form);    
        App::getSmarty()->assign("sum",$sum); 
        App::getSmarty()->assign("limit",$limit); 
        App::getSmarty()->display("ListaUzytkownikow.tpl");
        
    }
    
}