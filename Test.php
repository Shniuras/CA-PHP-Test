<?php

class Test {
    public function __construct () {
        echo "Seimur Alyjev" . "\n";

    }
    public function dayToday(){
         return date("Y-m-d") . "\n";
    }

    public function storeToCookie() {
        $cookie_name = "test_today";
        $cookie_value = $this->dayToday();
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
    }

    public function isEven(int $value){
        if ($value % 2 == 0) {
            return true . "\n";
        }
    }

    public $language = "LT" . "\n";

    public function setLanguage(string $language){
        if($language == "Lithuania"){
            $this->language = "LT" . "\n";
        } elseif ($language == "Russia"){
            $this->language = "RU" . "\n";
        } elseif ($language == "Poland"){
            $this->language = "PL" . "\n";
        }
    }

    public function discount(array $masyvas){
        arsort($masyvas);
        $top_three = array_slice($masyvas, 0, 3);
        for ($i=0; $i<3; $i++){
            $result[] = $top_three[$i] * 0.9;
        }
        print_r($result);
    }

    public function storeRandom() {
        $myfile = fopen("random.txt", "a") or die ("Could not create/open file");
        $txt = rand(1990,2017) . "\n";
        fwrite($myfile,$txt);
        fclose($myfile);
    }

    public function glueText(string $text) {
        $upperCaseWords = ucwords($text);
        echo str_replace(' ', '',$upperCaseWords) . "\n";
    }

    public function textGen(array $words) {
        $masyvas=[];
        for($i=0; $i<100; $i++){
            $masyvas[] = $words[array_rand($words, 1)];
        }
        return implode(" ",$masyvas);
    }
}

$myTest = new Test;
//2.
echo $myTest->dayToday();
//3.
$myTest->storeToCookie();
//4.
echo $myTest->isEven(8);
//5.
echo $myTest->language;
//6.
$myTest->setLanguage("Poland");
echo $myTest->language;
//7.
$testas = [148, 244, 52, 49, 55, 19, 1];
$myTest->discount($testas);
//8.
$myTest->storeRandom();
//9.
$sentenece = "this is a very simple sentence";
echo $myTest->glueText($sentenece);
//10.
$zodziai = ["Juozas", "Masina", "Kate", "Namai", "Boba"];
echo $myTest->textGen($zodziai);


