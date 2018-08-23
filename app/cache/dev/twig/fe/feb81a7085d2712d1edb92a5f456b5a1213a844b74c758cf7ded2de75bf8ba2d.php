<?php

/* CNCProductBundle:Product:logs.html.twig */
class __TwigTemplate_2af41eb29ec13e8bd3e20cdb542c2f45a9b5a9f6d19e482ad0148514b3d56f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNCProductBundle:Product:logs.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>Busqueda de productos</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function(){

\t\t\t\t\$('#resultados').html(\"\");
\t\t\t\t//url del servicio de busqueda
\t\t\t\tvar URLESTADISTICASPRODUCTOS = '";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnc_product_estadisticas");
        echo "';
\t            var data = {};
\t            \$.ajax({
\t                type: 'POST',
\t                url: URLESTADISTICASPRODUCTOS,
\t                data: data,
\t                dataType: 'json',
\t                timeout: 3000,
\t                success: function(response){
\t                \tconsole.log(response);
\t                \tvar productosEncontrados = response['respuesta'];
\t                \tfor (var i = 0; i < productosEncontrados.length; i++) {
\t                \t\t//console.log(productosEncontrados[i]['titulo']);
                \t\t\tvar texto = \"\";
                \t\t\ttexto+='<tr><td>'+productosEncontrados[i]['titulo']+'</td>';
                \t\t\ttexto+='<td>'+productosEncontrados[i]['keywords']+'</td></tr>';
                \t\t\t\$('#resultados').append(texto);
\t                \t}
\t                \t
\t                },
\t                error: function() {
\t                   alert('Sin conexion');
\t                }
\t            });
\t\t\t});
\t\t</script>
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-default\">
\t\t  <div class=\"container-fluid\">
\t\t   \t<div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Miguel Nuñez</a>
\t\t    </div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnc_product_index");
        echo "\">Búsqueda Productos</a></li>
\t\t        <li class=\"active\"><a href=\"#\">Estadisticas<span class=\"sr-only\">(current)</span></a></li>
\t\t      </ul>
\t\t    </div>
\t\t  </div>
\t\t</nav>
\t\t<h2>20 Productos más buscados</h2>
\t\t<br/><br/>\t
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t    <tr>
\t\t      <th scope=\"col\">Titulo</th>
\t\t      <th scope=\"col\">Keywords</th>
\t\t    </tr>
\t\t</thead>
\t\t  <tbody id=\"resultados\"></tbody>
\t\t</table>
\t</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CNCProductBundle:Product:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 11,  135 => 10,  129 => 9,  119 => 7,  113 => 6,  87 => 59,  43 => 18,  36 => 13,  33 => 9,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>Busqueda de productos</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/bootstrap.min.css') }}\">
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t<script type=\"text/javascript\" src=\"{{ asset('public/js/jquery-3.3.1.min.js') }}\"></script>
\t\t\t<script type=\"text/javascript\" src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
\t\t{% endblock %}
\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function(){

\t\t\t\t\$('#resultados').html(\"\");
\t\t\t\t//url del servicio de busqueda
\t\t\t\tvar URLESTADISTICASPRODUCTOS = '{{ path('cnc_product_estadisticas') }}';
\t            var data = {};
\t            \$.ajax({
\t                type: 'POST',
\t                url: URLESTADISTICASPRODUCTOS,
\t                data: data,
\t                dataType: 'json',
\t                timeout: 3000,
\t                success: function(response){
\t                \tconsole.log(response);
\t                \tvar productosEncontrados = response['respuesta'];
\t                \tfor (var i = 0; i < productosEncontrados.length; i++) {
\t                \t\t//console.log(productosEncontrados[i]['titulo']);
                \t\t\tvar texto = \"\";
                \t\t\ttexto+='<tr><td>'+productosEncontrados[i]['titulo']+'</td>';
                \t\t\ttexto+='<td>'+productosEncontrados[i]['keywords']+'</td></tr>';
                \t\t\t\$('#resultados').append(texto);
\t                \t}
\t                \t
\t                },
\t                error: function() {
\t                   alert('Sin conexion');
\t                }
\t            });
\t\t\t});
\t\t</script>
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-default\">
\t\t  <div class=\"container-fluid\">
\t\t   \t<div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Miguel Nuñez</a>
\t\t    </div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li><a href=\"{{ path('cnc_product_index') }}\">Búsqueda Productos</a></li>
\t\t        <li class=\"active\"><a href=\"#\">Estadisticas<span class=\"sr-only\">(current)</span></a></li>
\t\t      </ul>
\t\t    </div>
\t\t  </div>
\t\t</nav>
\t\t<h2>20 Productos más buscados</h2>
\t\t<br/><br/>\t
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t    <tr>
\t\t      <th scope=\"col\">Titulo</th>
\t\t      <th scope=\"col\">Keywords</th>
\t\t    </tr>
\t\t</thead>
\t\t  <tbody id=\"resultados\"></tbody>
\t\t</table>
\t</body>
</html>", "CNCProductBundle:Product:logs.html.twig", "C:\\xampp\\htdocs\\project_cuponatic\\src\\CNC\\ProductBundle/Resources/views/Product/logs.html.twig");
    }
}
