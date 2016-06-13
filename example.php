<?php

require 'vendor/autoload.php';

$easybill = new YayDigital\Easybill\Easybill('8awkgm85qqdrpihm5ul02kcxjx8o5t99ccccwkvb0rozgfd86a4ofaqw5uimdcsg');

// var_dump($easybill->documents()->all(['type' => 'INVOICE', 'is_draft' => 0, 'is_archive' => 0, 'number' => '16-21001-001']));

// Vorhandene Zahlungen auflisten
// var_dump($easybill->documentPayments()->all());

// Zahlung registrieren
$x = $easybill->documentPayments()->create([
    'amount' => '1200',
    'document_id' => '85049690',
    'notice' => 'Das ist ein Test.',
    'type' => 'Überweisung',
    'payment_at' => date('Y-m-d'),
    'paid' => true
]);

var_dump($x);