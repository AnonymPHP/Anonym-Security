<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Security;
use GUMP;
/**
 * Class Validation
 * @package Anonym\Components\Security
 */
class Validation extends GUMP
{

    /**
     * validate datas with validation rules and filter rules
     *
     * @param array $data
     * @param array $validationRules
     * @param array $filterRules
     * @return bool|array
     */
    public function validate(array $data = [],array $validationRules = [],array $filterRules = [])
    {
        $data = $this->sanitize($data);
        $this->validation_rules($validationRules);
        $this->filter_rules($filterRules);

        return $this->run($data);
    }
}
