<?php
namespace Page;

class MyAccountPage
{
    // include url of current page
    public static $URL = '8481-driving-experiences/en/my-account';

    public static $myAccountLink = ['link' => 'My account'];
    public static $myAddressesLink = '//a[@ui-sref=\'account.addresses\']';

    /**
     * @var \FunctionalTester
     */
    protected $tester;

    public function __construct(\FunctionalTester $I)
    {
        $this->tester = $I;
    }

    public function login($email, $password)
    {
    }


}
