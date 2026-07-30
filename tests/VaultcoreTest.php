<?php
/**
 * Tests for VaultCore
 */

use PHPUnit\Framework\TestCase;
use Vaultcore\Vaultcore;

class VaultcoreTest extends TestCase {
    private Vaultcore $instance;

    protected function setUp(): void {
        $this->instance = new Vaultcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
