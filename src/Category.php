<?php
    class Category
    {
        private $name;

        function __construct($name)
        {
            $this->name = $name;
        }
        function getName()
        {
            return $this->name;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec('DELETE from categories');
        }
    }

?>
