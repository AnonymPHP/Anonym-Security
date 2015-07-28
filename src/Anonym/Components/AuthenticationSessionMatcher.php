<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security;

    /**
     * Session ile kullanıcının giriş yapıp yapmadığını kontrol eder
     *
     * Class AuthenticationSessionMatcher
     * @package Anonym\Components\Security\Exception
     */
    class AuthenticationSessionMatcher extends  Authentication implements  AuthenticationMatcherInterface
    {

        /**
         * Kullanıcının giriş yapıp yapmadığını session a bakarak kontrol eder
         *
         * @return bool
         */
        public function match(){

            $session = $this->getSession();
            $key = static::USER_SESSION;

            if($session->has($key)){

                return true;
            }else{
                return false;
            }
        }

    }