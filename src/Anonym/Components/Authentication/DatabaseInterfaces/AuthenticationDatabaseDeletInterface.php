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
     * Interface AuthenticationDatabaseDeleteInterface
     * @package Anonym\Components\Security\Authentication\DatabaseInterfaces
     */
    interface AuthenticationDatabaseDeleteInterface
    {

        /**
         * Veri silme işlemi yapar
         *
         * @param string $table
         * @param callable|null $callable
         * @return mixed
         */
        public function delete($table, callable $callable = null);
    }
