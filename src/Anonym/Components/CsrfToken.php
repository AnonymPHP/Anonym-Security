<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security;
    use Anonym\Components\Session\Session;
    use Anonym\Components\Session\SessionInterface;
    use Anonym\Components\HttpClient\Input;
    use Anonym\Components\Security\Exception\CsrfTokenMatchException;
    use Anonym\Components\Security\CsrfTokenInterface;
    /**
     * Class CsrfToken
     * @package Anonym\Components\Security
     */
    class CsrfToken implements CsrfTokenInterface
    {
        /**
         * Form gönderisinde aranacak değer
         *
         * @var string
         */
        private $formFieldName = '_token';

        /**
         * @var KeyGeneratorInterface
         */
        private $securityKeyGenerate;

        /**
         * Session objesini saklar
         *
         * @var SessionInterface
         */
        private $session;


        /**
         * sınıfı başlatır
         */
        public function __construct()
        {
            $this->useDefaultValues();
            $this->getSession()->set('tokenName', $this->getFormFieldName());
        }

        /**
         * Yürütme işlemini yapar
         *
         * @return bool
         * @throws CsrfTokenMatchException
         */
        public function run()
        {
            if ($this->getSession()->has('tokenName')) {
                $this->check();
            } else {
                return false;
            }
        }

        /**
         * Son kontrolleri yapar
         */
        private function check(){
            if (Input::has($this->getFormFieldName())) {
                $key = Input::get($this->getFormFieldName());
                if ($key === $this->getSession()->get($this->getFormFieldName())) {
                    return true;
                } else {
                    throw new CsrfTokenMatchException(sprintf('Girdiğiniz %s token olması gereken tokenle eşleşmiyor',
                        $key));
                }
            } else {
                throw new CsrfTokenMatchException(sprintf('Herhangi bir Token Girişi yapmamışsınız'));
            }

        }
        /**
         *  default olarak değerleri atar
         */
        private function useDefaultValues(){
            $this->setSecurityKeyGenerate( new SecurityKeyGenerator());
            $this->setSession( new Session());
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
        public function setSecurityKeyGenerate(KeyGeneratorInterface $securityKeyGenerate)
        {
            $this->securityKeyGenerate = $securityKeyGenerate;

            return $this;
        }

        /**
         * @return string
         */
        public function getFormFieldName()
        {
            return $this->formFieldName;
        }

        /**
         * @param string $formFieldName
         * @return CsrfToken
         */
        public function setFormFieldName($formFieldName)
        {
            $this->formFieldName = $formFieldName;

            return $this;
        }

        /**
         * @return SessionInterface
         */
        public function getSession()
        {
            return $this->session;
        }

        /**
         * @param SessionInterface $session
         * @return CsrfToken
         */
        public function setSession(SessionInterface $session)
        {
            $this->session = $session;

            return $this;
        }

    }
