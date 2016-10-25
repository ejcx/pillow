<?php
/**
 * Created by PhpStorm.
 * User: bthomas
 * Date: 5/20/15
 * Time: 4:50 PM
 */

namespace Framework\Route;


class Route
{
    protected $uri;
    protected $method;
    protected $controller;
    protected $action;
    protected $viewClass;
    protected $templateFile;
    protected $vars;
    protected $security;

    /**
     * Route constructor.
     *
     * @param string $uri
     * @param string $method
     * @param string $controller
     * @param string $action
     * @param string $viewClass
     * @param string $templateFile
     * @param null $vars
     */
    public function __construct($uri = null, $method = null, $controller = null, $action = null, $viewClass = null, $templateFile = null, $vars = null, $security = null)
    {
        $this->uri = $uri ?: null;
        $this->method = $method ?: null;
        $this->controller = $controller ?: null;
        $this->action = $action ?: null;
        $this->viewClass = $viewClass ?: null;
        $this->templateFile = $templateFile ?: null;
        $this->vars = $vars ?: null;
        $this->security = $security ?: null;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return null
     */
    public function getViewClass()
    {
        return $this->viewClass;
    }

    /**
     * @param null $viewClass
     */
    public function setViewClass($viewClass)
    {
        $this->viewClass = $viewClass;
    }

    /**
     * @return null
     */
    public function getTemplateFile()
    {
        return $this->templateFile;
    }

    /**
     * @param null $templateFile
     */
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
    }

    /**
     * @return null
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param null $vars
     */
    public function setVars($vars)
    {
        $this->vars = $vars;
    }

    /**
     * @return null
     */
    public function getSecurity()
    {
        return $this->security;
    }


    /**
     * @param null $viewClass
     */
    public function setSecurity(array $security)
    {
        $this->security = $security;
    }

    public function toArray(){
        return [
            "uri"               => $this->getUri(),
            "method"            => $this->getMethod(),
            "controller"        => $this->getController(),
            "action"            => $this->getAction(),
            "viewClass"         => $this->getViewClass(),
            "templateFile"      => $this->getTemplateFile(),
            "vars"              => $this->getVars(),
            "security"          => $this->getSecurity(),
        ];
    }
}
