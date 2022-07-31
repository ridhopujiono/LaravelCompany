<?php

namespace Database\Factories;

use App\Models\Ceo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CeoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ceo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_ceo' => $this->faker->word,
        'jabatan' => $this->faker->word,
        'foto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
