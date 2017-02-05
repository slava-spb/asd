<?php

namespace SlavaSpb\engine\Validation;


class TwigTemplateEngine implements ItemplateEngine
{
    protected $environment;
    protected $loader;

    public function __construct(array $config)
    {
        $this->loader = new \Twig_Loader_Filesystem(
            $config['templates_dir']
        );

        $this->environment = new \Twig_Environment(
            $this->loader, $config['environment_options']
        );
    }
    public function render(string $template, array = []) :string
    {
        return $this->environment->render($template, $data);
    }
}