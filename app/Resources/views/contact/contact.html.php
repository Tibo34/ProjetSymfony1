<?php
if(isset($confirmation))
{
    if($confirmation===1){
        $text='message envoyé';
    }
    else{
        $text=$confirmation;
    }
}
else{
   $text="";
}

if(isset($message)){
    $mess=$message;
}
else{
    $mess="";
}

if(isset($mail)){
    $adress=array_keys($mail)[0];
}
else{
    $adress="";
}

?>
<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8"/>
            <title>Contact</title>
        </head>
        <body>
        <form action="contact" method="post">
            <div>
                <label for="identite"> Nom  :</label>
                <input type="text" id="identite" name="identite" size ="40">
            </div> 
            <div>
                <label for="message">Message  :</label>
                <textarea type="text" id="message" name="message" rows="4" cols="40"></textarea>
            </div> 
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>           
        </form>

        <div>
        <p><?= var_dump($text) ?></p>
        <p><?= var_dump($mess) ?> </p>
        <p> <?= var_dump($adress) ?> </p>
       
        </div>
        </body>
    </html>