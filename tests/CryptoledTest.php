<?php
/**
 * Tests for CryptoLed
 */

use PHPUnit\Framework\TestCase;
use Cryptoled\Cryptoled;

class CryptoledTest extends TestCase {
    private Cryptoled $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoled(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoled::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
