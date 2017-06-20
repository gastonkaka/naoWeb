<?php

/* EspritNaoBundle:Cours:naocontrol.html.twig */
class __TwigTemplate_ede8799808b2c10bd87134ed1336a59e9816acdd65420b1af709a1a149e47634 extends Twig_Template
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
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <script type = \"text/javascript\" src = \"http://nao:nao@192.168.3.88/libs/qimessaging/1.0/qimessaging.js\"></script>
     <!--   <script type = \"text/javascript\" src= \"script/websocket.js\"> -->
    </head>
    <body onload = \"connect()\">
    <input type=\"button\" onclick= \"speak()\" value = \"speak\"></button>
        <input type = \"button\" onclick = \"interraction()\" value = \"interraction\"></button>
    <input type=\"button\" onclick= \"touch()\" value = \"handtouch\"></button>
<input type=\"button\" onclick= \"unbscribe()\" value = \"unsbscribe\"></button>
    <script>
    var textToSpeech;
    var session;
var asr; 

 
    function connect()
    {
      session = new QiSession('192.168.3.88');
      session.socket().on('connect', function()
      {
        console.log(\"QiSession connected!\");
      }).on('disconnect', function(){
        console.log(\"QiSession disconnect\");
      });
    }

    function speak()
    {
      session.service(\"ALAnimatedSpeech\").done(function(tts)
      {
        tts.say(\"^startTag(hello) Hi\");
      });
    }

    function interraction()
    {

\tsession.service(\"ALSpeechRecognition\").done(function (asr) {

\tvocabulary = [\"yes\", \"no\", \"please\"];
\tasr.setVocabulary(vocabulary, false);
\tasr.subscribe(\"Test_ASR\");

  session.service(\"ALMemory\").done(function (ALMemory) {
ALMemory.subscriber(\"WordRecognized\").done(function (subscriber){
    subscriber.signal.connect(function (words) {


session.service(\"ALMemory\").done(function(subscriber)
      {

 session.service(\"ALTextToSpeech\").done(function(tts)
      {
tts.say(words[0]);

      });
asr.unsubscribe(\"Test_ASR\");


      });



    });
  });
});
});\t
    }




function unsbscribe()
{
session.service(\"ALSpeechRecognition\").done(function (asr) {


asr.unsubscribe(\"Test_ASR\");

});\t
}



function touch()
{


 session.service(\"ALMemory\").done(function(ALMemory)
      {
//right hand
 ALMemory.subscriber(\"HandRightBackTouched\").done(function (subscriber) {
    subscriber.signal.connect(function (state) {


session.service(\"ALTextToSpeech\").done(function(tts)
      {
        tts.say(\"Right\");
      });
   

    });
  });
//left hand
 ALMemory.subscriber(\"HandLeftBackTouched\").done(function (left) {
    left.signal.connect(function (state) {


session.service(\"ALTextToSpeech\").done(function(say)
      {
        say.say(\"Left\");
      });
   

    });
  });


});\t
    }

    </script>
    </body>
    </html>




";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:naocontrol.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
