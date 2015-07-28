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
     * Interface AuthenticationDatabaseUpdateInterface
     * @package Anonym\Components\Security\Authentication
     */
    interface AuthenticationDatabaseUpdateInterface
    {

        /**
         * Veri güncelleme işlemi yapar
         *
         * @param string $table
         * @param callable|null $callable
         * @return mixed
         */
        public function update($table, callable $callable = null);
    }

