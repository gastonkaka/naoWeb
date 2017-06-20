<?php

/* EspritNaoBundle:Cours:Qcm.html.twig */
class __TwigTemplate_40716e0ef3546b6c68ff6bd8d906865c034bfd4867129daae7014970dff6c482 extends Twig_Template
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
<!DOCTYPE html>
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
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 19
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
   
</head>

<body>

    <div class=\"brand\">QCM</div>
  


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
                     
                    </div>
                      <ul class=\"nav navbar-nav\">
                    <li>
                       <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/qcm.jpg"), "html", null, true);
        echo "\">
                    </li>
                  
                </ul>
                    <h2 class=\"brand-before\">
                        <small>Question1 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion1\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion1\"/>
                       <br>
                        <small>choix1</small><input name=\"3\" type=\"text\" id=\"choix1question1\"/>
                       <br>
                        <small>choix2</small><input name=\"4\" type=\"text\" id=\"choix2question1\"/>
                    </h2>
                    <br><br>
                      <h2 class=\"brand-before\">
                        <small>Question2 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion2\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion2\"/>
                       <br>
                        <small>choix1</small><input name=\"3\" type=\"text\" id=\"choix1question2\"/>
                       <br>
                        <small>choix2</small><input name=\"4\" type=\"text\" id=\"choix2question2\"/>
                    </h2>
                       <br><br>
                      <h2 class=\"brand-before\">
                        <small>Question3 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion3\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion3\"/>
                       <br>
                        <small>choix1</small><input name=\"3\" type=\"text\" id=\"choix1question3\"/>
                       <br>
                        <small>choix2</small><input name=\"4\" type=\"text\" id=\"choix2question3\"/>
                    </h2>
                          <br><br>
                      <h2 class=\"brand-before\">
                        <small>Question4 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion4\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion4\"/>
                       <br>
                        <small>choix1</small><input name=\"3\" type=\"text\" id=\"choix1question4\"/>
                       <br>
                        <small>choix2</small><input name=\"4\" type=\"text\" id=\"choix2question4\"/>
                    </h2>
                             <br><br>
                      <h2 class=\"brand-before\">
                        <small>Question5 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion5\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion5\"/>
                       <br>
                        <small>choix1</small><input name=\"3\" type=\"text\" id=\"choix1question5\"/>
                       <br>
                        <small>choix2</small><input name=\"4\" type=\"text\" id=\"choix2question5\"/>
                    </h2>
                             
                             
                             <br><br>
                             
                             <center> <button onclick=\"addQcm()\">Valider</button> </center> 
               
                
                </div>
            </div>
        </div>

      

        
        </div>

    </div>
    <!-- /.container -->

     <script  type=\"text/javascript\">
function addQcm(){
Parse.initialize(\"Y7H2wMcj373iIX7xXKHrKA1BXcKqr0h9InfBbOJK\",\"NtSCfnrwszHoNyWpN70BMq6DU1wJCr3lkwuYd7Ct\");

var GameScore = Parse.Object.extend(\"questions\");

var gameScore = new GameScore();



";
        // line 155
        echo "gameScore.set(\"textquestion\",document.getElementById(\"textquestion1\").value);
gameScore.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion1\").value);
gameScore.set(\"choix1\",document.getElementById(\"choix1question1\").value);
gameScore.set(\"choix2\",document.getElementById(\"choix2question1\").value);


gameScore.save(null, {
  success: function(gameScore) {
  
    alert('New object created with objectId: ' + gameScore.id);
    return \$this->render('EspritNaoBundle:Cours:Qcm.html.twig', array('id' => 5));
  },
  error: function(gameScore, error) {

    alert('Failed to create new object, with error code: ' + error.message);
  }
});
}
   </script>

    <!-- jQuery -->
    <script  src=";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 179
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
        return "EspritNaoBundle:Cours:Qcm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 179,  206 => 176,  183 => 155,  88 => 62,  42 => 19,  36 => 16,  19 => 1,);
    }
}
