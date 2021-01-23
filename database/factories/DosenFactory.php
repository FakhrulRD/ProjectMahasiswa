<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Support\Str;
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
            'matkul_id' => $this->faker->randomElement(['1','2','3','4','5']),
            'nip' => $this-> faker->numberBetween(123456789, 987654321),
            'nama' => $this-> faker->nama,
            'slug' => Str::slug($this->faker->sentence()),
            'alamat' => $this-> faker->address,
        ];
    }
}
