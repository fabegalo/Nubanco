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

/* cadastro.html */
class __TwigTemplate_6fdfee9699446c6589311e1bd84348bca35952632aaf07ab6549ba163652a37d extends Template
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
        echo "<link rel=\"stylesheet\" href=\"/assets/css/Cadastro.css\">

<div id=\"logreg-forms\">
        <form action=\"/Usuario/recebePost?op=inclui\" class=\"form-signin\" method=\"POST\">
            <p style=\"text-align:center\">Cadastro Usuario NuBanco</p>

            <input name=\"nome\" type=\"text\" id=\"user-name\" class=\"form-control\" placeholder=\"Nome\" required=\"\" autofocus=\"\">
            <input name=\"sobrenome\" type=\"text\" id=\"user-name\" class=\"form-control\" placeholder=\"SobreNome\" required=\"\" autofocus=\"\">
            <input name=\"email\" type=\"email\" id=\"user-email\" class=\"form-control\" placeholder=\"Email\" required autofocus=\"\">
            <input name=\"cpf\" type=\"text\" id=\"user-cpf\" class=\"form-control\" placeholder=\"CPF\" required autofocus=\"\">
            <input name=\"login\" type=\"text\" id=\"user-login\" class=\"form-control\" placeholder=\"Login\" required autofocus=\"\">
            <input name=\"senha\" type=\"password\" id=\"user-pass\" class=\"form-control\" placeholder=\"Password\" required autofocus=\"\">
            <input name=\"senha2\" type=\"password\" id=\"user-repeatpass\" class=\"form-control\" placeholder=\"Repeat Password\" required autofocus=\"\">

            <button class=\"btn btn-primary btn-block\" type=\"submit\"><i class=\"fas fa-user-plus\"></i> Cadastre-Se</button>
            <a href=\"/\" id=\"cancel_signup\"><i class=\"fas fa-angle-left\"></i> Back</a>
        </form>
        <br>
</div>




<!-- porcentual = (100 - 30)


porcentual que quero tirar = (100 - porcentual)


valortotal * 0.porcentual


retornar o valor de percentual tirado o valor restante -->";
    }

    public function getTemplateName()
    {
        return "cadastro.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cadastro.html", "/home/fabegalo/Repositorio/NuBanco/App/view/html/cadastro.html");
    }
}
