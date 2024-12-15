<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('host_id')->constrained('hosts');
            $table->string('place_type');
            $table->string('title');
            $table->text('description');
            $table->string('listing_type');
            $table->string('bedrooms')->nullable();
            $table->string('guests')->nullable();
            $table->string('beds')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('rooms')->nullable();
            $table->string('size')->nullable();
            $table->string('measure_unit')->nullable();
            $table->string('affiliate_booking_link')->nullable();
            $table->text('amenities_description')->nullable();
            $table->string('amenities')->nullable();
            $table->string('phone')->nullable();
            $table->text('price_from')->nullable();
            $table->text('price_to')->nullable();
            $table->text('from_to_price')->nullable();
            $table->string('one_night_price')->nullable();
            $table->string('after_price_label')->nullable();
            $table->string('weekend_price_per_day')->nullable();
            $table->string('weekend_days')->nullable();
            $table->string('weekly_price_per_day')->nullable();
            $table->string('monthly_price_per_day')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_price')->nullable();
            $table->string('service_fee_type')->nullable();
            $table->enum('additional_guests',['yes','no'])->default('no');
            $table->string('price_per_guest')->nullable();
            $table->string('number_of_guests')->nullable();
            $table->string('cleaning_fee')->nullable();
            $table->string('cleaning_fee_type')->nullable();
            $table->string('city_fee')->nullable();
            $table->string('city_fee_type')->nullable();
            $table->string('security_deposit')->nullable();
            $table->text('images');
            $table->enum('smoking_allowed',['yes','no'])->default('no');
            $table->enum('pets_allowed',['yes','no'])->default('no');
            $table->enum('party_allowed',['yes','no'])->default('no');
            $table->enum('children_allowed',['yes','no'])->default('no');
            $table->string('fees')->nullable();
            $table->string('tax')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('location')->nullable();
            $table->text('cancellation_policy')->nullable();
            $table->string('min_stay')->nullable();
            $table->string('default_price')->nullable();
            $table->string('default_min_stay')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
