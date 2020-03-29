<?php
// załadowanie potrzebnych klas
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


// klasa kalkulatora spalania
class CalcCtrl
{
    private $msgs;
    private $form;
    private $result;

    //konstruktor
    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    //pobranie parametrów
    public function getParams()
    {
        $this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
        $this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
    }

    //walidacja parametrów
    public function validate()
    {

        //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
        if (!(isset($this->form->x ) && isset($this->form->y) && isset($this->form->z))){
            return false;
        }

        //
        if ($this->form->x  == ""){
            $this->msgs->addError('Nie podano liczby 1');
        }
        if ($this->form->y  == ""){
            $this->msgs->addError('Nie podano liczby 2');
        }
        if ($this->form->z  == ""){
            $this->msgs->addError('Nie podano liczby 3');
        }


        if (! $this->msgs->isError()) {
            // sprawdzenie, czy $x, $y, $z są liczbami całkowitymi
            if (!is_numeric($this->form->x )){
                $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->y )){
                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->z )){
                $this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
            }
        }

        return ! $this->msgs->isError();
    }

    // wykonuje obliczenia
    public function process()
    {
        $this->getparams();

        if ($this->validate()) {
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = intval($this->form->z);
            $this->msgs->addInfo('Parametry poprawne.');

            $this->result->result = $this->form->x / 100 * $this->form->y * $this->form->z;
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        //generowanie widoku - tylko bloku z kalulatorem
        $this->generateView();

    }

    //Smarty
    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);




        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        $smarty->display($conf->root_path.'/app/calc/CalcView.html');

    }
}