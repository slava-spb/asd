<?php

namespace SlavaSpb\engine\Validation;
;
interface ITemplateEngine
{
    public function render(string $template, array $data = []): string;
}