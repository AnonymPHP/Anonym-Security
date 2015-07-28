<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security\Authentication;

    /**
     * Class AuthenticationRegisterObject
     * @package Anonym\Components\Security\Authentication
     */
    class AuthenticationRegisterObject
    {

        /**
         * Kullanıcı bilgilerini depolar
         *
         * @var array
         */
        private $user;

        /**
         * Sınıfı başlatır
         *
         * @param array $user
         */
        public function __construct(array $user = [])
        {
            $this->setUser($user);
        }

        /**
         * @return array
         */
        public function getUser()
        {
            return $this->user;
        }

        /**
         * @param array $user
         * @return AuthenticationRegisterObject
         */
        public function setUser($user)
        {
            $this->user = $user;

            return $this;
        }
    }
