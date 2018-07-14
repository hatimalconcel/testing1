<?php
use Codeception\Util\Locator;

class FirstCest 
{
  
    public function homePageCheck(AcceptanceTester $I)
    {
        $I->wantTo('checking home page');
        $I->amOnPage('/');
        $I->see('Encuentra tu hotel ideal y compara los precios de numerosas webs');  

    }

    public function logInlogOutCheck(AcceptanceTester $I)
    {
      
        $I->wantTo('checking logIn logOut');
        $I->amOnPage('/');  
        $I->wait(1);
        $I->click('//*[@id="js_navigation"]/div/div[2]');
        $I->click('//*[@id="js_navigation"]/div/div[2]/div/section/div/ul/li[1]/button');  
        $I->fillField('//*[@id="login_email"]','06hatim22@gmail.com');
        $I->fillField('//*[@id="login_password"]','hatzbilly1');
        $I->click('/html/body/div/form/div/section[1]/div[3]/button');
        $I->wait(1);
        $I->click('//*[@id="member"]');
        $I->wait(1);
        $I->click('//*[@id="js_navigation"]/div/div[2]/div/section/div/ul/li[2]/button');
        
    }


    public function checkingSearchBar(AcceptanceTester $I){
        $I->wantTo('checking Search Bar');
        $I->amOnPage('/');
        $I->fillField('//*[@id="horus-querytext"]','test');
        $I->click('#js-fullscreen-hero > div > form > div > div:nth-child(1) > div > div > div.horus__col.horus__col--search > button');
        $I->see('test');
    }
    
        public function checkingfilter(AcceptanceTester $I){
        $I->wantTo('checking Ordenar por');
        $I->amOnPage('/');
        $I->fillField('//*[@id="horus-querytext"]','test');
        $I->click('#js-fullscreen-hero > div > form > div > div:nth-child(1) > div > div > div.horus__col.horus__col--search > button');
        $I->see('Ordenar por');
      //$I->click('.//*[@id="mf-select-sortby"]');
        $I->selectOption('#mf-select-sortby','Valoración y recomendados');
        $I->wait(3);
        $I->click('.//*[@id="mf-select-sortby"]');
        $I->selectOption('#mf-select-sortby','Precio y recomendados');
        $I->wait(3);
        $I->click('.//*[@id="mf-select-sortby"]');
        $I->selectOption('#mf-select-sortby','Distancia y recomendados');
        $I->wait(3);
        $I->click('.//*[@id="mf-select-sortby"]');
        $I->selectOption('#mf-select-sortby','Solo valoración');
        $I->wait(3);

    }


        public function checkingCurrency(AcceptanceTester $I){
        $I->wantTo('checking Currency');
        $I->amOnPage('/');
        $I->fillField('//*[@id="horus-querytext"]','test');
        $I->click('#js-fullscreen-hero > div > form > div > div:nth-child(1) > div > div > div.horus__col.horus__col--search > button');
        $I->selectOption('#currency','GBP');
        $I->wait(2);
        $I->see('GBP');
        $I->wait(2);
    }
}