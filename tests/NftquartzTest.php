<?php
/**
 * Tests for NftQuartz
 */

use PHPUnit\Framework\TestCase;
use Nftquartz\Nftquartz;

class NftquartzTest extends TestCase {
    private Nftquartz $instance;

    protected function setUp(): void {
        $this->instance = new Nftquartz(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftquartz::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
