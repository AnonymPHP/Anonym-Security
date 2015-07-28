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
     * Class Register
     * @package Anonym\Components\Security\Authentication
     */
    class Register extends Authentication implements RegisterInterface
    {

        public function __construct($db, array $tables = [])
        {
            $this->setTables($tables);

        }

        /**
         * Kullanıcı kayıt işlemini yapar
         *
         * @param array $post
         * @return mixed
         */
        public function register(array $post = [])
        {

        }

    }

