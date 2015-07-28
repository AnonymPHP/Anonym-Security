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
     * Class Security
     * @package Anonym\Components\Security
     */
    class Security
    {

        /**
         * xss sorgularından temizler
         *
         * @param string $data
         * @return mixed|string
         * @throws \Exception
         */
        public static function xssProtection($data = '')
        {

            $data = str_replace(['"', "'", "<", ">", "&lt;","3C","3E","22","27"], '', $data);
            if (!is_string($data)) {

                throw new \Exception(sprintf('%s veri tipi %s fonksiyonunda kullanılamaz', gettype($data),
                    __FUNCTION__));
            }

            $data = strip_tags(
                htmlspecialchars(
                    htmlentities(
                        filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS))
                )
            );

            return $data;
        }

        /**
         * Epostanın geçerli olup olmadığına bakar
         *
         * @param string $mail
         * @return mixed
         */
        public static function validateEmail($mail = '')
        {

            return filter_var($mail, FILTER_VALIDATE_EMAIL);
        }

        /**
         * Url i kontrol eder
         *
         * @param string $url
         * @return mixed
         */
        public static function validateUrl($url = '')
        {

            return filter_var($url, FILTER_VALIDATE_URL);
        }
    }