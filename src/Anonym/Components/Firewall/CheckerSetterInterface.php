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
     * Interface CheckerSetterInterface
     * @package Anonym\Components\Security
     */
    interface CheckerSetterInterface
    {
        /**
         * @param array $alloweds
         * @return mixed
         */
        public function setAlloweds($alloweds);

        /**
         * @param array $value
         * @return mixed
         */
        public function setValue($value);
    }
