<?php

/* EspritNaoBundle:Cours:Add.html.twig */
class __TwigTemplate_27198c780ba8d7da427a21fc000ee689275e7eb5b2fcec49e879e7f094a00c49 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
      
        
        
        

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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/business-casual.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
 <script  src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 8px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    background-color: #696969;
    color: white;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #1E90FF;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
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
        // line 83
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\" >Add Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ListCours");
        echo "\">show Lessons</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\">create Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("esprit_nao_enseignant");
        echo "\" >check presence  </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ip");
        echo "\" >Controle Nao</a>
                    </li>
                   
                </ul>
  
                    <div class=\"collapse navbar-collapse\">
                    <h2>
   <tr> <td><center>Matiere</center>   </td></tr>

<td><center> <input type=\"text\" id=\"theinput\"  placeholder=\"tapez le nom de matiere\"/></center></td>
<td><center><select name=\"thelist\" onChange=\"combo(this, 'theinput')\">
  <option>Francais</option>
  <option>Anglais</option>
  <option></option>
</select></center></td>
    <tr> <td><center>Description</center>   </td></tr>
<td><center> <input  name=\"1\" type=\"text\" id=\"description\"></center></td>
        <br>
        <br>
        <tr> <td><center>File</center></td></tr>
<tr><td> <center> <form > <a  href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\"><input name=\"2\" type=\"button\"  id=\"cree\" value=\"Créer Votre Cours Avec animation\"></a></form>
    <h5>ou choisir</h5>
    
    <input name=\"2\" type=\"file\" id=\"profilePhotoFileUpload\" autocomplete=\"on\">  </center>   </td> </tr>
      
</h2> 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
   <center> 
       <div class=\"navbar-header\">

           
    
 </nav> <div class=\"brand\">Partie QCM</div>
  


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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/qcm.jpg"), "html", null, true);
        echo "\">
                    </li>
                  
                </ul>
                    <h2 class=\"brand-before\">
                        <small>Question1 </small>
                        <br>
                        <input name=\"1\" type=\"text\" id=\"textquestion1\"/>
                        <br>
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion1\" required>
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
                        <small>choix correct</small><input name=\"2\" type=\"text\" id=\"choixcorrectquestion2\" autocomplete=\"on\"/> 
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




<div id=\"myProgress\">
  <div id=\"myBar\"></div>
</div>
                             
                             <br><br>
                             
                             <center> <button class=\"button\" onclick=\"addQcm()\">Valider</button> </center> 
               
                
                </div>
            </div>
        </div>

      

        
        </div>

    
                    

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
                    <h2 class=\"brand-before\">
                        <small>Welcome to </small>
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
   

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
    function combo(thelist, theinput) {
    theinput = document.getElementById(theinput);
    var idx = thelist.selectedIndex;
    var content = thelist.options[idx].innerHTML;
    theinput.value = content;
}
    </script>
    <script>
        function move() {
    var elem = document.getElementById(\"myBar\"); 
    var width = 0;
    var id = setInterval(frame, 150);
    function frame() {
        if (width == 100) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }
}
    </script>

        <script  type=\"text/javascript\">
function addQcm(){
 
      if ( document.getElementById(\"description\").value == \"\")
    {
      alert(\"Le champ Description est obligatoire \"  );
      document.getElementById(\"description\").focus();
      return false;
    }
     if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ MATIERE est obligatoire  \"    );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"profilePhotoFileUpload\").value == \"\")
    {
      alert(\"veuillez inserer FILE\");
      document.getElementById(\"profilePhotoFileUpload\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
       if ( document.getElementById(\"theinput\").value == \"\")
    {
      alert(\"Le champ suivant est obligatoire : \" +  document.getElementById(\"theinput\").id );
      document.getElementById(\"theinput\").focus();
      return false;
    }
    else{
        
       move();
       
 Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");

var GameScore1 = Parse.Object.extend(\"questions\");
var gameScore1 = new GameScore1();
var GameScore2 = Parse.Object.extend(\"questions\");
var gameScore2 = new GameScore2();
var GameScore3 = Parse.Object.extend(\"questions\");
var gameScore3 = new GameScore3();
var GameScore4 = Parse.Object.extend(\"questions\");
var gameScore4 = new GameScore4();
var GameScore5 = Parse.Object.extend(\"questions\");
var gameScore5 = new GameScore5();
var GameScore33 = Parse.Object.extend(\"cours\");
var gameScore33 = new GameScore33();

//var GameScore34 = Parse.Object.extend(\"matiere\");
//var gameScore34 = new GameScore34();


var fileUploadControl =  document.getElementById(\"profilePhotoFileUpload\");

 var file = fileUploadControl.files[0];
 var name = file.name;


var parseFile = new Parse.File(name, file);

gameScore33.set(\"nommatiere\",document.getElementById(\"theinput\").value);
gameScore33.set(\"file\",parseFile);
";
        // line 485
        echo "gameScore33.set(\"description\",document.getElementById(\"description\").value);
gameScore33.save(null, {
  success: function(gameScore33) {
  
    alert('New object created with objectId: ' + gameScore33.id);
    var ff= gameScore33.id;
    
    ";
        // line 493
        echo "gameScore1.set(\"textquestion\",document.getElementById(\"textquestion1\").value);
gameScore1.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion1\").value);
gameScore1.set(\"choix1\",document.getElementById(\"choix1question1\").value);
gameScore1.set(\"choix2\",document.getElementById(\"choix2question1\").value);
gameScore1.set(\"idcour\",gameScore33);
gameScore1.save();


gameScore2.set(\"textquestion\",document.getElementById(\"textquestion2\").value);
gameScore2.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion2\").value);
gameScore2.set(\"choix1\",document.getElementById(\"choix1question2\").value);
gameScore2.set(\"choix2\",document.getElementById(\"choix2question2\").value);
gameScore3.set(\"textquestion\",document.getElementById(\"textquestion3\").value);
gameScore3.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion3\").value);
gameScore3.set(\"choix1\",document.getElementById(\"choix1question3\").value);
gameScore3.set(\"choix2\",document.getElementById(\"choix2question3\").value);
gameScore4.set(\"textquestion\",document.getElementById(\"textquestion4\").value);
gameScore4.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion4\").value);
gameScore4.set(\"choix1\",document.getElementById(\"choix1question4\").value);
gameScore4.set(\"choix2\",document.getElementById(\"choix2question4\").value);
gameScore5.set(\"textquestion\",document.getElementById(\"textquestion5\").value);
gameScore5.set(\"reponsecorrect\",document.getElementById(\"choixcorrectquestion5\").value);
gameScore5.set(\"choix1\",document.getElementById(\"choix1question5\").value);
gameScore5.set(\"choix2\",document.getElementById(\"choix2question5\").value);


gameScore2.set(\"idcour\",gameScore33);
gameScore2.save();
gameScore3.set(\"idcour\",gameScore33);
gameScore3.save();
gameScore4.set(\"idcour\",gameScore33);
gameScore4.save();
gameScore5.set(\"idcour\",gameScore33);
gameScore5.save();
  },
  error: function(gameScore33, error) {

    alert('Failed to create new object, with error code: ' + error.message);
  }
});




}
}
   </script>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:Add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 493,  536 => 485,  399 => 350,  202 => 156,  158 => 115,  135 => 95,  129 => 92,  123 => 89,  117 => 86,  111 => 83,  53 => 28,  45 => 23,  39 => 20,  19 => 2,);
    }
}
