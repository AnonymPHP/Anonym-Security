<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security\Authentication\DatabaseInterfaces;

    /**
     * Interface AuthenticationDatabaseReadInterface
     * @package Anonym\Components\Security\Authentication
     */
    interface AuthenticationDatabaseReadInterface
    {

        /**
         * Veri okuma işlemi yapar
         *
         * @param string $table
         * @param callable|null $callable
         * @return mixed
         */
        public function read($table, callable $callable = null);
    }
