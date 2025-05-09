<?php
/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \Foo\Bar\Baz\Qux class
 * from /path/to/project/src/Baz/Qux.php:
 *
 *      new \Foo\Bar\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
spl_autoload_register(function ($clas) {

    // project-specific namespace prefix
    // $prefix = 'Foo\\Bar\\';


    // base directory for the namespace prefix
    $base_dir = dirname(__FILE__, 2) . '/';




    // get the relative class name
    // $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $clas) . '.php';


    // if the file exists, require it
    if (file_exists($file)) {
        return require $file;
    }

    die("A classe {$clas} não existe");
});