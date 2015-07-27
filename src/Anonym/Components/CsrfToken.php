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
     * Class CsrfToken
     * @package Anonym\Components\Security
     */
    class CsrfToken
    {

        const INPUT_KEY = '_token';

        /**
         * @var KeyGeneratorInterface
         */
        private $securityKeyGenerate;


        public function __construct()
        {

        }

        /**
         * Anahtar oluşturucuyu getirir.
         *
         * @return KeyGeneratorInterface
         */
        public function getSecurityKeyGenerate()
        {
            return $this->securityKeyGenerate;
        }

        /**
         * @param KeyGeneratorInterface $securityKeyGenerate
         * @return CsrfToken
         */
        public function setSecurityKeyGenerate($securityKeyGenerate)
        {
            $this->securityKeyGenerate = $securityKeyGenerate;

            return $this;
        }


    }
