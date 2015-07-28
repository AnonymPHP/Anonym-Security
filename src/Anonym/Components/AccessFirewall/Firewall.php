<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security;

    use Anonym\Components\HttpClient\ServerHttpHeaders;

    /**
     * Class Firewall
     * @package Anonym\Components\Security
     */
    class Firewall extends ServerHttpHeaders
    {

        /**
         * Parametreler ve server değişkenindeki değerleri tutulur
         *
         * @var array
         */
        private $parameters = [
            'allowedUserAgent'  => 'User-Agent',
            'allowedEncoding'   => 'Accept-Encoding',
            'allowedLanguage'   => 'Accept-Language',
            'allowedAccept'     => 'Accept',
            'allowedConnection' => 'Connection',
            'allowedReferer'    => 'Referer',
            'allowedMethod'     => 'Method'
        ];

        /**
         * Parametreleri ve onları kontrol edecek sınıfların adı tutulur
         *
         * @var array
         */
        private $classes = [
            'allowedUserAgent'  => 'UserAgentFirewall',
            'allowedEncoding'   => 'EncodingFirewall',
            'allowedLanguage'   => 'LanguageFirewall',
            'allowedAccept'     => 'AcceptFirewall',
            'allowedConnection' => 'ConnectionFirewall',
            'allowedReferer'    => 'RefererFirewall',
            'allowedMethod'     => 'MethodFirewall'
        ];


        /**
         * Kullanıcı tarafından kullanılmasına izin verilen parametreler
         *
         * @var array
         */
        private $allowed;

        public function __construct(array $allowed = [])
        {
            parent::__construct();
            $this->setAllowed($allowed);
        }

        /**
         * @return array
         */
        public function getAllowed()
        {
            return $this->allowed;
        }

        /**
         * @param array $allowed
         */
        public function setAllowed(array $allowed)
        {
            $this->allowed = $allowed;
        }

        /**
         * @return array
         */
        public function getParameters()
        {
            return $this->parameters;
        }

        /**
         * @param array $parameters
         * @return Firewall
         */
        public function setParameters(array $parameters)
        {
            $this->parameters = $parameters;

            return $this;
        }

        /**
         * @return array
         */
        public function getClasses()
        {
            return $this->classes;
        }

        /**
         * @param array $classes
         * @return Firewall
         */
        public function setClasses(array $classes)
        {
            $this->classes = $classes;

            return $this;
        }



    }