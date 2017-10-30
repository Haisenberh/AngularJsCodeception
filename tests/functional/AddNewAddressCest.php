<?php


class AddNewAddressCest
{
    public function _before(\Page\LoginPage $loginPage)
    {
        $loginPage->login('employee-boo@platinium-group.org', '123123');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function addNewAddressToAccount(FunctionalTester $I, \Page\MyAccountPage $myAccountPage, \Page\MyAddressesBlock $addAnAddressPage)
    {
        $I->click($myAccountPage::$myAddressesLink);
        $I->click($addAnAddressPage::$addAnAddressButton);
    }
}
