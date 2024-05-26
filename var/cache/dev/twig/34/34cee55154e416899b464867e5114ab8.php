<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menuadmin.html.twig */
class __TwigTemplate_c2e70c24ed14bc19deccff629206c165 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuadmin.html.twig"));

        // line 1
        yield "<   <!-- Bootstrap 5 CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<nav class='animated bounceInDown bg-dark' id=\"vertical\">
    <ul>
        <li><a href='#profile'>Profile</a></li>
        <li><a href='#message'>Messages</a></li>
        <li class='sub-menu'><a href='#settings'>Settings<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>Account</a></li>
                <li><a href='#settings'>Profile</a></li>
                <li><a href='#settings'>Secruity & Privacy</a></li>
                <li><a href='#settings'>Password</a></li>
                <li><a href='#settings'>Notification</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>FAQ's</a></li>
                <li><a href='#settings'>Submit a Ticket</a></li>
                <li><a href='#settings'>Network Status</a></li>
            </ul>
        </li>
        <li><a href='#message'>Logout</a></li>
    </ul>
</nav>

";
        // line 29
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        yield "<script>
    \$('.sub-menu ul').hide();
    \$(\".sub-menu a\").click(function () {
        \$(this).parent(\".sub-menu\").children(\"ul\").slideToggle(\"100\");
        \$(this).find(\".right\").toggleClass(\"fa-caret-up fa-caret-down\");
    });

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "menuadmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  95 => 30,  75 => 29,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<   <!-- Bootstrap 5 CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<nav class='animated bounceInDown bg-dark' id=\"vertical\">
    <ul>
        <li><a href='#profile'>Profile</a></li>
        <li><a href='#message'>Messages</a></li>
        <li class='sub-menu'><a href='#settings'>Settings<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>Account</a></li>
                <li><a href='#settings'>Profile</a></li>
                <li><a href='#settings'>Secruity & Privacy</a></li>
                <li><a href='#settings'>Password</a></li>
                <li><a href='#settings'>Notification</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>FAQ's</a></li>
                <li><a href='#settings'>Submit a Ticket</a></li>
                <li><a href='#settings'>Network Status</a></li>
            </ul>
        </li>
        <li><a href='#message'>Logout</a></li>
    </ul>
</nav>

{% block javascripts %}
<script>
    \$('.sub-menu ul').hide();
    \$(\".sub-menu a\").click(function () {
        \$(this).parent(\".sub-menu\").children(\"ul\").slideToggle(\"100\");
        \$(this).find(\".right\").toggleClass(\"fa-caret-up fa-caret-down\");
    });

</script>
{% endblock %}
", "menuadmin.html.twig", "C:\\xampp\\htdocs\\StoreOnlineProject-master\\templates\\menuadmin.html.twig");
    }
}
