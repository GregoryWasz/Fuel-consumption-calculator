<?php
namespace app\controllers;
// załadowanie potrzebnych klas
use app\forms\CalcForm;
use app\transfer\CalcResult;


// klasa kalkulatora spalania
class CalcCtrl
{
    private $form;
    private $result;

    //konstruktor
    public function __construct(){

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    //pobranie parametrów
    public function getParams()
    {
        $this->form->x = getFromRequest('x');
        $this->form->y = getFromRequest('y');
        $this->form->z = getFromRequest('z');
    }

    //walidacja parametrów
    public function validate()
    {

        //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
        if (!(isset($this->form->x ) && isset($this->form->y) && isset($this->form->z))){
            return false;
        }


        if ($this->form->x  == ""){
            getMessages()->addError('Nie podano liczby 1');
        }
        if ($this->form->y  == ""){
            getMessages()->addError('Nie podano liczby 2');
        }
        if ($this->form->z  == ""){
            getMessages()->addError('Nie podano liczby 3');
        }


        if (! getMessages()->isError()) {
            // sprawdzenie, czy $x, $y, $z są liczbami całkowitymi
            if (!is_numeric($this->form->x )){
                getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->y )){
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->z )){
                getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
            }
        }

        return ! getMessages()->isError();
    }

    // wykonuje obliczenia
    public function action_CalcCompute()
    {

        $this->getParams();


        if ($this->validate()) {

            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = intval($this->form->z);
            getMessages()->addInfo('Parametry poprawne.');

            $this->result->result = $this->form->x / 100 * $this->form->y * $this->form->z;
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        //generowanie widoku - tylko bloku z kalulatorem
        $this->generateView();

    }

    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    //Smarty
    public function generateView(){
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        getSmarty()->display('CalcView.tpl');
    }
}