<?php

/* EspritNaoBundle:Cours:absence.html.twig */
class __TwigTemplate_88794e33ee341ea12c6df6da0cfe2ca1c975979a51f3907ceceb3549e8998978 extends Twig_Template
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
        // line 2
        echo "<html lang=\"en\">
      
        
        
        

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <script type=\"text/javascript\" src=\"http://www.parsecdn.com/js/parse-1.2.12.min.js\"></script>
    <title>B</title>

    <!-- Bootstrap Core CSS -->
    <link   href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/business-casual.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
 <script  src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
 <script type=\"text/javascript\">
function find (){
Parse.initialize(\"Y7H2wMcj373iIX7xXKHrKA1BXcKqr0h9InfBbOJK\",\"NtSCfnrwszHoNyWpN70BMq6DU1wJCr3lkwuYd7Ct\");
var  rs= Parse.Object.extend(\"etudiant\");
var query = new Parse.Query(rs);
query.find({
  success: function(results) {
    
\tfor (var i = 0; i < results.length; i++) { 
      var texteLien = \"Voir\";      
      var object = results[i];
      document.getElementById(\"1234\").innerHTML=(document.getElementById(\"1234\").innerHTML+'<li>'+'nom:  '+object.get('nom')+'</li>'+'<li>'+'prenom:  '+object.get('prenom')+'</li>'+'<li>'+'presence:  '+object.get('presence')+'</li>'+'<li>'+'absence:  '+object.get('absence')+'</li>'+'<br>'+'<input type=\"radio\" value=\"1\" > Present</input>'+'<input type=\"radio\" value=\"-1\" >Absent</input>'+'<br><br>');
    }
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});
\t}
\t</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style type=\"text/css\">
  .buttonstart
            {
    width: 700px;
    height: 700px;
    background-image: url(";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/start.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
            .buttonpause
            {
           width: 300px;
    height: 300px;
    background-image: url(";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loading.gif"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
    animation-duration: 2s;
animation-direction: alternate;
                        border: none;
            }
lu{
   color: peru;

}

    
        </style>
      
</head>

<body>

    <div class=\"brand\">Nao Robot</div>


<h2>
<center>
    
     <h2 class=\"brand-before\">
                          
                        <button class=\"button\" id=\"buttonidentifiant\" onclick=\"find()\">Afficher</button>                       
                        <lu id=\"1234\">                       
                        </lu>
    
    
    </center>
</h2>
    <script src=";
        // line 103
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
        return "EspritNaoBundle:Cours:absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 103,  100 => 69,  88 => 60,  52 => 27,  44 => 22,  38 => 19,  19 => 2,);
    }
}
