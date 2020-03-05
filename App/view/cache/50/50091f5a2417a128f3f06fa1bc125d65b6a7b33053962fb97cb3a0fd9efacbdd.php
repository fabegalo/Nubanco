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
class __TwigTemplate_745809538571a567d9cf5a0dbc8b32d74895fb5f9364d5260adb9019a12a0328 extends Template
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

<img class=\"shadow mb-5\" id=\"jump\" src=\"https://nubank.com.br/images/woman-jumping/woman-jumping@1x.jpg\" alt=\"Mulher jovem de macacão jeans pulando uma calçada expressando liberdade.\">

<img id=\"celular\" src=\"https://nubank.com.br/images/home_products/home_products@1x.png\" alt=\"Celular com o aplicativo do Nubank aberto na seção da conta e o cartão roxo do Nubank\">
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
        return new Source("", "welcome.html", "/home/fabegalo/Repositorio/NuBanco/App/view/html/welcome.html");
    }
}
