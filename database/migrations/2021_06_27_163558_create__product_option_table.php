<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductOption', function (Blueprint $table) {
            $table->integer("OptionID")->autoIncrement();
            $table->integer("ProductID");
            $table->string("OptionTitle");
            $table->string("OptionValue");
            $table->decimal('OptionPrice', $precision = 15, $scale = 3);

            $table->foreign('ProductID')->references('ProductID')->on('Product');
            
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
        Schema::dropIfExists('ProductOption');
    }
}
