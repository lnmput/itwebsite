<?php

/* html/path/php.html */
class __TwigTemplate_8fa2b5ad2b775405d674f4ef3502bf351eb5bb4adbb30baf153adaae64e0cbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("html/partial/head.html", "html/path/php.html", 1)->display($context);
        // line 2
        echo "
<h1>学习立即</h1>
";
        // line 4
        $this->loadTemplate("html/partial/footer.html", "html/path/php.html", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "html/path/php.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "html/path/php.html", "D:\\phpStudy\\WWW\\itwebsite\\html\\path\\php.html");
    }
}
