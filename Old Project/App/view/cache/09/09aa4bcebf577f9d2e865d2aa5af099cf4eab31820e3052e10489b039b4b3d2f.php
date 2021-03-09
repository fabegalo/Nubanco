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

/* profile.html */
class __TwigTemplate_c655593656cc67d5a02fe45d75ff8c93cf470a5d874107855d3f6542c911e612 extends Template
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
        echo "<link rel=\"stylesheet\" href=\"/assets/css/Profile.css\">
<div id=\"conteudo\" class=\"container\">
    <center><h1>Edite seu Perfil</h1></center>
  \t<hr>
\t<div class=\"row\">
      <!-- left column -->
      <div class=\"col-md-3\">
        <div class=\"text-center\">
          <img id=\"image\" src=\"/assets/profiles/";
        // line 9
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["SESSION"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
        echo ".jpg\" class=\"avatar img-circle\" alt=\"avatar\">
          <h6>Envie uma foto diferente...</h6>
    <form enctype=\"multipart/form-data\" action=\"/Profile/updateProfile\" class=\"form-horizontal\" role=\"form\" method=\"POST\">
          <input type=\"file\" class=\"form-control\" name=\"profile\">
          <input class=\"hide\" name=\"id\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["SESSION"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["id"] ?? null) : null), "html", null, true);
        echo "\">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class=\"col-md-9 personal-info\">
        <div class=\"alert alert-info alert-dismissable\">
          <a class=\"panel-close close\" data-dismiss=\"alert\">×</a> 
          <i class=\"fa fa-coffee\"></i>
          Ebaa <strong>...</strong>. Bem vindo ";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["SESSION"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["nome"] ?? null) : null), "html", null, true);
        echo " ao seu perfil faça as alterações como voce desejar :D.
        </div>
        <h3>Informações Pessoais</h3>
        
        
          <div class=\"form-group\">
            <label class=\"col-lg-3 control-label\">Nome:</label>
            <div class=\"col-lg-8\">
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["SESSION"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["nome"] ?? null) : null), "html", null, true);
        echo "\" name=\"nome\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 control-label\">Sobrenome:</label>
            <div class=\"col-lg-8\">
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "sobrenome", [], "any", false, false, false, 36), "html", null, true);
        echo "\" name=\"sobrenome\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 control-label\">Empresa:</label>
            <div class=\"col-lg-8\">
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "empresa", [], "any", false, false, false, 42), "html", null, true);
        echo "\" name=\"empresa\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 control-label\">Email:</label>
            <div class=\"col-lg-8\">
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["SESSION"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["email"] ?? null) : null), "html", null, true);
        echo "\" name=\"email\">
            </div>
          </div>
       
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">Username:</label>
            <div class=\"col-md-8\">
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["SESSION"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["login"] ?? null) : null), "html", null, true);
        echo "\" name=\"login\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">Password:</label>
            <div class=\"col-md-8\">
              <input class=\"form-control\" type=\"password\" value=\"\" name=\"senha\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">Confirm password:</label>
            <div class=\"col-md-8\">
              <input class=\"form-control\" type=\"password\" value=\"\">
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\"></label>
            <div class=\"col-md-8\">
              <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\">
              <span></span>
              <input type=\"reset\" class=\"btn btn-danger\" value=\"Cancelar\">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>";
    }

    public function getTemplateName()
    {
        return "profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 55,  104 => 48,  95 => 42,  86 => 36,  77 => 30,  66 => 22,  54 => 13,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile.html", "/home/fabegalo/Repositorio/NuBanco/App/view/html/profile.html");
    }
}
