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
     * Interface FirewallInterface
     * @package Anonym\Components\Security
     */
    interface FirewallInterface
    {

        /**
         * Yakalama işlemini ve güvenlik önlemlerini yapar
         *
         * @return bool
         */
        public function handle();
    }
