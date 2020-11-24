<?php
// View template made by UzhKeksy
    namespace UK;
    
    abstract class UK_View
    {
        private $path;
        private $name;
        private array $variables;
        
        /**
        *  __Construct method
        * @param $path
        * @param $name
        * @param array $variables
        */
        public function __construct($path, $name, array $variables)
        {
            $this->path = $path;
            $this->name = $name;
            $this->variables = $variables;
        }
        /**
        * Get $path
        */
        public function getPath()
        {
            return $this->path;
        }

        /**
        * Get $name
        */
        public function getName()
        {
            return $this->name;
        }

        /**
        * Get $variables
        * @return array
        */
        public function getVariables(): array
        {
            return $this->variables;
        }

        /**
        * Set $path
        */
        public function setPath( $path)
        {
            $this->path = $path;
        }

        /**
        * Set $name
        */
        public function setName( $name)
        {
            $this->name = $name;
        }

        /**
        * Set $variables
        * @param array $variables
        */
        public function setVariables(array $variables)
        {
            $this->variables = $variables;
        }
    }
