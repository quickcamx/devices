<?php

use function Pest\Laravel\actingAs;
use Sfolador\Devices\Tests\TestSupport\Models\TestNotifiable;
use Sfolador\Devices\Tests\TestSupport\TestCase;

uses(TestCase::class)->in(__DIR__);

function loginAsUser(TestNotifiable $user = null): TestNotifiable
{
    /** @noinspection CallableParameterUseCaseInTypeContextInspection */
    $user = $user ?? TestNotifiable::factory()->create();
    actingAs($user);

    return $user;
}
