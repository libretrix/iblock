<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Tests;

use PHPUnit\Framework\TestCase;

final class BootstrapTest extends TestCase
{
    public function testEnvironmentIsConfigured(): void
    {
        $this->assertTrue(true);
    }

    public function testAutoloadingWorks(): void
    {
        $this->assertTrue(class_exists(TestCase::class));
    }
}