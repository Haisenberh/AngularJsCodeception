<?php


class LoginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function loginAsRegisteredUser(FunctionalTester $I,  \Page\LoginPage $loginPage)
    {
        $loginPage->login('employee-boo@platinium-group.org', '123123');
        $I->seeInTitle('MY ACCOUNT');
        $I->see('Welcome to your order history.');
    }
}
