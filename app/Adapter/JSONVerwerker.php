<?php

namespace App\Adapter;

interface JSONVerwerker {
    public function leesJsonData(): array;
    public function verwerkJsonData(array $jsonData): string;
}
