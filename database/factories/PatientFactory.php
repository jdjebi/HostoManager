<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'date_naissance' => $this->faker->date(),
            'adresse' => $this->faker->city(),
            'assurance' => $this->faker->company(),
            'numero_assurance' => $this->faker->buildingNumber(),
            'email' => $this->faker->email(),
            'telephone' => $this->faker->phoneNumber(),
        ];
    }
}
