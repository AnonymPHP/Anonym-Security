<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security;
    use Anonym\Components\Crypt\SecurityKeyGenerator as Parent;

    /**
     * Class SecurityKeyGenerator
     * @package Anonym\Components\Security
     */
    class SecurityKeyGenerator extends Parent implements KeyGeneratorInterface
    {
        /**
         * Güvenlik kodunu oluşturur
         *
         * @return string
         */
        public function generate(){
            return $this->create();
        }
    }
