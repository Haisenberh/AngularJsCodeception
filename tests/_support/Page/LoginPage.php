<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = '8481-driving-experiences/en/experiences/home/';

    public static $myAccountLink = ['link' => 'My account'];
    public static $emailField = 'input[name=email]';
    public static $passwordField = 'input[name=password]';
    public static $signInButton = '//button[@type=\'submit\' and span=\'Sign in\']';

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
        $I = $this->tester;

        $I->amOnPage(self::$URL);

        $I->click(self::$myAccountLink);
        $I->fillField(self::$emailField, $email);
        $I->fillField(self::$passwordField, $password);
        $I->click(self::$signInButton);

        return $this;
    }


}
