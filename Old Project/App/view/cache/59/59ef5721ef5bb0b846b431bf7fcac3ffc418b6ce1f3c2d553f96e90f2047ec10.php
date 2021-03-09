<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* welcome.html */
class __TwigTemplate_46e6311ea3ce57421b7a1962e6c93a1540c4eb9cfd85f46d0f8aa66c31dae2a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["ALERT"] ?? null);
        echo "
<link rel=\"stylesheet\" href=\"/assets/css/Welcome.css\">
<div id=\"div\">
<h1 class=\"shadow mt-5\">NuBanco</h1>

<p>Core Desenvolvido por <a href=\"https://github.com/mayconmoraes-dm\"><ab>Maycon de Moraes</ab></a></p>

<p>Aplicação NuBanco Desenvolvido por <a href=\"https://github.com/fabegalo\"><ab>Fabricio Galo</ab></p></a>
<hr>
<h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["logado"] ?? null), "html", null, true);
        echo "</h1>
</div>

<img class=\"img-fluid shadow mb-5\" id=\"jump\" src=\"https://nubank.com.br/images/woman-jumping/woman-jumping@1x.jpg\" alt=\"Mulher jovem de macacão jeans pulando uma calçada expressando liberdade.\">
";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.html", "/home/fabegalo/Development/Repositorios/Nubanco/App/view/html/welcome.html");
    }
}
