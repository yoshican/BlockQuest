<?php
/**
 * Tests for BlockQuest
 */

use PHPUnit\Framework\TestCase;
use Blockquest\Blockquest;

class BlockquestTest extends TestCase {
    private Blockquest $instance;

    protected function setUp(): void {
        $this->instance = new Blockquest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockquest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
