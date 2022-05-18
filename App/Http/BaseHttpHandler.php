<?php

namespace App\Http;

use Core\DataBinderInterface;
use Core\TemplateInterface;

class BaseHttpHandler
{
    /**
     * @var TemplateInterface
     */
    private TemplateInterface $template;

    protected DataBinderInterface $dataBinder;

    public function __construct(TemplateInterface $template,
                                DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }

    public function render(string $templateName, $data = null, $error = null){
        $this->template->render($templateName,$data,$error);
    }

    public function redirect(string $url){
        header("Location: $url");
    }
}