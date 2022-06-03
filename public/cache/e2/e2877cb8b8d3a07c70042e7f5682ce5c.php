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

/* base.html */
class __TwigTemplate_4135d0e50b6d70cbc24baea66c1aad18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'staticlinks' => [$this, 'block_staticlinks'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"robots\" content=\"index, follow\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
    <title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null));
        echo "</title>
    <link rel=\"icon\" type=image/ico href=\"/static/logo.png\"/>
\t
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style-bs.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css\" integrity=\"sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg==\" crossorigin=\"anonymous\" />
\t
\t<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

\t
\t<!-- Bug with v9.0 stripping data-dir attributes from buttons -->
    <script src=\"https://code.highcharts.com/stock/9.1/highstock.js\"></script>
\t<script src=\"https://code.highcharts.com/9.1/modules/boost.js\"></script>
    ";
        // line 25
        echo ($context["pageJS"] ?? null);
        echo "

    ";
        // line 27
        $this->displayBlock('staticlinks', $context, $blocks);
        // line 28
        echo "\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-946EV24B0X\"></script>
\t<script>
\t  window.dataLayer = window.dataLayer || [];
\t  function gtag(){dataLayer.push(arguments);}
\t  gtag('js', new Date());

\t  gtag('config', 'G-946EV24B0X');
\t</script>
\t<style id=\"style\"></style>
</head>

<body>
\t<header>
\t\t<div class=\"container-fluid\" style=\"height:.25rem;background-color:black;\"></div>

\t\t<nav class=\"navbar navbar-expand-md navbar-dark sticky-top py-0 shadow-sm\" style=\"background-color:var(--bs-econdblue)\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsingNavbarLg\"><span class=\"navbar-toggler-icon\"></span></button>

\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">\t\t\t\t\t\t
\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\"><i class=\"bi bi-bar-chart me-1\"></i>GDP Forecasts</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t-->
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#portfolio\">
\t\t\t\t\t\t\t\t<!--<i class=\"bi bi-bar-chart-steps me-1\"></i>-->My Portfolio
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#contact\">
\t\t\t\t\t\t\t\t<!--<i class=\"bi bi-bar-chart-steps me-1\"></i>-->Contact Me
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"sun-container\" class=\"d-block\" style=\"\"></div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t
\t<main >
\t\t";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "\t</main>

\t<footer class=\"container-fluid text-white px-0 bg-dark\">
\t  <!-- Grid container -->
\t  <div class=\"container py-3\">
\t\t<!--Grid row-->
\t\t<div class=\"row\">
\t\t  <!--Grid column-->
\t\t  <div class=\"col-6 mb-2 mb-md-0\">
\t\t  </div>
\t\t  <!--Grid column-->

\t\t  <!--Grid column-->
\t\t  <div class=\"col-6 mb-2 mb-md-0 text-end\">
\t\t\t<h5 class=\"text-uppercase mb-0\">CONTACT</h5>

\t\t\t<ul class=\"list-unstyled\">
\t\t\t  <li>
\t\t\t\t<a href=\"mailto:charles@cmefi.com\" class=\"text-white\">Email: charles (at) cmefi (dotcom)</a>
\t\t\t  </li>
\t\t\t</ul>
\t\t  </div>
\t\t  <!--Grid column-->
\t\t</div>
\t\t<!--Grid row-->
\t  </div>
\t  <!-- Grid container -->

\t  <!-- Copyright -->
\t<div class=\"container-fluid\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
\t\t<div class=\"container text-end p-2\">
\t\t\t<span>2022 <img class=\"mx-1\" width=\"16\" height=\"16\" src=\"/static/cmefi_short.png\"> Charles Ye</span>
\t\t</div>
\t</div>
\t  <!-- Copyright -->
\t</footer>

\t

        
        
        
\t<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
\t\t<div class=\"row h-25\">
\t\t\t<div class=\"\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"sk-circle\">
\t\t\t\t<div class=\"sk-circle1 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle2 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle3 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle4 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle5 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle6 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle7 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle8 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle9 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle10 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle11 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle12 sk-child\"></div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<script>
\t  ";
        // line 146
        echo ($context["bodyScript"] ?? null);
        echo "
\t</script>

</body>
</html>";
    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_staticlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 76,  222 => 75,  216 => 27,  210 => 8,  201 => 146,  130 => 77,  128 => 75,  79 => 28,  77 => 27,  72 => 25,  54 => 10,  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"robots\" content=\"index, follow\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block meta %}{% endblock %}

    <title>{{title|e}}</title>
    <link rel=\"icon\" type=image/ico href=\"/static/logo.png\"/>
\t
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style-bs.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css\" integrity=\"sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg==\" crossorigin=\"anonymous\" />
\t
\t<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

\t
\t<!-- Bug with v9.0 stripping data-dir attributes from buttons -->
    <script src=\"https://code.highcharts.com/stock/9.1/highstock.js\"></script>
\t<script src=\"https://code.highcharts.com/9.1/modules/boost.js\"></script>
    {{ pageJS | raw }}

    {% block staticlinks %}{% endblock %}
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-946EV24B0X\"></script>
\t<script>
\t  window.dataLayer = window.dataLayer || [];
\t  function gtag(){dataLayer.push(arguments);}
\t  gtag('js', new Date());

\t  gtag('config', 'G-946EV24B0X');
\t</script>
\t<style id=\"style\"></style>
</head>

<body>
\t<header>
\t\t<div class=\"container-fluid\" style=\"height:.25rem;background-color:black;\"></div>

\t\t<nav class=\"navbar navbar-expand-md navbar-dark sticky-top py-0 shadow-sm\" style=\"background-color:var(--bs-econdblue)\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsingNavbarLg\"><span class=\"navbar-toggler-icon\"></span></button>

\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">\t\t\t\t\t\t
\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\"><i class=\"bi bi-bar-chart me-1\"></i>GDP Forecasts</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t-->
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#portfolio\">
\t\t\t\t\t\t\t\t<!--<i class=\"bi bi-bar-chart-steps me-1\"></i>-->My Portfolio
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#contact\">
\t\t\t\t\t\t\t\t<!--<i class=\"bi bi-bar-chart-steps me-1\"></i>-->Contact Me
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"sun-container\" class=\"d-block\" style=\"\"></div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t
\t<main >
\t\t{% block content %}
\t\t{% endblock %}
\t</main>

\t<footer class=\"container-fluid text-white px-0 bg-dark\">
\t  <!-- Grid container -->
\t  <div class=\"container py-3\">
\t\t<!--Grid row-->
\t\t<div class=\"row\">
\t\t  <!--Grid column-->
\t\t  <div class=\"col-6 mb-2 mb-md-0\">
\t\t  </div>
\t\t  <!--Grid column-->

\t\t  <!--Grid column-->
\t\t  <div class=\"col-6 mb-2 mb-md-0 text-end\">
\t\t\t<h5 class=\"text-uppercase mb-0\">CONTACT</h5>

\t\t\t<ul class=\"list-unstyled\">
\t\t\t  <li>
\t\t\t\t<a href=\"mailto:charles@cmefi.com\" class=\"text-white\">Email: charles (at) cmefi (dotcom)</a>
\t\t\t  </li>
\t\t\t</ul>
\t\t  </div>
\t\t  <!--Grid column-->
\t\t</div>
\t\t<!--Grid row-->
\t  </div>
\t  <!-- Grid container -->

\t  <!-- Copyright -->
\t<div class=\"container-fluid\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
\t\t<div class=\"container text-end p-2\">
\t\t\t<span>2022 <img class=\"mx-1\" width=\"16\" height=\"16\" src=\"/static/cmefi_short.png\"> Charles Ye</span>
\t\t</div>
\t</div>
\t  <!-- Copyright -->
\t</footer>

\t

        
        
        
\t<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
\t\t<div class=\"row h-25\">
\t\t\t<div class=\"\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"sk-circle\">
\t\t\t\t<div class=\"sk-circle1 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle2 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle3 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle4 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle5 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle6 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle7 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle8 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle9 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle10 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle11 sk-child\"></div>
\t\t\t\t<div class=\"sk-circle12 sk-child\"></div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<script>
\t  {{ bodyScript |raw }}
\t</script>

</body>
</html>", "base.html", "/var/www/charlesye.com/public/templates/base.html");
    }
}
