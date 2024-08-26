<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'data_de_nascimento' => $this->faker->date('Y-m-d'),
            'senha' => bcrypt('password'), 
            'repetir_senha' => bcrypt('password'), 
            'sexo' => $this->faker->randomElement(['Masculino', 'Feminino']),
        ];
    }
}
