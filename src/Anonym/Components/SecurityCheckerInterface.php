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
     * Interface SecurityCheckerInterface
     * @package Anonym\Components\Security
     */
    interface SecurityCheckerInterface
    {

        /**
         * Kontrol etme işlemini yürütür
         *
         * @return mixed
         */
        public function run();
    }
