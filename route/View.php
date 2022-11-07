<?php 
declare(strict_types=1);

namespace Route;

class View 
{
    public function __construct
    (
        private string $templatePath
    )
    {
        $this->templatePath = $templatePath;
    }

    /**
     * RenderView function which allow us to pass view to controller
     *
     * @param string $templateName
     * @param array $vars
     * @param integer $httpResponseCode
     * @return void
     */
    public function renderView(string $templateName, array $vars = [], int $httpResponseCode = 200): void
    {
        extract($vars);

        include $this->templatePath . '/' . $templateName;

        http_response_code($httpResponseCode);
    }
}