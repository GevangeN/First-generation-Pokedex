<?php
class DBData
{
    private $dbh;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $username = 'pokedex';
        $password = 'pokedex';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->dbh = new PDO($dsn, $username, $password, $options);
    }

    public function getPokemon() {

        $sql = "SELECT * FROM `pokemon`";
        $result = $this->dbh->query($sql);        
        $pokemons = $result->fetchall(PDO::FETCH_ASSOC);
        return $pokemons;
    }

    public function getOnePokemon($id) {

        $sql = "SELECT * FROM `pokemon` WHERE pokemon.numero =".$id;
        $result = $this->dbh->query($sql);        
        $onePokemon = $result->fetchall(PDO::FETCH_ASSOC);
        return $onePokemon;
    }
 
}