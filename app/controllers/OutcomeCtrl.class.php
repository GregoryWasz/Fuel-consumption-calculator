<?php


namespace app\controllers;


class OutcomeCtrl
{
    private $database;
    private $datas;

    public function __construct(){
        $this->getDatabase();
        $this->getDatas();
    }

    public function action_outcome(){

        $this->generateView();
    }

    public function getDatabase(){
        try {
            $this->database = new \Medoo\Medoo([
                // required
                'database_type' => 'mysql',
                'database_name' => 'calc',
                'server' => 'localhost',
                //korzystam z MAMP dlatego domyślne hasło również jest root
                'username' => 'root',
                'password' => 'root',
                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                //korzystam z MAMP dlatego port 8889
                'port' => 8889,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]);

        } catch (\PDOException $ex){
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }
    }

    public function getDatas(){
        $this->datas = $this->database ->select("wynik", [
            "dlugosc",
            "srednia",
            "cena",
            "koszt",
            "data"
        ]);
    }


    public function generateView(){
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('database',$this->database);
        getSmarty()->assign('datas',$this->datas);
        getSmarty()->display('OutcomeView.tpl');
    }
}