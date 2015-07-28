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
     * Class Login
     * @package Anonym\Components\Security\Authentication
     */
    class Login extends Authentication
    {

        /**
         * Veritabanı objesini tutar
         *
         * @var AuthenticationDatabaseReadInterface
         */
        private $db;

        /**
         * @param AuthenticationDatabaseReadInterface $db
         */
        public function __construct(AuthenticationDatabaseReadInterface $db){
            parent::__construct();
            $this->setDb($db);
        }

        /**
         * Kullanıcı girişi yaptırılır
         * $remember true girilirse cookie e atanır veriler.
         *
         * @param string $username
         * @param string $password
         * @param bool|false $remember
         * @return bool
         */
        public function login($username = '', $password = '', $remember = false)
        {

        }

        /**
         * @return AuthenticationDatabaseReadInterface
         */
        public function getDb()
        {
            return $this->db;
        }

        /**
         * @param AuthenticationDatabaseReadInterface $db
         * @return Login
         */
        public function setDb($db)
        {
            $this->db = $db;

            return $this;
        }

        /**
         * Dinamik olarak method çağrımı
         *
         * @param $method
         * @param $params
         * @return mixed
         */
        public function __call($method, $params){
            return call_user_func_array([$this->getDb(), $method], $params);
        }

    }
