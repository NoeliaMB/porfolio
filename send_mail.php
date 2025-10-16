<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "noelia.mb286@gmail.com";
    $subject = "Nuevo mensaje desde el formulario de contacto Noelia Dev";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $contactType = htmlspecialchars($_POST["contactType"]);
    $company = $_POST["company"] ?? "";
    $cif = $_POST["cif"] ?? "";
    $budget = $_POST["budget"] ?? "";
    $interest = $_POST["interest"] ?? "";
    $projectType = htmlspecialchars($_POST["projectType"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "
    Nombre: $name\n
    Email: $email\n
    Teléfono: $phone\n
    Tipo de contacto: $contactType\n
    Empresa: $company\n
    CIF: $cif\n
    Presupuesto: $budget\n
    Interés particular: $interest\n
    Tipo de proyecto: $projectType\n
    Mensaje: \n$message
    ";

    $headers = "From: $email";

    // Mensaje de prueba para no romper la demo:
    echo "✅ Demo funcionando: el formulario se envió (correo desactivado).";
}
?>