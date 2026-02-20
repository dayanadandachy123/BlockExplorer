<?php
/**
 * Tests for BlockExplorer
 */

use PHPUnit\Framework\TestCase;
use Blockexplorer\Blockexplorer;

class BlockexplorerTest extends TestCase {
    private Blockexplorer $instance;

    protected function setUp(): void {
        $this->instance = new Blockexplorer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockexplorer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
