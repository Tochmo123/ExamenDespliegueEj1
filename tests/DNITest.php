<?php
use PHPUnit\Framework\TestCase;
use App\DNI;
class DNITest extends TestCase
{
    public function testgetDNIConLetra()
    {
        $actual = new DNI(49382877);
        $resultado = $actual->getDNIConLetra();
    }
}