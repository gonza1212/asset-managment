<?php

namespace App\DataFakers;

class MaintenanceFaker
{
    private static $maintenance = [
        [
            'id' => '1',
            'started_at' => '23/7/2024',
            'description' => 'Martillo Neumático',
            'category' => 'Herramientas',
            'assigned_to' => 'Equipo de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand_model' => 'DeWalt D25980',
            'serial_number' => 'MN2345678',
            'status' => 'En Mantenimiento',
        ],
        [
            'id' => '2',
            'started_at' => '1/8/2024',
            'description' => 'Llave de Torque Hidráulica',
            'category' => 'Herramientas',
            'assigned_to' => 'Taller Mecánico',
            'location' => 'Base Operativa Central',
            'brand_model' => 'Enerpac S1500',
            'serial_number' => 'LH9876543',
            'status' => 'En Uso',
        ],
    ];

    /**
     * Devuelve todos los activos de prueba para la DEMO
     */
    public static function all() {
        return self::$maintenance;
    }

    public static function find($id) {
        return self::$maintenance[$id - 1];
    }

}