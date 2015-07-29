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
            $allowed = $this->getAlloweds();
            $useragent = $this->getValue();
            if('*' === $allowed){
                return true;
            }

            $allowed = (array) $allowed;
            if (is_array($allowed)) {
                foreach($allowed as $allow)
                {
                    if (strstr($useragent, $allow)) {
                        return true;
                    }
                }
            }

            return false;
        }
    }
