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

/* navbar-base.html */
class __TwigTemplate_d95cd625b0beb47ce78906fc34970891426bbf97d55fdafcbd5731dc9f79cce5 extends Template
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
        echo "<link rel=\"stylesheet\" href=\"/assets/css/Welcome.css\">
<header>
    <nav id=\"Navebar\" class=\"shadow mb-5 navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
      <a class=\"navbar-brand\" href=\"#\">NuBanco</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/Welcome\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/Cadastro\">Cadastrar <span class=\"sr-only\">(current)</span></a>
          </li>
          ";
        // line 16
        if (0 === twig_compare(($context["logado"] ?? null), true)) {
            // line 17
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/Usuario\">Usuários</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/Conta\">Conta</a>
          </li>
          ";
        }
        // line 24
        echo "          <!-- <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li> -->
        </ul>
        ";
        // line 28
        if (0 !== twig_compare(($context["cadastro"] ?? null), true)) {
            // line 29
            echo "        ";
            if (0 !== twig_compare(($context["logado"] ?? null), true)) {
                // line 30
                echo "        <form class=\"form-inline mt-2 mt-md-0\" action=\"/Login/logar\" method=\"POST\">
          <input class=\"form-control mr-sm-2\" type=\"text\" name=\"usuario\" placeholder=\"Usuário\" aria-label=\"Usuário\">
          <input class=\"form-control mr-sm-2\" type=\"password\" name=\"senha\" placeholder=\"Password\" aria-label=\"Password\">
          <button id=\"Profile\" class=\"btn my-2 my-sm-0\" type=\"submit\">Logar</button>
        </form>
        ";
            } else {
                // line 36
                echo "          <span class=\"navbar-brand\">Bem vindo, ";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["nome"] ?? null) : null), "html", null, true);
                echo "</span>
          <a id=\"Profile\" class=\"btn  my-2 my-sm-0\" href=\"/Profile\">Perfil</a>
          <a id=\"Profile\" class=\"btn my-2 my-sm-0\" href=\"/Login/logof\">Sair</a>
        </form>
        ";
            }
            // line 41
            echo "        ";
        }
        // line 42
        echo "      </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "navbar-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  93 => 41,  84 => 36,  76 => 30,  73 => 29,  71 => 28,  65 => 24,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar-base.html", "/home/fabegalo/Repositorio/NuBanco/Core/template/navbar-base.html");
    }
}
