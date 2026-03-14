<?php
/**
 * Tests for MqttBrokerHub
 */

use PHPUnit\Framework\TestCase;
use Mqttbrokerhub\Mqttbrokerhub;

class MqttbrokerhubTest extends TestCase {
    private Mqttbrokerhub $instance;

    protected function setUp(): void {
        $this->instance = new Mqttbrokerhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mqttbrokerhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
