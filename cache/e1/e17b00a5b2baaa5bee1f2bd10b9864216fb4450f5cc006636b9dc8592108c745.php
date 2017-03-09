<?php

/* html/index.html */
class __TwigTemplate_eea2b1fd91dea8ec2794f8d08a0e288dd80722f0d17cedf35ce3c35c698761a5 extends Twig_Template
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
        $this->loadTemplate("html/partial/head.html", "html/index.html", 1)->display($context);
        // line 2
        echo "




<div class=\"container projects\">

\t<div class=\"projects-header page-header\">
\t\t<h3>学习路径</h3>
\t\t<p>从入门到精通,希望你学得越来越好</p>
\t</div>

\t<div class=\"row\">

\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 \">
\t\t\t<div class=\"thumbnail\" style=\"height: 150px;\">
\t\t\t\t<a href=\"/index.php?path=php\" title=\"PHP学习路径\" >
\t\t\t\t\t<img class=\"lazy\" src=\"./images/path/php.png\" width=\"300\" height=\"150\" alt=\"demo\">
\t\t\t\t</a>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h3>¥99.9</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>








\t</div>

\t<div class=\"projects-header page-header\">
\t\t<h3>优质教程推荐</h3>
\t\t<p>投资</p>
\t</div>
\t<div class=\"row\">

\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 \">
\t\t\t<div class=\"thumbnail\" style=\"height: 296px;\">
\t\t\t\t<a href=\"http://codeguide.bootcss.com\" title=\"Bootstrap 编码规范\" target=\"_blank\">
\t\t\t\t\t<img class=\"lazy\" src=\"./images/logo/laravel.png\" width=\"300\" height=\"150\" alt=\"demo\">
\t\t\t\t</a>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h3>
\t\t\t\t\t\t<a href=\"http://codeguide.bootcss.com\" title=\"Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。\" target=\"_blank\">
\t\t\t\t\t\t\tLaravel视频教程
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<small>¥12.9</small>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tBootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>








\t</div>



</div>

";
        // line 75
        $this->loadTemplate("html/partial/footer.html", "html/index.html", 75)->display($context);
    }

    public function getTemplateName()
    {
        return "html/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 75,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "html/index.html", "D:\\phpStudy\\WWW\\itwebsite\\html\\index.html");
    }
}
