<?php

$SmartPhone = [
    0 => [
        'SmartPhone' => 'Iphone',
    ],
    1 => [
        'SmartPhone' => 'Samsung',
    ],
    2 => [
        'SmartPhone' => 'Oppo',
    ]
];

$SmartPhone = new ArrayObject( $SmartPhone );

$object = $SmartPhone->getIterator();

echo 'Index sekarang : ' . $object->current()['SmartPhone'] . '<br/>';

$object->next();

echo 'Maju satu index : ' . $object->current()['SmartPhone'] . '<br/>';


$object->rewind();

echo 'Setelah di reset : ' . $object->current()['SmartPhone'] . '<br/>';
?>