<?php

use PHPUnit\Framework\TestCase;

use App\Adapter\XmlToJsonAdapter;
use App\Adapter\XMLVerwerker;
use App\Adapter\JSONVerwerker;

class AdapterTest extends TestCase
{
    public function testLeesJsonData()
    {
        $oudeVerwerker = new XMLVerwerker();
        $adapter = new XmlToJsonAdapter($oudeVerwerker);
        $jsonData = $adapter->leesJsonData();

        $this->assertIsArray($jsonData);
        $this->assertArrayHasKey('nieuweData', $jsonData);
        $this->assertJson($jsonData['nieuweData']);
    }

    public function testVerwerkJsonData()
    {
        $oudeVerwerker = new XMLVerwerker();
        $adapter = new XmlToJsonAdapter($oudeVerwerker);
        $jsonData = $adapter->leesJsonData();
        $resultaat = $adapter->verwerkJsonData($jsonData);

        $this->assertIsString($resultaat);
        $this->assertStringStartsWith('JSON-gegevens verwerkt:', $resultaat);
    }
}
