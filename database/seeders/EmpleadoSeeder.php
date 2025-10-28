<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $empleados = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'correo' => 'juan.perez@empresa.com', 'salario' => 2500.50],
            ['nombre' => 'María', 'apellido' => 'Gómez', 'correo' => 'maria.gomez@empresa.com', 'salario' => 2800.75],
            ['nombre' => 'Carlos', 'apellido' => 'López', 'correo' => 'carlos.lopez@empresa.com', 'salario' => 2200.00],
            ['nombre' => 'Ana', 'apellido' => 'Martínez', 'correo' => 'ana.martinez@empresa.com', 'salario' => 3000.25],
            ['nombre' => 'Luis', 'apellido' => 'Rodríguez', 'correo' => 'luis.rodriguez@empresa.com', 'salario' => 2700.80],
            ['nombre' => 'Elena', 'apellido' => 'García', 'correo' => 'elena.garcia@empresa.com', 'salario' => 2600.40],
            ['nombre' => 'Pedro', 'apellido' => 'Hernández', 'correo' => 'pedro.hernandez@empresa.com', 'salario' => 2900.60],
            ['nombre' => 'Laura', 'apellido' => 'Díaz', 'correo' => 'laura.diaz@empresa.com', 'salario' => 3100.90],
            ['nombre' => 'Miguel', 'apellido' => 'Sánchez', 'correo' => 'miguel.sanchez@empresa.com', 'salario' => 2400.30],
            ['nombre' => 'Sofía', 'apellido' => 'Ramírez', 'correo' => 'sofia.ramirez@empresa.com', 'salario' => 3200.45],
        ];

        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}
