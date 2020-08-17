<?PHP
    function getIfSet(&$value, $def = null)
    {
        return isset($value) ? $value : $def;
    }

    
?>