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

/* layout-base.html */
class __TwigTemplate_4eab1b3444a3ee9bf14541d46b1ed7b79565da7e70d6a7bf8ee18e9ab8879351 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <meta property=\"og:title\" content=\"Nubanco is amazing :D\" />
    <meta property=\"og:url\" content=\"https://nubanco.herokuapp.com/Welcome\" />
    <meta property=\"og:description\" content=\"Nubanco Powered By fabegalo\">
    <meta property=\"og:image\" content=\"https://nubanco.herokuapp.com/assets/icon/nu-icon.png\">
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:locale\" content=\"pt_BR\" />

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"Nubanco is amazing :D\">
    <meta name=\"author\" content=\"Maycon de Moraes\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-grid.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-reboot.min.css\">
    <link href=\"/assets/css/sticky-footer-navbar.css\" rel=\"stylesheet\">
    <!---------------------------ICON WEBSITE NUBANCO------------------------------->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"assets/icon/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"assets/icon/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"assets/icon/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/icon/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"assets/icon/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"assets/icon/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"assets/icon/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"assets/icon/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"assets/icon/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"assets/icon/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"assets/icon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"assets/icon/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"assets/icon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"assets/icon/manifest.json\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"assets/icon/ms-icon-144x144.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    
    <title>NuBanco</title>
</head>
<body>
    <!-- toda a applicação fica dentro desta div -->
    ";
        // line 43
        $this->loadTemplate("navbar-base.html", "layout-base.html", 43)->display($context);
        // line 44
        echo "    
    <main role=\"main\" class=\"container\">
        ";
        // line 46
        echo ($context["main"] ?? null);
        echo "
    </main>
    
    ";
        // line 49
        $this->loadTemplate("footer-base.html", "layout-base.html", 49)->display($context);
        // line 50
        echo "    

    <script src=\"/assets/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  93 => 49,  87 => 46,  83 => 44,  81 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-base.html", "/home/fabegalo/Development/Repositorios/Nubanco/Core/template/layout-base.html");
    }
}
