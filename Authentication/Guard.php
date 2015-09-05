<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Security\Authentication;

use Anonym\Components\Security\Security;

/**
 * Class Guard
 * @package Anonym\Components\Security\Authentication
 */
class Guard extends Authentication
{
    /**
     * create a new instance
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * check is login usered
     *
     * @return bool
     */
    public function isLogined()
    {
        $session = $this->getSession();
        $cookie = $this->getCookie();

        if ($cookie->has(self::USER_SESSION)) {
            $login = $cookie->get(self::USER_SESSION);
        }elseif (false !== $session->has(self::USER_SESSION)) {
            $login = $session->get(self::USER_SESSION);
        }else{
            return false;
        }

        return $this->isSameIp($login);
    }

    /**
     *  check the ip's
     *
     * @param LoginObject|ip
     * @return bool
     */
    public function isSameIp($ip){

        if ($ip instanceof LoginObject) {
            $ip = $ip['ip'];
        }

        return $ip === Security::ip();
    }

    /**
     * check the user role
     *
     * @param string|int $role
     * @return bool
     */
    public function hasRole($role = ''){

    }
}
