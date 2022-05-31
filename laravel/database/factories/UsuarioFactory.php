<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name(),
            'data_nasc'=>now(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password(),
            'rg'=>$this->faker->rg(),
            'cpf'=>$this->faker->cpf(),
            'nacionalidade'=>$this->faker->nacionalidade(),
            'estado_civil'=>$this->faker->estado_civil()
        ];
    }
}
