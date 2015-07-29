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
    class UserAgentFirewall implements FirewallCheckerInterface
    {

        /**
         * İzin verilen değerleri tutar
         *
         * @var mixed
         */
        private $alloweds;

        /**
         * useragent değerini tutar
         *
         * @var string
         */
        private $userAgent;

        public function __construct($alloweds, $useragent){
            $this->alloweds = $alloweds;
            $this->userAgent = $useragent;
        }

        /**
         * Karşılaştırma yapar
         *
         * @return bool
         */
        public function handle()
        {

        }
    }
