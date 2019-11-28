<?php

class MainController {

    public function home() { 

        $dbdata = new DBData(); 
        $pokemons = $dbdata->getPokemon();        
            
        $this->show('home', [
            'Pokemon' => $pokemons
        ]);
    }

    public function details($match) { 

        $dbdata = new DBData(); 
        $onePokemon = $dbdata->getOnePokemon($match['id']);       
            
        $this->show('details', [
            'Pokemon' => $onePokemon
        ]);
    }

    public function error404(){
        $this->show ('404');
    }

    public function show($viewName, $viewVars=array()) {
        global $router;
        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
    }
}