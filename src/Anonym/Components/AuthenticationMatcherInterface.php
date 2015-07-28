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
     * Interface AuthenticationMatcherInterface
     * @package Anonym\Components\Security
     */
    interface AuthenticationMatcherInterface
    {

        /**
         * Kontrolu yapar ve girişin yapılıp yapılmadığını kontrol eder
         *
         * @return bool
         */
        public function match();
    }


