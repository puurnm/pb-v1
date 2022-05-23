<?php

namespace Database\Factories;

use App\Models\KategoriBerita;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KategoriBerita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kategori' => $this->faker->title,
        ];
    }
}
