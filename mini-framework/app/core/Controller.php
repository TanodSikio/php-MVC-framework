<?php
    class Controller {
        protected string $layout = 'main';

        public function view($view, $data = []) {
            extract($data);

            ob_start();
            require_once __DIR__.'/../views/layouts/'.$view.'.php';
            $content = ob_get_clean();

            require_once __DIR__.'/../views/layouts/'.$this->layout.'.php';
        }

        public function renderPartial($view, $data = []) {
            extract($data);
            require_once __DIR__.'/../views/layouts/'.$view.'.php';
        }
    }
?>