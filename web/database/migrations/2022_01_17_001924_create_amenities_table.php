<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Amenity;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $amenities =  array(
            [
                'name' => 'Acceso discapacitados',
            ],
            [
                'name' => 'Alberca',
            ],
            [
                'name' => 'Amueblado',
            ],
            [
                'name' => 'Área de lavado',
            ],
            [
                'name' => 'Cisterna',
            ],
            [
                'name' => 'Cocina integral',
            ],
            [
                'name' => 'Elevador',
            ],
            [
                'name' => 'Seguridad privada',
            ],
            [
                'name' => 'Terraza',
            ]
        );

        foreach ($amenities as $item){
            $amenity = new Amenity();
            $amenity->name =$item['name'];
            $amenity->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenities');
    }
}
