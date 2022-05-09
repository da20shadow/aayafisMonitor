<?php

namespace App\Http;

use Core\TemplateInterface;

class BaseHttpHandler
{
    /**
     * @var TemplateInterface
     */
    private TemplateInterface $template;

    /**
     * @param TemplateInterface $template
     */
    public function __construct(TemplateInterface $template)
    {
        $this->template = $template;
    }

    public function render(string $templateName, $data = null){
        $this->template->render($templateName,$data);
    }

    public function redirect(string $url){
        header("Location: $url");
    }
}