<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'npm' => $this-> faker->numberBetween(187006097, 187006117  ),
            'name' => $this-> faker->name,
            'class' => $this-> faker->randomElement(['a','b','c']),
            'organization' => $this-> faker->randomElement(['Himpunan','BEM Fakultas','BEM Universitas']),
            'alamat' => $this-> faker->address,
        ];
    }
}
