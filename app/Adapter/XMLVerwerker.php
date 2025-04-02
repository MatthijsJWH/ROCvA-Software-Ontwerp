<?php

namespace App\Adapter;

class XMLVerwerker {
    public function leesXmlData(): array {
        // Simulatie van het lezen van XML-gegevens
        return ['oudeData' => '<data><naam>voorbeeld</naam></data>'];
    }

    public function verwerkXmlData(array $xmlData) {
        // Simulatie van het verwerken van XML-gegevens
        return 'XML-gegevens verwerkt: ' . $xmlData['oudeData'];
    }
}
