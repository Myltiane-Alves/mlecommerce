<?php

    namespace Hcode;

    use Rain\Tpl;

    class Page {
        
        private $tpl;
        public function __constructor(){
            

            $config = array(
                "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views",
                "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
                "debug"         => false
            );

            Tpl::configure( $config );

            $this->tpl = new Tpl;
        }

        public function __destruct() {

        }
    }
?>