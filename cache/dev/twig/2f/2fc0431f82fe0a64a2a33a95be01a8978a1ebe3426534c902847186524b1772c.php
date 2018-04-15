<?php

/* index.html.twig */
class __TwigTemplate_9981b815b962bdac77b28c217634b9001d2320fab6255850e21bd0a0b698ca74 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/chosen.min.css\">
    <script src=\"/assets/js/jquery-1.11.3.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/bootstrap.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/chosen.jquery.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/main.js\" type=\"text/javascript\" charset=\"utf-8\" async defer></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"container bs-docs-container\" >
    <div class=\"row\">
        <div class=\"col-md-9\">
            <h1>Formuario de cadastro</h1>
            <form action=\"index_submit\" method=\"get\" accept-charset=\"utf-8\">
                <div class=\"form-group\">
                    <label for=\"nome\"></label>
                    <input type=\"text\" id=\"nome\" name=\"nome\" value=\"\" placeholder=\"Nome\">
                </div>
                <div class=\"form-group\">
                    <label for=\"uf\">Estado</label><br>
                    <select name=\"uf\" id=\"uf\">
                        <option value=\"\"></option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  70 => 10,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/chosen.min.css\">
    <script src=\"/assets/js/jquery-1.11.3.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/bootstrap.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/chosen.jquery.min.js\" type=\"text/javascript\" charset=\"utf-8\"  ></script>
    <script src=\"/assets/js/main.js\" type=\"text/javascript\" charset=\"utf-8\" async defer></script>
{% endblock %}
{% block body %}
<div class=\"container bs-docs-container\" >
    <div class=\"row\">
        <div class=\"col-md-9\">
            <h1>Formuario de cadastro</h1>
            <form action=\"index_submit\" method=\"get\" accept-charset=\"utf-8\">
                <div class=\"form-group\">
                    <label for=\"nome\"></label>
                    <input type=\"text\" id=\"nome\" name=\"nome\" value=\"\" placeholder=\"Nome\">
                </div>
                <div class=\"form-group\">
                    <label for=\"uf\">Estado</label><br>
                    <select name=\"uf\" id=\"uf\">
                        <option value=\"\"></option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

{% endblock %}", "index.html.twig", "/var/www/awesome/website-skeleton/templates/index.html.twig");
    }
}
