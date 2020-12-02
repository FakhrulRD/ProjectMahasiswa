<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this-> faker->numberBetween(123456789, 987654321),
            'nmk' => $this-> faker->numberBetween(001, 100),
            'name' => $this-> faker->name,
            'matkul' => $this-> faker->randomElement(['PWeb','MPPL','PTI','PABP','PIS']),
            'alamat' => $this-> faker->address,
        ];
    }
}
