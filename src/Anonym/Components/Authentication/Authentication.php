<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security\Authentication;

    use Anonym\Components\Cookie\Cookie;
    use Anonym\Components\Cookie\CookieInterface;
    use Anonym\Components\Session\Session;
    use Anonym\Components\Session\SessionInterface;

    /**
     * Class Authentication
     * @package Anonym\Components\Security
     */
    class Authentication
    {

        /**
         * Session objesini tutar
         *
         * @var SessionInterface
         */
        private $session;

        /**
         * Cookie objesini tutar
         *
         * @var CookieInterface
         */
        private $cookie;

        private $matcher;

        const USER_SESSION = 'AnonymFrameworkUser';

        /**
         * Sınıfı başlatır ve session ve cookie objelerini atar
         */
        public function __construct(){
            $this->setSession( new Session());
            $this->setCookie( new Cookie());
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
         * @return Authentication
         */
        public function setSession(SessionInterface $session)
        {
            $this->session = $session;

            return $this;
        }

        /**
         * @return CookieInterface
         */
        public function getCookie()
        {
            return $this->cookie;
        }

        /**
         * @param CookieInterface $cookie
         * @return Authentication
         */
        public function setCookie(CookieInterface $cookie)
        {
            $this->cookie = $cookie;

            return $this;
        }
    }
