<?php

use PHPUnit\Framework\TestCase;

class SbTest extends TestCase {

    public function testNbPlaces(){
        $nbPlaces = 0;

        $this->assertSame(0, $nbPlaces);

        $nbPlaces = $nbPlaces + 1;

        $this->assertSame(2, $nbPlaces, 'Erreur a l\'incrementation');
    }
}

?>