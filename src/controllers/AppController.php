<?php

class AppController {

    protected function render(string $template = null) {
        $templatePath = 'public/views/'.$template.'.php';

        if (file_exists($templatePath)) {
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
            print $output;
        } else if ($template !== '404') {
            $this->render('404');
        } else {
            echo 'Page not found!';
        }
    }
}
