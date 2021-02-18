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

/* home.html */
class __TwigTemplate_4848799cd9d7664fb9f430ea315c54eaf57da1e68128344aed928ef98c30971a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'staticlinks' => [$this, 'block_staticlinks'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html", "home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<meta name=\"description\" content=\"Get aggregated macroeconomic data, forecasts, models, and insights including GDP forecasts, interest rate forecasts, and Treasury yield forecasts.\"/>
<link rel=\"canonical\" href=\"https://econforecasting.com\">
";
    }

    // line 8
    public function block_staticlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<script src=\"https://code.highcharts.com/8.2/highcharts-more.js\"></script>
<script src=\"https://code.highcharts.com/8.2/modules/heatmap.js\"></script>

<!--<script src=\"//code.highcharts.com/stock/highstock.js\"></script>
<script src=\"//code.highcharts.com/modules/heatmap.js\"></script>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js\"></script>
<script src=\"//code.highcharts.com/maps/modules/map.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/world-robinson.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/europe.js\"></script>

<script src=\"//code.highcharts.com/stock/indicators/indicators.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/ema.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/bollinger-bands.js\"></script>

<script src=\"static/script-fincontagion.js\"></script>
<script src=\"static/mapGenerator.js\"></script>
<script src=\"static/tsGenerator.js\"></script>
-->
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
<div class=\"container-fluid\" id=\"homepage-banner\" style=\"min-height:10rem\">
\t<div class=\"container px-4\">
\t<div class=\"row align-items-lg-center pt-2\">
      <div class=\"col-md-4 order-md-1 col-lg-6 text-center text-md-start\">
        <h1 class=\"mb-3\" style=\"font-family:Molengo\">Charles Ye</h1>
        <p class=\"lead mb-4\">
        </p>

\t\t<!--
        <div class=\"d-flex flex-column flex-md-row\">
          <a href=\"/docs/5.0/getting-started/introduction/\" class=\"btn btn-lg btn-bd-primary mb-3 me-md-3\" onclick=\"ga('send', 'event', 'Jumbotron actions', 'Get started', 'Get started');\">Get started</a>
          <a href=\"/docs/5.0/getting-started/download/\" class=\"btn btn-lg btn-outline-secondary mb-3\" onclick=\"ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 5.0.0-beta2');\">Download</a>
        </div>
        <p class=\"text-muted mb-0\">
          Currently <strong>v5.0.0-beta2</strong>
          <span class=\"px-1\">·</span>
          <a href=\"https://getbootstrap.com/docs/4.6/getting-started/introduction/\" class=\"link-secondary\">v4.6.x docs</a>
          <span class=\"px-1\">·</span>
          <a href=\"/docs/versions/\" class=\"link-secondary\">All releases</a>
        </p>
\t\t-->
      </div>

      <div class=\"col-10 mx-auto col-md-8 order-md-2 col-lg-6 \">
\t\t<img src=\"https://learnwebcode.com/images/lessons/insert-image-funny-dog.jpg\">

      </div>
    </div>
\t</div>  
</div>


<div class=\"container-fluid px-0 pb-5\" style=\"background-image:url(static/svg_bg.svg);background-size:cover;background-position:top left\">
\t<div class=\"container-fluid mt-5\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-primary) 50%, var(--bs-secondary) 50%)\">
\t\t<div class=\"container px-2 py-0\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-primary) 50%, rgba(255, 255, 255, 0) 50%)\">
\t\t\t<h4 class=\"text-white\">My Recent Work</h4>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\" style=\"background-image: url(static/bg-2.svg);background-size:cover;background-position:top left\">
\t\t<div class=\"container pt-2 pb-2\">
\t\t\t<div class=\"row justify-content-end\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<a class=\"d-block col-lg-4\" href=\"https://econforecasting.com\" style=\"background-image: url(static/screenshot-1.png);background-size: contain;\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">econforecasting.com</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a forecast of Treasury yields and interest rates for my website, <a href=\"https://econforecasting.com\">econforecasting.com</a>. Interest rates are a key benchmark of the macroeconomy and are used to make important everyday investment decisions by companies. I built this to provide a free source of interest rate forecasts, as existing forecasts either lack full coverage of important interest rates, or are only provided by vendors charging in the five and six figures.</p>
\t\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t\t<p><strong>Data scraping and modeling conducted with R (Tidyverse, Data.table), Python, and PostgreSQL.</strong></p>
\t\t\t\t\t\t\t\t\t\t<p><strong>Web UI built with HTML, CSS/SCSS, JavaScript (Highcharts, DataTables, D3), Bootstrap, and Nginx on an Ubuntu Server.</strong></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Data & Modeling Code</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Web UI Code</a>
       
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-dark\">
\t\t\t\t\t\t\t\t<div id=\"chart-container\"></div>
\t\t\t\t\t\t\t\t<div id=\"chart-container-2\"></div>

\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"font-size:.95rem\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">econforecasting.com - Interest Rate Forecasts</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a forecast of Treasury yields and other interest rates for my website, <a href=\"https://econforecasting.com\">econforecasting.com</a>. Interest rates are a key benchmark of the macroeconomy and are used to make important everyday investment decisions by companies. I built this to provide a free source of interest rate forecasts, as existing forecasts either lack full coverage of important interest rates (or are only provided by vendors charging in the five and six figures).</p>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website Page</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-dark\">
\t\t\t\t\t\t\t\t<div id=\"heatmap-container\"></div>

\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">Asset Contagion index</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
\t\t\t\t\t\t\t\t\t<div class=\"row row-cols-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Hi this is Charles</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary  px-5 mx-3\" role=\"button\" href=\"\">Github</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>\t
\t\t</div>
\t</div>
\t<div class=\"container-fluid mt-2\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-econorange) 50%, var(--bs-econpale) 50%)\">
\t\t<div class=\"container px-2 py-0\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-econorange) 50%, rgba(255, 255, 255, 0) 50%)\">
\t\t\t<h4 class=\"text-white\">About Us</h4>
\t\t</div>
\t</div>
\t<div class=\"container pt-1\">
\t<h4>
\tCMEFI is a non-partisan think tank working to democratize macroeconomic knowledge by making the necessary tools, data, and insights more available for all.
\t</h4>
\t</div>
</div>



\t

";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  85 => 31,  62 => 9,  58 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block meta %}
<meta name=\"description\" content=\"Get aggregated macroeconomic data, forecasts, models, and insights including GDP forecasts, interest rate forecasts, and Treasury yield forecasts.\"/>
<link rel=\"canonical\" href=\"https://econforecasting.com\">
{% endblock %}

{% block staticlinks %}
<script src=\"https://code.highcharts.com/8.2/highcharts-more.js\"></script>
<script src=\"https://code.highcharts.com/8.2/modules/heatmap.js\"></script>

<!--<script src=\"//code.highcharts.com/stock/highstock.js\"></script>
<script src=\"//code.highcharts.com/modules/heatmap.js\"></script>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js\"></script>
<script src=\"//code.highcharts.com/maps/modules/map.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/world-robinson.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/europe.js\"></script>

<script src=\"//code.highcharts.com/stock/indicators/indicators.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/ema.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/bollinger-bands.js\"></script>

<script src=\"static/script-fincontagion.js\"></script>
<script src=\"static/mapGenerator.js\"></script>
<script src=\"static/tsGenerator.js\"></script>
-->
{% endblock %}


{% block content %}

<div class=\"container-fluid\" id=\"homepage-banner\" style=\"min-height:10rem\">
\t<div class=\"container px-4\">
\t<div class=\"row align-items-lg-center pt-2\">
      <div class=\"col-md-4 order-md-1 col-lg-6 text-center text-md-start\">
        <h1 class=\"mb-3\" style=\"font-family:Molengo\">Charles Ye</h1>
        <p class=\"lead mb-4\">
        </p>

\t\t<!--
        <div class=\"d-flex flex-column flex-md-row\">
          <a href=\"/docs/5.0/getting-started/introduction/\" class=\"btn btn-lg btn-bd-primary mb-3 me-md-3\" onclick=\"ga('send', 'event', 'Jumbotron actions', 'Get started', 'Get started');\">Get started</a>
          <a href=\"/docs/5.0/getting-started/download/\" class=\"btn btn-lg btn-outline-secondary mb-3\" onclick=\"ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 5.0.0-beta2');\">Download</a>
        </div>
        <p class=\"text-muted mb-0\">
          Currently <strong>v5.0.0-beta2</strong>
          <span class=\"px-1\">·</span>
          <a href=\"https://getbootstrap.com/docs/4.6/getting-started/introduction/\" class=\"link-secondary\">v4.6.x docs</a>
          <span class=\"px-1\">·</span>
          <a href=\"/docs/versions/\" class=\"link-secondary\">All releases</a>
        </p>
\t\t-->
      </div>

      <div class=\"col-10 mx-auto col-md-8 order-md-2 col-lg-6 \">
\t\t<img src=\"https://learnwebcode.com/images/lessons/insert-image-funny-dog.jpg\">

      </div>
    </div>
\t</div>  
</div>


<div class=\"container-fluid px-0 pb-5\" style=\"background-image:url(static/svg_bg.svg);background-size:cover;background-position:top left\">
\t<div class=\"container-fluid mt-5\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-primary) 50%, var(--bs-secondary) 50%)\">
\t\t<div class=\"container px-2 py-0\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-primary) 50%, rgba(255, 255, 255, 0) 50%)\">
\t\t\t<h4 class=\"text-white\">My Recent Work</h4>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\" style=\"background-image: url(static/bg-2.svg);background-size:cover;background-position:top left\">
\t\t<div class=\"container pt-2 pb-2\">
\t\t\t<div class=\"row justify-content-end\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<a class=\"d-block col-lg-4\" href=\"https://econforecasting.com\" style=\"background-image: url(static/screenshot-1.png);background-size: contain;\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">econforecasting.com</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a forecast of Treasury yields and interest rates for my website, <a href=\"https://econforecasting.com\">econforecasting.com</a>. Interest rates are a key benchmark of the macroeconomy and are used to make important everyday investment decisions by companies. I built this to provide a free source of interest rate forecasts, as existing forecasts either lack full coverage of important interest rates, or are only provided by vendors charging in the five and six figures.</p>
\t\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t\t<p><strong>Data scraping and modeling conducted with R (Tidyverse, Data.table), Python, and PostgreSQL.</strong></p>
\t\t\t\t\t\t\t\t\t\t<p><strong>Web UI built with HTML, CSS/SCSS, JavaScript (Highcharts, DataTables, D3), Bootstrap, and Nginx on an Ubuntu Server.</strong></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Data & Modeling Code</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Web UI Code</a>
       
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-dark\">
\t\t\t\t\t\t\t\t<div id=\"chart-container\"></div>
\t\t\t\t\t\t\t\t<div id=\"chart-container-2\"></div>

\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"font-size:.95rem\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">econforecasting.com - Interest Rate Forecasts</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a forecast of Treasury yields and other interest rates for my website, <a href=\"https://econforecasting.com\">econforecasting.com</a>. Interest rates are a key benchmark of the macroeconomy and are used to make important everyday investment decisions by companies. I built this to provide a free source of interest rate forecasts, as existing forecasts either lack full coverage of important interest rates (or are only provided by vendors charging in the five and six figures).</p>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website Page</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t<div class=\"card my-2 border-1 border-econgreen\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-dark\">
\t\t\t\t\t\t\t\t<div id=\"heatmap-container\"></div>

\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"col-lg-8 border-5 border-start border-econgreen\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-family:Arial\">Asset Contagion index</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
\t\t\t\t\t\t\t\t\t<div class=\"row row-cols-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Hi this is Charles</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary px-5 mx-3\" role=\"button\" href=\"\">Website Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary  px-5 mx-3\" role=\"button\" href=\"\">Github</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>\t
\t\t</div>
\t</div>
\t<div class=\"container-fluid mt-2\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-econorange) 50%, var(--bs-econpale) 50%)\">
\t\t<div class=\"container px-2 py-0\" style=\"height:2rem;background-image:linear-gradient(45deg, var(--bs-econorange) 50%, rgba(255, 255, 255, 0) 50%)\">
\t\t\t<h4 class=\"text-white\">About Us</h4>
\t\t</div>
\t</div>
\t<div class=\"container pt-1\">
\t<h4>
\tCMEFI is a non-partisan think tank working to democratize macroeconomic knowledge by making the necessary tools, data, and insights more available for all.
\t</h4>
\t</div>
</div>



\t

{% endblock %}", "home.html", "/var/www/charlesye.com/public/templates/home.html");
    }
}
