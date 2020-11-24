<?php

    namespace UK;
    require_once '../application/configs/path.config.php';

    class UK_Images
    {
        public array $images;
        public function __construct(){

        }

        /**
        * Get $images
        * @return array
        */
        public function getImages(): array
        {
            return $this->images;
        }

    }
