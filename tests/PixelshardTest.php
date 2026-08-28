<?php
/**
 * Tests for PixelShard
 */

use PHPUnit\Framework\TestCase;
use Pixelshard\Pixelshard;

class PixelshardTest extends TestCase {
    private Pixelshard $instance;

    protected function setUp(): void {
        $this->instance = new Pixelshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
