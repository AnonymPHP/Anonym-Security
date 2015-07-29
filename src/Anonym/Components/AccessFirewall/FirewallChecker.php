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
     * Class FirewallChecker
     * @package Anonym\Components\Security
     */
    abstract class FirewallChecker
    {
        /**
         * İzin verilen encoding leri tutar
         *
         * @var array
         */
        private $alloweds;


        /**
         * Sunucunun şuan kullandığı encoding biçimini tutar
         *
         * @var array
         */
        private $value;

        /**
         * @return array
         */
        public function getAlloweds()
        {
            return $this->alloweds;
        }

        /**
         * @param array $alloweds
         * @return FirewallChecker
         */
        public function setAlloweds($alloweds)
        {
            $this->alloweds = $alloweds;

            return $this;
        }

        /**
         * @return array
         */
        public function getValue()
        {
            return $this->value;
        }

        /**
         * @param array $value
         * @return FirewallChecker
         */
        public function setValue($value)
        {
            $this->value = $value;

            return $this;
        }


    }
