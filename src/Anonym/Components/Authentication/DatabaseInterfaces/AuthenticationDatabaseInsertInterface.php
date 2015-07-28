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
     * Interface AuthenticationDatabaseInsertInterface
     * @package Anonym\Components\Security\Authentication\DatabaseInterfaces
     */
    interface AuthenticationDatabaseInsertInterface
    {
        /**
         * Veri ekleme işlemi yapar
         *
         * @param string $table
         * @param callable|null $callable
         * @return mixed
         */
        public function insert($table, callable $callable = null);
    }