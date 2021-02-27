<?php
session_start();
$_SESSION["CART"] = null;
function autoload_class_multiple_directory($class_name) 
{
    # List all the class directories in the array.
    $array_paths = array(
        'Business\Abstract\\',
        'Entities\Abstract\\',
        'Entities\Concrete\\',
        'Business\Concrete\\',
        'DataAccess\Concrete\\',
        'DataAccess\Abstract\\'
    );

    foreach($array_paths as $path)
    {
        $file = sprintf(__DIR__.'\%s%s.php', $path, $class_name);
        if(is_file($file)) 
        {
            require_once($file);
        } 

    }
}

spl_autoload_register('autoload_class_multiple_directory');