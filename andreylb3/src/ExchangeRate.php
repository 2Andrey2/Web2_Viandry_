<?php

namespace viandry\andreylb3;

class ExchangeRate
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function SetCurrency($currency)
    {
        $languages = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
        if(isset($_COOKIE["cursvalut"]))
        { 
            $this->result = $_COOKIE["cursvalut"];
        } else {
            //валюты
            foreach ($languages->Valute as $lang) {
                if ($lang["ID"] == $currency) { //тип валюты
                    $koeficient1 = round(str_replace(',','.',$lang->Value), 2); //ее значение
                    $koeficient1a = $lang->Nominal.' '.$lang->Name.' = '.$koeficient1.' руб.'; //запоминаем номинал
                    SetCookie("cursvalut",$koeficient1a,time()+3600*12);
                } //в куках
            }
            $this->result = $koeficient1a;
        }
        return $this->result;
    }

    public function getResult()
    {
        return $this->result;
    }
}