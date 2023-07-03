<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'   => User::all()->random()->id,
            'address'   => $this->faker()->random(),
            'position'  => $this->faker()->randomElement(
                [
                    1   => 'CEO',
                    2   => 'Presidente',
                    3   => 'Diretor',
                    4   => 'Gerente',
                    5   => 'Coordenador', 
                    6   => 'Analista',
                    7   => 'Assistente',
                    8   => 'Estagiário',
                    9   => 'Suporte técnico',
                    10  => 'Data Protection Officer',
                    11  => 'Product Owner',
                    12  => 'Especialista em Cloud Computing',
                    13  => 'Gestor de projetos de TI',
                    14  => 'Especialista DevOps',
                    15  => 'Chief Technology Officer',
                    16  => 'Data Science',
                    17  => 'Teach Lead',
                    18  => 'Desenvolvedor RPA',
                    19  => 'Desenvolvedor Mobile',
                    20  => 'Business Intelligence',
                    21  => 'Arquiteto de soluções',
                    22  => 'Gerente de engenharia de software',
                    23  => 'Especialista UX',
                    24  => 'Desenvolvedor Full-Stack',
                    25  => 'Desenvolvedor Back-End',
                    26  => 'Desenvolvedor Front-End',
                    27  => 'Gerente de Data & Analytics',
                    28  => 'Engenheiro de software'
                ],
            )

        ];
    }
}
