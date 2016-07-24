<?php
    /**
     * Short desc
     *
     * <p>Long description first sentence starts here
     * and continues on this line for a while
     * finally concluding here at the end of
     * this paragraph</p>
     * call related php file
     */
    require_once 'config.php' ;
    require_once 'loading_list.php' ;

    require_once 'Router.php' ;
    /**
     * Description this class is the main class to call when execute
     */
    class Main{
        public $system_benchmark ;
        public $router ; 
        public $debug_message ; 
                
        /**
         * this function is to initial this class.
         */
        private function init_class(){
            // setting the debug message and benchmark timer
            $this->system_benchmark = new Simple_Timer();
            $this->debug_message = ''; 
            
            $this->router = new Router( );
            
            echo '<br /> current URI : '.$this->router->get_current_uri();
        }
        
        /**
         * class construction 
         */
        public function __construct() {
            $this->init_class();
            $this->index();
        }
        
        /**
         * A summary informing the user what the associated element does.
         *
         * first call of the class.
         *
         * @return void
         */
        public function index(){
            echo '<br />duration to stop point 1 : '. $this->system_benchmark->get_duration(); 
        }
    }
    $system = new Main();
    
 
    
    
    
/**
 * The short description
 *
 * As many lines of extendend description as you want {@link element}
 * links to an element
 * {@link http://www.example.com Example hyperlink inline link} links to
 * a website. The inline
 * source tag displays function source code in the description:
 * {@source } 
 * 
 * In addition, in version 1.2+ one can link to extended documentation like this
 * documentation using {@tutorial phpDocumentor/phpDocumentor.howto.pkg}
 * In a method/class var, {@inheritdoc may be used to copy documentation from}
 * the parent method
 * {@internal 
 * This paragraph explains very detailed information that will only
 * be of use to advanced developers, and can contain
 * {@link http://www.example.com Other inline links!} as well as text}}}
 *
 * Here are the tags:
 *
 * @abstract
 * @access       public or private
 * @author       author name <author@email>
 * @copyright    name date
 * @deprecated   description
 * @deprec       alias for deprecated
 * @example      /path/to/example
 * @exception    Javadoc-compatible, use as needed
 * @global       type $globalvarname 
   or
 * @global       type description of global variable usage in a function
 * @ignore
 * @internal     private information for advanced developers only
 * @param        type [$varname] description
 * @return       type description
 * @link         URL
 * @name         procpagealias
   or
 * @name         $globalvaralias
 * @magic        phpdoc.de compatibility
 * @package      package name
 * @see          name of another element that can be documented,
 *                produces a link to it in the documentation
 * @since        a version or a date
 * @static
 * @staticvar    type description of static variable usage in a function
 * @subpackage    sub package name, groupings inside of a project
 * @throws       Javadoc-compatible, use as needed
 * @todo         phpdoc.de compatibility
 * @var        type    a data type for a class variable
 * @version    version
 */    
?>