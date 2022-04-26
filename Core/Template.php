<?php

namespace Core;

class Template implements TemplateInterface
{
    const TEMPLATE_FOLDER = "App/Templates/";
    const EXTENSION = ".php";

    public function render(string $templateName, $data = null): void
    {
        require_once (self::TEMPLATE_FOLDER . $templateName . self::EXTENSION);
    }
}