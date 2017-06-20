<?php

/* EspritNaoBundle:Cours:List.html.twig */
class __TwigTemplate_473d5e89e4cdc2567c4a22650334f216c5261716120736fbdfa77fc4f6e7c5bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link   href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/business-casual.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"http://www.parsecdn.com/js/parse-1.2.12.min.js\"></script>
    <script type=\"text/javascript\">
function find (){
 Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");
var  rs= Parse.Object.extend(\"cours\");
var query = new Parse.Query(rs);
query.find({
  success: function(results) {
    
\tfor (var i = 0; i < results.length; i++) { 
      var texteLien = \"Voir\";      
      var object = results[i];
      document.getElementById(\"1234\").innerHTML=(document.getElementById(\"1234\").innerHTML+ object.get('description')+'<br>'+texteLien.link(object.get('file').url()) +'<br><br><br>');
    }
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});
\t}
\t</script>
</head>

<body>

    <div class=\"brand\">Nao Robot</div>
  

    <!-- Navigation -->
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class=\"navbar-brand\" href=\"index.html\">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                     <li>
                        <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\" >Add Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ListCours");
        echo "\">show Lessons</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\">create Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("esprit_nao_enseignant");
        echo "\" >check presence  </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ip");
        echo "\" >Controle Nao</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
   <center>         
    ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 100
            echo "       
  <ul>
  <li> Description:";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "getDescription", array(), "method"), "html", null, true);
            echo " </li>
  <li> URL : ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "getUrl", array(), "method"), "html", null, true);
            echo " </li>
</ul> 
     <h5>---------------------------------------------------------------------------</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </center>
    <style>
#myProgress {
  width: 100%;
  height: 30px;
  position: relative;
  background-color: #ddd;
}

#myBar {
  background-color: #4CAF50;
  width: 10px;
  height: 30px;
  position: absolute;
}
</style>
<style>
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: \"\";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</style>
    <center> 
       
        <button class=\"button\" onclick=\"find()\">Afficher</button>
        <p id=\"1234\"></p>
        
    </center>
 </nav>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12 text-center\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                      

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                      <ul class=\"nav navbar-nav\">
                    <li>
                       <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/x.png"), "html", null, true);
        echo "\">
                    </li>
                  
                </ul>
                    <h2 class=\"brand-before\">
                        <small>Welcome to</small>
                        
                      
                   
                    </h2>
                    <h1 class=\"brand-name\">Nao Assistant</h1>
                    <hr class=\"tagline-divider\">
                    <h2>
                        <small>By
                            <strong>Special One</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
           
        </div>

        
        </div>

    </div>
    <!-- /.container -->

    

    <!-- jQuery -->
    <script  src=";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:List.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 231,  289 => 228,  252 => 194,  163 => 107,  153 => 103,  149 => 102,  145 => 100,  141 => 99,  130 => 91,  124 => 88,  118 => 85,  112 => 82,  106 => 79,  44 => 20,  38 => 17,  22 => 3,  19 => 1,);
    }
}
