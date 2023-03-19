<?php

use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Foundation\Testing\RefreshDatabase;
use QRFeedz\Cube\Models\Affiliate;
use QRFeedz\Cube\Models\Country;
use QRFeedz\Cube\Models\User;

uses(RefreshDatabase::class, InteractsWithDatabase::class, InteractsWithViews::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->country = Country::factory()->create();
});

it('can create affiliate', function () {
    $attributes = [
        'name' => 'Test Affiliate',
        'address' => '123 Test St',
        'postal_code' => '12345',
        'locality' => 'Testville',
        'user_id' => $this->user->id,
        'country_id' => $this->country->id,
    ];

    $affiliate = Affiliate::create($attributes);

    $this->assertDatabaseHas('affiliates', $attributes);
});

it('can read affiliate', function () {
    $affiliate = Affiliate::factory()->create();

    $this->assertDatabaseHas('affiliates', ['id' => $affiliate->id]);
});

it('can update affiliate', function () {
    $affiliate = Affiliate::factory()->create();

    $newAttributes = [
        'name' => 'Updated Affiliate',
        'address' => '321 Test St',
        'postal_code' => '54321',
        'locality' => 'Updatedville',
        'user_id' => $this->user->id,
        'country_id' => $this->country->id,
    ];

    $affiliate->update($newAttributes);

    $this->assertDatabaseHas('affiliates', $newAttributes);
});

it('can delete affiliate', function () {
    $affiliate = Affiliate::factory()->create();

    $affiliate->delete();

    $this->assertSoftDeleted('affiliates', ['id' => $affiliate->id]);
});

it('can restore affiliate', function () {
    $affiliate = Affiliate::factory()->create();

    $affiliate->delete();

    $affiliate->restore();

    $this->assertDatabaseHas('affiliates', ['id' => $affiliate->id, 'deleted_at' => null]);
});

it('can force delete affiliate', function () {
    $affiliate = Affiliate::factory()->create();

    $affiliate->forceDelete();

    $this->assertDatabaseMissing('affiliates', ['id' => $affiliate->id, 'deleted_at' => null]);
});
