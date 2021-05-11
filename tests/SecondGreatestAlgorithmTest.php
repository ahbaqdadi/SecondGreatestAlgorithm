<?php declare(strict_types=1);


use PHPUnit\Framework\TestCase;

final class SecondGreatestAlgorithmTest extends TestCase
{

    public function test_findByMagic_pass()
    {
        $this->assertEquals(SecondGreatestAlgorithm::findByMagic([18, 2, 3, 4, 12]), 12);
    }


    public function test_findByMagic_fail()
    {
        $this->assertNotEquals(SecondGreatestAlgorithm::findByMagic([18, 2, 3, 4, 12]), 18);
    }

    public function test_findByLoop_pass()
    {
        $this->assertEquals(SecondGreatestAlgorithm::findByLoop([18, 2, 3, 4, 12]), 12);
    }

    public function test_findByLoop_fail()
    {
        $this->assertNotEquals(SecondGreatestAlgorithm::findByLoop([18, 2, 3, 4, 12]), 18);
    }

}