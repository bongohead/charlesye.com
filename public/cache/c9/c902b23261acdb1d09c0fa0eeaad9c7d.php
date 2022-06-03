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
class __TwigTemplate_313e1f1dd64b453d5e82db78871693f1 extends Template
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
        echo "<meta name=\"description\" content=\"Hello! I am a data scientist and economist and this is my portfolio.\"/>
<link rel=\"canonical\" href=\"https://econforecasting.com\">
";
    }

    // line 8
    public function block_staticlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<script src=\"https://code.highcharts.com/9.1/highcharts-more.js\"></script>
<script src=\"https://code.highcharts.com/9.1/modules/heatmap.js\"></script>

";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"container-fluid\" id=\"homepage-banner\" style=\"min-height:10rem\">
\t<div class=\"container px-4\">
\t<div class=\"row align-items-lg-center pt-2\">
      <div class=\"col-md-4 order-md-1 col-lg-6 text-center text-md-start\">
        <h2 class=\"mb-3 pe-5 me-5\" style=\"font-family:Molengo;color:rgb(18, 69, 122)\">Hello, my name is Charles and I like <span style=\"text-decoration:underline;color:var(--bs-econred)\">economics</span> and <span style=\"text-decoration:underline;color:var(--bs-econred)\">data science</span>. I also do full-stack web development and data visualization.</h2>
        <p class=\"lead mb-4\">
        </p>

      </div>

      <div class=\"col-12 mx-auto col-md-8 order-md-2 col-lg-6 my-4\" style=\"background-color:rgba(255, 255, 255, .9)\">
\t\t\t<div class=\"row shadow-sm border border-1 rounded text-center\">
\t\t\t\t<div class=\"col-4 border-end border-1 text-center px-2 py-3\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">About</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>I like using models to <strong>explain data</strong> and <strong>tell stories</strong>.</p>

\t\t\t\t\t<p>I've made models to explain the macroeconomy, make predictions about individuals' purchasing and saving decisions, and forecast financial time series.</p>
\t\t\t\t\t<h5 class=\"pt-5\">Work experience:</h5>
\t\t\t\t\t<ul class=\"list-group border-0\" style=\"font-size:.8rem\">
\t\t\t\t\t\t<li class=\"list-group-item\">10+ years in analytics, esp. in payments & banking</li>

\t\t\t\t\t\t<li class=\"list-group-item\">10 years experience in modeling</li>
\t\t\t\t\t\t<li class=\"list-group-item\">8 years experience in webdev</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 border-start border-1 text-center px-2 py-3\" style=\"background:linear-gradient(to top, rgb(236, 253, 245), rgb(255, 255, 255), rgb(255, 255, 255))\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"currentColor\" class=\"bi bi-graph-up\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">Modeling</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<h5 class=\"pt-1\">Data languages I speak:</h5>
\t\t\t\t\t<p><strong>R, Python, SQL</strong> (Postgres, MySQL, MS SQL, Spark SQL, Hive, ClickHouse, Presto)</p>
\t\t\t\t\t<h5 class=\"pt-4\">Modeling experience:</h5>
\t\t\t\t\t<p>I specialize in <strong>forecasting</strong>, <strong>causal modeling</strong>, and working with <strong>high-dimensional data</strong>.</p>
\t\t\t\t\t<h5 class=\"pt-4\">Models:</h5>
\t\t\t\t\t<ul class=\"list-group border-0\" style=\"font-size:.9rem\">
\t\t\t\t\t<li class=\"list-group-item\" style=\"font-size:.9rem\">generalized linear regression, penalized regressions & elastic net, ARIMAs/VARs/SVARs, Kalman filtration, random forests, SVMs, GARCH </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 border-start border-end border-1 text-center px-2 py-3\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"currentColor\" class=\"bi bi-laptop\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path d=\"M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">Tech</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<h5 class=\"pt-1\">Systems development:</h5>
\t\t\t\t\t<p><strong>Bash</strong>, <strong>Rust</strong></p>

\t\t\t\t\t<h5 class=\"pt-1\">Front-end webdev:</h5>
\t\t\t\t\t<p><strong>Javascript</strong>, <strong>HTML</strong>, <strong>CSS</strong>, Sass, Bootstrap, Angular, Highcharts.js, DataTables.js</p>
\t\t\t\t\t<h5 class=\"pt-4\">Server-side webdev:</h5>
\t\t\t\t\t<p><strong>PHP</strong>, <strong>SQL</strong>, <strong>Python</strong>, Django, Nginx, Linux</p>
\t\t\t\t\t<h5 class=\"pt-4\">Other:</h5>
\t\t\t\t\t<p>LaTeX, Wordpress</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t</div>  
</div>

<hr class=\"m-0\">
<div class=\"container-fluid px-0 pb-5 bg-light\">
\t
\t<div class=\"container pt-4 pb-2\">
\t\t<div class=\"container px-0\">
\t\t\t<div class=\"p-1 mb-1 bg-econred d-inline-block text-white rounded\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-code\" viewBox=\"0 0 16 16\">
\t\t\t\t  <path d=\"M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"d-inline\">
\t\t\t\t<span style=\"vertical-align:middle;font-size:1.8rem\" class=\"text-dark ps-2\" id=\"portfolio\">My Recent Work</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-end pb-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">econforecasting.com</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"https://econforecasting.com\">Econforecasting.com</a> is a website I built to provide a free source of economic forecasts, models, and insights. Businesses rely on economic forecasts to make planning and investment decisions, yet the only sources of most of these forecasts is from expensive vendors charging in the five and six figures. I wanted to provide an open source, backtested, properly documented and free alternative.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://econforecasting.com/forecast-treasury-curve\">Treasury Yield Curve Forecasts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://econforecasting.com/forecast-ffr\">Federal Funds Rate Forecasts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a style=\"text-decoration: line-through\" href=\"https://econforecasting.com/ac-regions-hm\">Asset Correlation Index</a> (2022Q2 - undergoing refactoring)</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tData for the models was scraped from various free online sources (<a href=\"https://github.com/cmefi/econforecasting-r/tree/master/modules\">code available here</a>). Economic modeling was conducted using a mix of structural economic estimation and some modern machine learning techniques.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code</h5>
\t\t\t\t\t\t\t\t\t<div class=\"pt-1 pb-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r\">Github - Data Scraping/Modeling</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 ms-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-web\">Github - Website</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<p>Data scraping and modeling were conducted with <strong>R</strong> (Tidyverse, Data.table), <strong>Python</strong>, and <strong>PostgreSQL</strong> with <strong>TimescaleDB</strong>.</p>
\t\t\t\t\t\t\t\t\t<p>The front-end of the website was built with <strong>HTML</strong>, <strong>CSS/SCSS</strong>, <strong>Bootstrap</strong>, and <strong>JavaScript</strong> on an Ubuntu VPS. I created the data visualization using the Highcharts, DataTables, and D3 libraries.</p>
\t\t\t\t\t\t\t\t\t<p>The server side of the website was created with <strong>PHP</strong> and <strong>PostgreSQL</strong> on an Ubuntu VPS.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-4 float-end\" style=\"max-width:25rem\">
\t\t\t\t\t\t\t\t\t<div id=\"chart-container\" class=\"my-1\"></div>

\t\t\t\t\t\t\t\t\t<div id=\"heatmap-container\" class=\"my-1\"></div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">ragged-edge-nowcasting</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-8\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis is a time series model and framework I wrote for <a href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\">nowcasting</a> (predicting the present and very near-term future, e.g. predicting current-quarter GDP growth). Nowcasting is about deciphering key information about the state of the economy before official data is released, using whatever information is available. This is useful for highly volatile situations where knowledge of the present is of immediate importance - e.g., forecasting the economy during the middle of the COVID-19 crisis.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tThe model can be found <a href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\">here</a>, with visualization available <a href=\"https://econforecasting.com/nowcast-gdp\">here</a>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/modules/nowcast-model/nowcast-model-run.r\">Github - R</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/modules/nowcast-model/nowcast-model-documentation-template.rnw\">Github - Latex</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Written with <strong>R</strong>, <strong>PostgreSQL</strong>, and <strong>LaTeX</strong>.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4 d-block\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\" style=\"background-image:url(static/nowcast-time-3.png); background-size:cover;max-height:18rem\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">savings-slug</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-8\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis is an online app I created for personal budgeting. I originally created this for personal use - existing personal budgeting software use zero-cash-flow accounting systems which were too inflexible for my needs. This program uses double-entry bookkeeping instead. It allows you to enter all your spending and flexibly monitor cash flow, new accounts, etc. while monitoring your net assets & equity positions.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThe app can be found here: <a href=\"https://budget.macrodawg.com\">budget.macrodawg.com</a>. You can test it out by using the email <strong>test@test.com</strong> with the password <strong>test</strong>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/savings-slug\">Github</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Built with <strong>Javascript</strong>, <strong>PHP</strong>, and <strong>MySQL</strong> on an Ubuntu VPS.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4 d-block\" href=\"https://budget.macrodawg.com\" style=\"background-image:url(static/screenshot-2.png); background-size:cover;max-height:18rem\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">gradient.js</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"https://github.com/cmefi/gradient.js\">gradient.js</a> is a  vanilla JS tool to allow users to create gradients with unlimited color stops, and to pull colors from values within the gradient range. Especially useful for dynamically assigning datapoint-specific colors when working with JS data visualization tools (e.g., the SVG-generated image on the right).
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 my-1\" role=\"button\" href=\"https://github.com/cmefi/gradient.js\">Github</a></h5>
\t\t\t\t\t\t\t\t\t<p>Built with <strong>Javascript</strong>.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 col-xl-4\" id=\"svg-container\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">aw-rshiny</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis builds a locally hosted RShiny dashboard for working with data from <a href=\"https://activitywatch.net/\">[ActivityWatch]</a>. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/aw-rshiny\">Github</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Built with the <strong>shiny</strong> package for <strong>R</strong>.</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4\" style=\"min-height:15rem;background-image:url(static/screenshot-3.png); background-size:cover;max-height:18rem\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>\t

\t</div>
</div>
<hr class=\"m-0\">

<div class=\"container-fluid py-5\">

\t<div class=\"container px-0 pb-2 rounded bg-white rounded border border-2\">
\t\t<div class=\"p-1 mb-1 bg-econorange d-inline-block text-white rounded\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\">
\t\t\t  <path d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z\"/>
\t\t\t</svg>\t
\t\t</div>
\t\t<div class=\"d-inline\">
\t\t\t<span style=\"vertical-align:middle;font-size:1.8rem\" class=\"text-dark border-1 border-econorange border-bottom px-2\" id=\"contact\">Contact Me</span>
\t\t</div>
\t\t\t<h4 class=\"text-center px-5 py-3 mx-5\">Interested in working together, accessing datasets or using my code? I'm always open to new opportunities - give me a shout at <strong>charles@cmefi.com</strong>.</h4>

\t</div>
\t<div class=\"container-fluid\" style=\"height:10rem\">
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
        return array (  73 => 16,  69 => 15,  62 => 9,  58 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block meta %}
<meta name=\"description\" content=\"Hello! I am a data scientist and economist and this is my portfolio.\"/>
<link rel=\"canonical\" href=\"https://econforecasting.com\">
{% endblock %}

{% block staticlinks %}
<script src=\"https://code.highcharts.com/9.1/highcharts-more.js\"></script>
<script src=\"https://code.highcharts.com/9.1/modules/heatmap.js\"></script>

{% endblock %}


{% block content %}

<div class=\"container-fluid\" id=\"homepage-banner\" style=\"min-height:10rem\">
\t<div class=\"container px-4\">
\t<div class=\"row align-items-lg-center pt-2\">
      <div class=\"col-md-4 order-md-1 col-lg-6 text-center text-md-start\">
        <h2 class=\"mb-3 pe-5 me-5\" style=\"font-family:Molengo;color:rgb(18, 69, 122)\">Hello, my name is Charles and I like <span style=\"text-decoration:underline;color:var(--bs-econred)\">economics</span> and <span style=\"text-decoration:underline;color:var(--bs-econred)\">data science</span>. I also do full-stack web development and data visualization.</h2>
        <p class=\"lead mb-4\">
        </p>

      </div>

      <div class=\"col-12 mx-auto col-md-8 order-md-2 col-lg-6 my-4\" style=\"background-color:rgba(255, 255, 255, .9)\">
\t\t\t<div class=\"row shadow-sm border border-1 rounded text-center\">
\t\t\t\t<div class=\"col-4 border-end border-1 text-center px-2 py-3\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">About</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>I like using models to <strong>explain data</strong> and <strong>tell stories</strong>.</p>

\t\t\t\t\t<p>I've made models to explain the macroeconomy, make predictions about individuals' purchasing and saving decisions, and forecast financial time series.</p>
\t\t\t\t\t<h5 class=\"pt-5\">Work experience:</h5>
\t\t\t\t\t<ul class=\"list-group border-0\" style=\"font-size:.8rem\">
\t\t\t\t\t\t<li class=\"list-group-item\">10+ years in analytics, esp. in payments & banking</li>

\t\t\t\t\t\t<li class=\"list-group-item\">10 years experience in modeling</li>
\t\t\t\t\t\t<li class=\"list-group-item\">8 years experience in webdev</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 border-start border-1 text-center px-2 py-3\" style=\"background:linear-gradient(to top, rgb(236, 253, 245), rgb(255, 255, 255), rgb(255, 255, 255))\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"currentColor\" class=\"bi bi-graph-up\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">Modeling</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<h5 class=\"pt-1\">Data languages I speak:</h5>
\t\t\t\t\t<p><strong>R, Python, SQL</strong> (Postgres, MySQL, MS SQL, Spark SQL, Hive, ClickHouse, Presto)</p>
\t\t\t\t\t<h5 class=\"pt-4\">Modeling experience:</h5>
\t\t\t\t\t<p>I specialize in <strong>forecasting</strong>, <strong>causal modeling</strong>, and working with <strong>high-dimensional data</strong>.</p>
\t\t\t\t\t<h5 class=\"pt-4\">Models:</h5>
\t\t\t\t\t<ul class=\"list-group border-0\" style=\"font-size:.9rem\">
\t\t\t\t\t<li class=\"list-group-item\" style=\"font-size:.9rem\">generalized linear regression, penalized regressions & elastic net, ARIMAs/VARs/SVARs, Kalman filtration, random forests, SVMs, GARCH </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 border-start border-end border-1 text-center px-2 py-3\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" fill=\"currentColor\" class=\"bi bi-laptop\" viewBox=\"0 0 16 16\">
\t\t\t\t\t  <path d=\"M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h3 class=\"fw-bolder\">Tech</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<h5 class=\"pt-1\">Systems development:</h5>
\t\t\t\t\t<p><strong>Bash</strong>, <strong>Rust</strong></p>

\t\t\t\t\t<h5 class=\"pt-1\">Front-end webdev:</h5>
\t\t\t\t\t<p><strong>Javascript</strong>, <strong>HTML</strong>, <strong>CSS</strong>, Sass, Bootstrap, Angular, Highcharts.js, DataTables.js</p>
\t\t\t\t\t<h5 class=\"pt-4\">Server-side webdev:</h5>
\t\t\t\t\t<p><strong>PHP</strong>, <strong>SQL</strong>, <strong>Python</strong>, Django, Nginx, Linux</p>
\t\t\t\t\t<h5 class=\"pt-4\">Other:</h5>
\t\t\t\t\t<p>LaTeX, Wordpress</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t</div>  
</div>

<hr class=\"m-0\">
<div class=\"container-fluid px-0 pb-5 bg-light\">
\t
\t<div class=\"container pt-4 pb-2\">
\t\t<div class=\"container px-0\">
\t\t\t<div class=\"p-1 mb-1 bg-econred d-inline-block text-white rounded\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-code\" viewBox=\"0 0 16 16\">
\t\t\t\t  <path d=\"M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"d-inline\">
\t\t\t\t<span style=\"vertical-align:middle;font-size:1.8rem\" class=\"text-dark ps-2\" id=\"portfolio\">My Recent Work</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-end pb-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">econforecasting.com</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"https://econforecasting.com\">Econforecasting.com</a> is a website I built to provide a free source of economic forecasts, models, and insights. Businesses rely on economic forecasts to make planning and investment decisions, yet the only sources of most of these forecasts is from expensive vendors charging in the five and six figures. I wanted to provide an open source, backtested, properly documented and free alternative.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://econforecasting.com/forecast-treasury-curve\">Treasury Yield Curve Forecasts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://econforecasting.com/forecast-ffr\">Federal Funds Rate Forecasts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a style=\"text-decoration: line-through\" href=\"https://econforecasting.com/ac-regions-hm\">Asset Correlation Index</a> (2022Q2 - undergoing refactoring)</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tData for the models was scraped from various free online sources (<a href=\"https://github.com/cmefi/econforecasting-r/tree/master/modules\">code available here</a>). Economic modeling was conducted using a mix of structural economic estimation and some modern machine learning techniques.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code</h5>
\t\t\t\t\t\t\t\t\t<div class=\"pt-1 pb-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r\">Github - Data Scraping/Modeling</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 ms-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-web\">Github - Website</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<p>Data scraping and modeling were conducted with <strong>R</strong> (Tidyverse, Data.table), <strong>Python</strong>, and <strong>PostgreSQL</strong> with <strong>TimescaleDB</strong>.</p>
\t\t\t\t\t\t\t\t\t<p>The front-end of the website was built with <strong>HTML</strong>, <strong>CSS/SCSS</strong>, <strong>Bootstrap</strong>, and <strong>JavaScript</strong> on an Ubuntu VPS. I created the data visualization using the Highcharts, DataTables, and D3 libraries.</p>
\t\t\t\t\t\t\t\t\t<p>The server side of the website was created with <strong>PHP</strong> and <strong>PostgreSQL</strong> on an Ubuntu VPS.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-4 float-end\" style=\"max-width:25rem\">
\t\t\t\t\t\t\t\t\t<div id=\"chart-container\" class=\"my-1\"></div>

\t\t\t\t\t\t\t\t\t<div id=\"heatmap-container\" class=\"my-1\"></div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">ragged-edge-nowcasting</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-8\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis is a time series model and framework I wrote for <a href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\">nowcasting</a> (predicting the present and very near-term future, e.g. predicting current-quarter GDP growth). Nowcasting is about deciphering key information about the state of the economy before official data is released, using whatever information is available. This is useful for highly volatile situations where knowledge of the present is of immediate importance - e.g., forecasting the economy during the middle of the COVID-19 crisis.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tThe model can be found <a href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\">here</a>, with visualization available <a href=\"https://econforecasting.com/nowcast-gdp\">here</a>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/modules/nowcast-model/nowcast-model-run.r\">Github - R</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/modules/nowcast-model/nowcast-model-documentation-template.rnw\">Github - Latex</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Written with <strong>R</strong>, <strong>PostgreSQL</strong>, and <strong>LaTeX</strong>.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4 d-block\" href=\"https://github.com/cmefi/econforecasting-r/blob/master/nowcast-model-documentation.pdf\" style=\"background-image:url(static/nowcast-time-3.png); background-size:cover;max-height:18rem\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">savings-slug</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-8\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis is an online app I created for personal budgeting. I originally created this for personal use - existing personal budgeting software use zero-cash-flow accounting systems which were too inflexible for my needs. This program uses double-entry bookkeeping instead. It allows you to enter all your spending and flexibly monitor cash flow, new accounts, etc. while monitoring your net assets & equity positions.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThe app can be found here: <a href=\"https://budget.macrodawg.com\">budget.macrodawg.com</a>. You can test it out by using the email <strong>test@test.com</strong> with the password <strong>test</strong>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/savings-slug\">Github</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Built with <strong>Javascript</strong>, <strong>PHP</strong>, and <strong>MySQL</strong> on an Ubuntu VPS.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4 d-block\" href=\"https://budget.macrodawg.com\" style=\"background-image:url(static/screenshot-2.png); background-size:cover;max-height:18rem\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">gradient.js</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"https://github.com/cmefi/gradient.js\">gradient.js</a> is a  vanilla JS tool to allow users to create gradients with unlimited color stops, and to pull colors from values within the gradient range. Especially useful for dynamically assigning datapoint-specific colors when working with JS data visualization tools (e.g., the SVG-generated image on the right).
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 my-1\" role=\"button\" href=\"https://github.com/cmefi/gradient.js\">Github</a></h5>
\t\t\t\t\t\t\t\t\t<p>Built with <strong>Javascript</strong>.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 col-xl-4\" id=\"svg-container\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-xl-6\">
\t\t\t\t<div class=\"card my-2 border-2\" >
\t\t\t\t\t<h5 class=\"card-header bg-econred text-white\">aw-rshiny</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-1\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 col-xl-7\">
\t\t\t\t\t\t\t\t\t<h5>About</h5>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis builds a locally hosted RShiny dashboard for working with data from <a href=\"https://activitywatch.net/\">[ActivityWatch]</a>. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h5>Code <a class=\"btn btn-sm btn-econblue text-white px-3 mx-1 my-1\" role=\"button\" href=\"https://github.com/cmefi/aw-rshiny\">Github</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p>Built with the <strong>shiny</strong> package for <strong>R</strong>.</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"col-md-12 col-lg-6 col-xl-4\" style=\"min-height:15rem;background-image:url(static/screenshot-3.png); background-size:cover;max-height:18rem\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>\t

\t</div>
</div>
<hr class=\"m-0\">

<div class=\"container-fluid py-5\">

\t<div class=\"container px-0 pb-2 rounded bg-white rounded border border-2\">
\t\t<div class=\"p-1 mb-1 bg-econorange d-inline-block text-white rounded\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-envelope-open\" viewBox=\"0 0 16 16\">
\t\t\t  <path d=\"M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z\"/>
\t\t\t</svg>\t
\t\t</div>
\t\t<div class=\"d-inline\">
\t\t\t<span style=\"vertical-align:middle;font-size:1.8rem\" class=\"text-dark border-1 border-econorange border-bottom px-2\" id=\"contact\">Contact Me</span>
\t\t</div>
\t\t\t<h4 class=\"text-center px-5 py-3 mx-5\">Interested in working together, accessing datasets or using my code? I'm always open to new opportunities - give me a shout at <strong>charles@cmefi.com</strong>.</h4>

\t</div>
\t<div class=\"container-fluid\" style=\"height:10rem\">
\t</div>
</div>



\t

{% endblock %}", "home.html", "/var/www/charlesye.com/public/templates/home.html");
    }
}
