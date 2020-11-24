<?php
// Controller class template made by UzhKeksy
    namespace UK;
    use UK\UK_View;
    
    /**
     * UK_Controller
     */
    class UK_Controller
    {
        private $views_file;
        private $models_file;
        private $database_file;
        /**
        *  __Construct method
        */
        public function __construct()
        {
            require_once '../application/configs/path.config.php';
            $files = new UK_FileWorker(CORE);
            $this->views_file = (new UK_FileWorker(VIEWS))->files;
            $this->models_file = (new UK_FileWorker(MODELS))->files;
            $this->database_file = (new UK_FileWorker(DATA_BASE))->files;
        }        
        /**
         * Method load
         *  this function load file by 2 attr. 
         * @param $toLoad $toLoad [file name to load]
         * @param array $variables [arr of variables that will be used in loaded view]
         *
         * @return void
         */
        public function load($toLoad, array $variables,$once = null){
            if(isset($variables)){
                foreach($variables as $name => $data){
                    ${$name} = $data;
                }
            }
            if($once){
                require_once $toLoad;
            }else{
                require $toLoad;
            }
        }

        public function putDBResultToUK_ModelObject($database_file,UK_Model $object, bool $is_array = false){
            if($is_array){
                
            }
            $methods = $object->template();
            foreach($methods as $method){
                
            }
        }

        /**
        * Get $views_file
        */
        public function getviews_file()
        {
            return $this->views_file;
        }

        /**
        * Get $models
        */
        public function getModels()
        {
            return $this->models_file;
        }

        /**
        * Get $database_file
        */
        public function getdatabase_file()
        {
            return $this->database_file;
        }
    }
