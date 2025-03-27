<?php

namespace App\Observer;

interface Observer {
    public function update(string $message): void;
}
