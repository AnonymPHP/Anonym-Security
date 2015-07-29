<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security;
    use Anonym\Components\Security\FirewallCheckerInterface;
    /**
     * Class LanguageFirewall
     * @package Anonym\Components\Security
     */
    class LanguageFirewall extends FirewallChecker implements FirewallCheckerInterface
    {

        /**
         * Kontrol işlemini gerçekleştirir
         *
         * @return bool
         */
        public function handle(){
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
        }

    }
