<?php
// foreach($_POST as $nombre_campo => $valor){
//     $asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
//     eval($asignacion);
// }

function redirect($url){
    //header('location:'.$params);
    echo `<script> window.location.replace("`.$url.`"); <script>`;
    exit;
}


//CONFIG
$mailAdmin = "info@netmining.ar";
$nombreAdmin = "Net Mining";
$asuntoPCliente = "Hemos recibido tu mensaje";

//RECAPTCHA
$secretKey = '6LeFoVobAAAAAPJCm7eiidChrmmbXc_bkrHOVlV8';
if(isset($_POST["g-recaptcha-response"])) {
    $captcha = $_POST["g-recaptcha-response"];
}

if (!$captcha || empty($captcha)) {
    redirect('../index_new.php#contacto?recaptcha=fail');
}

$ip = $_SERVER["REMOTE_ADDR"];

$urlCaptcha = 'https://www.google.com.ar/recaptcha/api/siteverify?secret='.urlencode($captcha).'&response='.urlencode($captcha);
$responseCaptcha = file_get_contents($urlCaptcha);
$responseKeys = json_decode($responseCaptcha, true);

if(!isset($responseKeys["success"])){
    redirect('../index_new.php#contacto?recaptcha=fail');
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];



//CONEXION A BASE
$useDataBase = false;

if ($useDataBase){
    $servername = "mysql.netmining.ar";
    $username = "netminingql";
    $password = "";
    $dbname = "netminingdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //FECHA
    date_default_timezone_get('	America/Argentina/Buenos_Aires');
    $fecha = date("d-m-Y");
    
    
    //prepara insert
    $queryy = "INSERT INTO mensajes (nombre, asunto, mail, mensaje, fecha) VALUES('".$nombre."', '".$asunto."', '"."$email"."', '".$mensaje."', '".$fecha."')";
    
    $conn->query($queryy);
    $conn->close();
}


//ENVIO DE MAIL
//MAIL A USUARIO
$remitente = "MIME-Version: 1.0" . "\r\n";
$remitente .= "Content-type:text/html;charset=UTF-8"."\r\n";
$remitente .= "From: ".$nombreAdmin." <".$mailAdmin.">"."\r\n";
$remitente .= "Reply-To: ".$mailAdmin."\r\n";

//MAQUETADO MAIL
$cuerpo = '<html>
<body style="background: #070707; color: #fff; font-family: Calibri, sans-serif">
    <div style="width: 100%; text-align: center; margin-top:4em; padding: 50px;">
        <img src="http://netmining.ar/img/LogoFull.png" style="max-width: 100px;">
        <h1>Gracias por contactarte!</h1>
        <h3 style="margin-top: 2em;">Tu mensaje ha sido recibido y será contestado a la brevedad</h3>
        <p>Gracias por ponerte en contacto!</p>
    </div>
</body>
</html>';

mail($email, $asuntoPCliente, $cuerpo, $remitente);


//MAIL A ADMIN
$asuntoAdmin = 'Contacto: Nuevo mensaje';

$mensajeParaAdmin = '<html>
<body style="background: #626262; color: #040404; font-family: Calibri, sans-serif">
    <div style="width: 100%; text-align: center; margin-top:4em; padding: 50px;">
        <img src="http://netmining.ar/img/LogoFull.png" style="max-width: 100px;">
        <h1>Mensaje recibido por la página</h1>
        <div style="width: 80%; padding: 30px; border: 2px solid #000; background: #fff; margin: 0 auto;">
        <h3 style="margin-top: 2em;">de: ';
        
$mensajeParaAdmin .= $nombre;

$mensajeParaAdmin .= '</h3>
        <p> <b>Asunto:</b> ';
        
$mensajeParaAdmin .= $asunto;

$mensajeParaAdmin .= '</p> <b>Mensaje:</b> ';

$mensajeParaAdmin .= $mensaje;

$mensajeParaAdmin .= '</p>
    <h3> Responder a: ';

$mensajeParaAdmin .= $email;

$mensajeParaAdmin .= '</h3></div></div></body></html>';

$remitenteParaAdmin = "MIME-Version: 1.0" . "\r\n";
$remitenteParaAdmin .= "Content-type:text/html;charset=UTF-8"."\r\n";
$remitenteParaAdmin .= "From: Net Mining Arg <".$mailAdmin.">"."\r\n";
$remitenteParaAdmin .= "Reply-To: ".$email."\r\n";

//finalAdminMail sirve si el admin decide recibir los mails en una casilla diferente
$finalAdminMail = $mailAdmin;

mail($finalAdminMail, $asuntoAdmin, $mensajeParaAdmin, $remitenteParaAdmin);

redirect('../index_new.php#contacto?envio=ok');
?>

    