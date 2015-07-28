<?php
    /**
     * Bu Dosya AnonymFramework'e ait bir dosyadır.
     *
     * @author vahitserifsaglam <vahit.serif119@gmail.com>
     * @see http://gemframework.com
     *
     */

    namespace Anonym\Components\Security\Authentication;

    use Anonym\Components\Database\Base;

    /**
     * Class Register
     * @package Anonym\Components\Security\Authentication
     */
    class Register extends Authentication implements RegisterInterface
    {

        public function __construct(Base $db, array $tables = [])
        {
            parent::__construct();
            $this->setTables($tables);
            $this->setDb($db);
        }

        /**
         * Kullanıcı kayıt işlemini yapar
         *
         * @param array $post
         * @return mixed
         */
        public function register(array $post = [])
        {
            $tables = $this->getTables();
            $registerParams = $tables['register'];
            $tableName = $tables['table'];

            if (count($registerParams) === count($post)) {
                $inputValues = array_values($post);
                if (count(array_diff($inputValues, $registerParams)) > 0) {
                    throw new InvalidArgumentException('Register parametreleriniz %s dosyasındakilerle aynı olmalıdır.',self::USER_FILE);
                } else {
                    $db = $this->getDb();
                    $insert = $db->insert($tableName, function ($mode) use ($input) {
                        $mode->set($input)
                            ->run();
                    });

                    return ($insert) ? true : false;
                }
            } else {
                throw new InvalidArgumentException('Register parametreleriniz user.yaml dosyasındakilerle aynı olmalıdır.');
            }

        }

    }
