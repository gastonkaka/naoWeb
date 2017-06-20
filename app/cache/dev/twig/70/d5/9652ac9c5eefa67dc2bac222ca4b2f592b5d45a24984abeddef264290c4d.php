<?php

/* EspritNaoBundle:Cours:ip.html.twig */
class __TwigTemplate_70d59652ac9c5eefa67dc2bac222ca4b2f592b5d45a24984abeddef264290c4d extends Twig_Template
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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styleip.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
 <script  src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
 <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
 

        <script  type = \"text/javascript\" >
  function getip(){
            var str1 = \"http://nao:nao@\";
\t\t\t
var str2 = document.getElementById(\"ip\").value;

var str3 = \"/libs/qimessaging/1.0/qimessaging.js\";
var res = str1.concat(str2,str3);
var my_awesome_script = document.createElement('script');
my_awesome_script.setAttribute('src',res);

document.head.appendChild(my_awesome_script);
}
            /*
document.getElementById('script').src(\"\")
            */
        </script>
        <script>
    var textToSpeech;
    var session;
var asr; 

 var ipadresse;

 
 var etudiant=new Array();
 var nbetudiant;
 var idcour;

 
 
 function find (){
 var str2 = document.getElementById(\"ip\").value;
 if(str2==\"\"){
 alert(\"would you please enter your IP adress\");
}
else{
 //getip();
  //connect();
 Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");
var  rs= Parse.Object.extend(\"cours\");
var query = new Parse.Query(rs);

query.find({
  success: function(results) {
      document.getElementById(\"buttonidentifiant\").style.visibility = \"hidden\"; 
       document.getElementById(\"ip\").style.visibility = \"hidden\";
    
\tfor (var i = 0; i < results.length; i++) { 
      var texteLien = \"Voir\";      
      var object = results[i];
      var cours =object.get('description');
      idcour=object.id;
      
      document.getElementById(\"1234\").innerHTML=(document.getElementById(\"1234\").innerHTML+cours+'<br>'+'<button onclick=\"speak(\\''+cours+'\\')\">Start the lesson</button>'+'<button id=\"'+idcour+'\">QCM Question</button>'+'<button onclick=\"touch()\">True,False</button>' +'<br><br><br>');
      
      var GameScore = Parse.Object.extend(\"questions\");
var query = new Parse.Query(GameScore);
query.equalTo(\"idcour\", object);
query.first({
  success: function(object) {
    // Successfully retrieved the object.
    var idButton=object.get('idcour').id;
 var textquestion=object.get('textquestion');
   var reponsecorrect=object.get('reponsecorrect');
   var choix1=object.get('choix1');
   var choix2=object.get('choix2');
        
        \$('#'+idButton).on('click',function (){
       interraction(textquestion,reponsecorrect,choix1,choix2);
   });

   
     
   
  },
  error: function(error) {
    alert(\"Error: \" + error.code + \" \" + error.message);
  }
});
      
      
      

        
        }
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});



//etudiant
var  etud= Parse.Object.extend(\"etudiant\");
var queryetud = new Parse.Query(etud);

queryetud.find({
  success: function(results) {
      
      nbetudiant=results.length;
\tfor (var i = 0; i < results.length; i++) {
       var object = results[i];
       etudiant[i]=object.get('nom')+\" \"+object.get('prenom');     
   
        
        }
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});
\t}
\t}
 
 
    function connect()
    {
     
      ipadresse = document.getElementById(\"ip\").value;   
      session = new QiSession(ipadresse);
      session.socket().on('connect', function()
      {
        console.log(\"QiSession connected!\");
      }).on('disconnect', function(){
        console.log(\"QiSession disconnect\");
      });
    }

    function speak(cours)
    {
        console.log(cours);
      session.service(\"ALAnimatedSpeech\").done(function(tts)
      {
        tts.say(cours);
       
      });
  
    }

    function interraction(txt,correct,pta,ptb)
    {
\tconsole.log(txt+correct);
        
        session.service(\"ALTextToSpeech\").done(function(tts)
      {
        tts.say(txt);
      });

window.setTimeout(SpeechRecognition, 5000);
function SpeechRecognition(){
\tsession.service(\"ALSpeechRecognition\").done(function (asr) {

\tvocabulary = [pta,pta,correct];
\tasr.setVocabulary(vocabulary, false);
\tasr.subscribe(\"Test_ASR\");

  session.service(\"ALMemory\").done(function (ALMemory) {
ALMemory.subscriber(\"WordRecognized\").done(function (subscriber){
    subscriber.signal.connect(function (words) {


session.service(\"ALMemory\").done(function(subscriber)
      {

 session.service(\"ALTextToSpeech\").done(function(tts)
      {
          if(words[0]==correct){
              
            tts.say(\"Great Work !!\");  
          }
          else
               if(words[0]==pta)
                   {
              
            tts.say(\"Bad Answer!!\");  
          }
                    else
               if(words[0]==ptb)
                   {
              
            tts.say(\"Bad Answer!!\");  
          }

      });
asr.unsubscribe(\"Test_ASR\");


      });



    });
  });
});
});\t
    }

   
}



function unsbscribe()
{
session.service(\"ALSpeechRecognition\").done(function (asr) {


asr.unsubscribe(\"Test_ASR\");

});\t
}



function touch()
{


     session.service(\"ALAnimatedSpeech\").done(function(tts)
      {
        tts.say(\"The product of two positive numbers is NOT positive.\");
      });


 session.service(\"ALMemory\").done(function(ALMemory)
      {
//right hand
 ALMemory.subscriber(\"HandRightBackTouched\").done(function (subscriber) {
    subscriber.signal.connect(function (state) {


session.service(\"ALTextToSpeech\").done(function(tts)
      {
        tts.say(\"Bad choice !! The product of two positive numbers is positive !! \");
      });
   

    });
  });
//left hand
 ALMemory.subscriber(\"HandLeftBackTouched\").done(function (left) {
    left.signal.connect(function (state) {


session.service(\"ALTextToSpeech\").done(function(say)
      {
        say.say(\"you such a genius\");
      });
   

    });
  });


});\t
    }
    
    
    
    function presence(){
        
        alert(nbetudiant);
     
           
          
      session.service(\"ALTextToSpeech\").done(function(tts)
      {
          for (var i = 0; i < nbetudiant; i++){
              
          
        tts.say(etudiant[i]);
        
        } 
      });
           
    
           
           
       }
        
        
        
    
    

    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

      
</head>

<body>

    <div class=\"brand\">Nao Robot</div>

    <br><br>
    
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
               <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 341
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\" >Add Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 344
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ListCours");
        echo "\">show Lessons</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\">create Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 350
        echo $this->env->getExtension('routing')->getPath("esprit_nao_enseignant");
        echo "\" >check presence  </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 353
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ip");
        echo "\" >Controle Nao</a>
                    </li>
                   
                </ul>
            </div>
    
    <br><br>
 <!--   <button class=\"button\"  onclick=\"presence()\">Ask for Presence</button> -->
    
    
<h2>
<center>
    
     <h2 class=\"brand-before\">
                      
                        <table>
\t\t\t\t\t\t<tr>
                        <td><input name=\"2\" type=\"text\" id=\"ip\" placeholder='enter nao IP'/></td>
                        <td><button class=\"button\" id=\"buttonidentifiant\" onclick=\"find()\">Connect</button></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
                        <br>
                        <p id=\"1234\"></p>
                        
     </h2>
    </center>
</h2>
    <script src=";
        // line 380
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
        return "EspritNaoBundle:Cours:ip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 380,  395 => 353,  389 => 350,  383 => 347,  377 => 344,  371 => 341,  55 => 28,  47 => 23,  41 => 20,  22 => 3,  19 => 1,);
    }
}
