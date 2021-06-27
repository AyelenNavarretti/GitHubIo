<?php
$para  = 'anahiayelenn@gmail.com';

// Asunto
$titulo = 'Pedido de presupuesto';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pedido = $_POST['pedido'];



//$concatenacion = '<p id="saludo">Hola '.$nombre.'</p>';
// Cuerpo o mensaje
$mensaje = '
<html>
<table style="background: linear-gradient(to right, #25c481, #25b7c4);color:#ffffff;border-bottom:#ffffff;font: normal 15px arial, sans-serif;">
        <tr>
            <th colspan="2" style="padding: 20px 15px;">PEDIDO DE PRESUPUESTO</th>
        </tr>

        <tr>
            <th style="padding: 20px 15px;">NOMBRE</th>
            <td style="padding: 20px 15px;">'.$nombre.'</td>
        </tr>

        <tr>
            <th style="padding: 20px 15px;">E-MAIL</th>
            <td style="padding: 20px 15px;">'.$email.'</td>
        </tr>

        <tr>
            <th style="padding: 20px 15px;">DETALLE PEDIDO</th>
            <td style="padding: 20px 15px;">'.$pedido.'</td>
        </tr>
    </table>
</html>
';

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Pedido <pedido@example.com>' . "\r\n";
$cabeceras .= 'Cc: pedido@example.com>' . "\r\n";
$cabeceras .= 'Bcc: pedido@example.com>' . "\r\n";

// enviamos el correo!
mail($para, $titulo, $mensaje, $cabeceras);
?>