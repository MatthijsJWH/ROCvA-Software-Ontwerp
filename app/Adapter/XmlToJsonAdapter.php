<?php

namespace App\Adapter;
use App\Adapter\JSONVerwerker;
use App\Adapter\XMLVerwerker;

class XmlToJsonAdapter implements JSONVerwerker {
    // Implementeer hier de interface JSONVerwerker
    // Deze adapter maakt gebruik van de XMLVerwerker om XML-gegevens te lezen en te verwerken
    // en biedt een JSON-interface aan voor de rest van de applicatie.
    // Dit is een voorbeeld van een adapterpatroon waarbij we een bestaande klasse (XMLVerwerker)
    // aanpassen om een andere interface (JSONVerwerker) te ondersteunen.
    // Dit maakt het mogelijk om de XMLVerwerker te gebruiken in een context waar JSON-gegevens vereist zijn.

    // Deze klasse heeft een attribuut dat een instantie van XMLVerwerker bevat.
    // Dit is de klasse die we willen adapteren.
    // We gebruiken deze instantie om de XML-gegevens te lezen en te verwerken.
    // Deze moet dus ook ook aangemeld zijn in de constructor.
    // De adapter zelf implementeert de interface JSONVerwerker, zodat we de JSON-gegevens kunnen lezen en verwerken.

}
