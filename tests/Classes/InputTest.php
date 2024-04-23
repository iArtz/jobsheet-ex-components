<?php

declare(strict_types=1);

namespace Jobsheet\Ex\Tests\Classes;

use PHPUnit\Framework\TestCase;
use Jobsheet\Ex\Classes\Input;

final class InputTest extends TestCase
{
    private Input $input;

    public function setup(): void
    {
        $this->input = new Input('test', 'Test');
    }

    public function testCanBeCreatedInput(): void
    {
        $this->assertInstanceOf(Input::class, $this->input);
    }

    public function testCanBeInstanceOfInput(): void
    {
        $this->assertInstanceOf(Input::class, $this->input);
    }

    public function testInstanceObjectProperty(): void
    {
        $this->assertObjectHasProperty('title', $this->input);
        $this->assertObjectHasProperty('name', $this->input);
        $this->assertObjectHasProperty('data', $this->input);
        $this->assertObjectHasProperty('type', $this->input);
    }

    public function testGetName(): void
    {
        $this->assertEquals($this->input->getName(), 'test');
    }
}
