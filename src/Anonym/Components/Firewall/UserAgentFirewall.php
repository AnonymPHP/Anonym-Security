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
     * Class UserAgentFirewall
     * @package Anonym\Components\Security
     */
    class UserAgentFirewall extends FirewallChecker implements FirewallCheckerInterface
    {

        /**
         * Karşılaştırma yapar
         *
         * @return bool
         */
        public function handle()
        {
            return $this->defaultChecker();
        }
    }
