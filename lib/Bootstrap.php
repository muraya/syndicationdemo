<?php

/**
 * Bootstrap class is invoked from the index.php file
 * and it automatically load required classes
 * also does the routing for the request.
 *
 * @category  Core
 * @package   Core
 * @author    Duncan Muraya <duncan.muraya@cellulant.com>
 * @copyright 2013 Cellulant Ltd
 * @license   Proprietary License
 * @link      http://www.cellulant.com
 * @version 3.0.0
 * @since 3.0.0
 */
class Bootstrap
{

    /**
     * Constructor.
     */
    public function __construct() {
        spl_autoload_register(array('Bootstrap', 'autoload'));
    }

    /**
     * Autoload classes in different directories specified.
     *
     * @param string $className the class name
     *
     * @return void
     */
    public function autoload($className) {
        // List of comma separated directories
        $directory = array(
            '',
            'lib/',
            'lib/conf/',
            'lib/logger/',
            'lib/benchmark/',
            'src/',
            'src/RequestHandlers/'
        );

        // List of comma separated file formats
        $fileFormat = array('%s.php', '%s.class.php', '%s.inc.php');

        foreach ($directory as $current_dir) {
            foreach ($fileFormat as $current_format) {
                $path = $current_dir . sprintf($current_format, $className);
                if (file_exists($path)) {
                    require_once $path;
                    return;
                }
            }
        }
    }
    

    /**
     * This function routes requests to a specific action in a controller using
     * yii format.
     *
     * @author Muraya Duncan duncan.muraya@cellulant.com
     *
     * @return bool
     */
    public function router() {
        $controller = null;
        $action = null;
        $coreUtils = new CoreUtils();

        if (isset($_GET['url'])) {
            $getURL = rtrim($_GET['url'], '/');
            $url = explode('/', $getURL);

            if (isset($url[0])) {
                $controller = ucfirst($url[0]);
            } else {
                
                trigger_error("No controller specified in the request", E_USER_ERROR);

                $coreUtils -> renderError();

            }

            if (isset($url[1])) {
                $action = $url[1];
            } else {
                $action='process';
            }
        } else {
            $message=  "No endpoint  specified /. Please refer to documentation";
            $coreUtils ->renderError($message);
            
            trigger_error($message, E_USER_ERROR);
            
        }

        $file = 'src' . DS . 'RequestHandlers' . DS . $controller . '.php';

        // Check if the file exists
        if (file_exists($file)) {
            require_once $file;

            // receive the array
            // pass it to a renderResponse in core utils function
            // which receives
            // logs the response
            //  RETURN A RESPONSE JSON

                try{

                    $instance = new $controller();
          
                    if(method_exists($instance, $action)){
                     $response = $instance->{$action}();
                    }  else {
                        $message=  "Invalid method ".$action.". Please refer to documentation";
                        trigger_error($message, E_USER_ERROR);
                        $coreUtils ->renderError($message);
                    }
                

                    $coreUtils -> renderResponse($response);

                }
                catch (FriendlyException $ex)
                {
                    $coreUtils -> renderError($ex ->getMessage());
                }

        } else {
            trigger_error('File or directory not found !', E_USER_ERROR);
        }
        return true;
    }
    
}
