<?php

require 'vendor/autoload.php'; // Assicurati di avere installata la libreria Yaml di Symfony

$inputYaml = "
    - nome: emma
      cognome: pilotto
      telefono:
        - 3405623987
        - 3406952456
        - 3659841256
    - nome: daniel
      cognome: targa
      telefono:
        - 3405623983
        - 3406952452
        - 3659841251
";

$yamlData = Symfony\Component\Yaml\Yaml::parse($inputYaml);

// Traduci in JSON
$jsonOutput = json_encode($yamlData, JSON_PRETTY_PRINT);
file_put_contents('output.json', $jsonOutput);

// Traduci in XML
$xml = new SimpleXMLElement('<root></root>');// Questa istruzione crea un nuovo oggetto SimpleXMLElement e lo inizializza con il documento XML vuoto specificato. L'oggetto $xml conterrà quindi il documento XML con l'elemento radice "root" pronto per essere popolato con altri elementi e dati XML.
/*foreach ($yamlData as $itemData) {
    $itemElement = $xml->addChild('item');
    foreach ($itemData as $field => $value) {
       
    }
}*/
file_put_contents('output.xml', $xml->asXML());

echo "Traduzione completata. I dati sono stati salvati nei file output.json e output.xml.";
?>
