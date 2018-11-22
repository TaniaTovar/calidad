<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Tania');
$consumer->setApellido('Tovar');
$result = $consumer->nombreCompleto();
$this->assertEquals('Tania Tovar', $result);
    }

    /**
    * Probar email válido
    */
    
}
