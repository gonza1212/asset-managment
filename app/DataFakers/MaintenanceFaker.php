<?php

namespace App\DataFakers;

class MaintenanceFaker
{
    /**
     * En mantenimiento
     */
    private static $maintenance = [
        [
            'id' => 1,
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
            'id' => 2,
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
     * Pendientes
     */
    private static $pending = [
        [
            'id' => 1,
            'scheduled_at' => '12/8/2024',
            'description' => 'Martillo Neumático',
            'category' => 'Herramientas',
            'assigned_to' => 'Equipo de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand_model' => 'DeWalt D25980',
            'serial_number' => 'MN2345678',
            'status' => 'En Mantenimiento',
        ],
        [
            'id' => 2,
            'scheduled_at' => '1/9/2024',
            'description' => 'Llave de Torque Hidráulica',
            'category' => 'Herramientas',
            'assigned_to' => 'Taller Mecánico',
            'location' => 'Base Operativa Central',
            'brand_model' => 'Enerpac S1500',
            'serial_number' => 'LH9876543',
            'status' => 'En Uso',
        ],
        [
            'id' => 3,
            'scheduled_at' => '16/9/2024',
            'description' => 'Detector de Gases Portátil',
            'category' => 'Herramientas',
            'assigned_to' => 'Seguridad Industrial',
            'location' => 'Plataforma de Perforación 3',
            'brand_model' => 'MSA Altair 5X',
            'serial_number' => 'DG1234590',
            'status' => 'Disponible',
        ],
    ];

    /**
     * Próximos
     */
    private static $upcoming = [
        [
            'id' => 1,
            'scheduled_at' => '24/9/2024',
            'description' => 'Martillo Neumático',
            'category' => 'Herramientas',
            'assigned_to' => 'Equipo de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand_model' => 'DeWalt D25980',
            'serial_number' => 'MN2345678',
            'status' => 'En Mantenimiento',
        ],
        [
            'id' => 2,
            'scheduled_at' => '1/12/2024',
            'description' => 'Llave de Torque Hidráulica',
            'category' => 'Herramientas',
            'assigned_to' => 'Taller Mecánico',
            'location' => 'Base Operativa Central',
            'brand_model' => 'Enerpac S1500',
            'serial_number' => 'LH9876543',
            'status' => 'En Uso',
        ],
        [
            'id' => 3,
            'scheduled_at' => '3/4/2025',
            'description' => 'Detector de Gases Portátil',
            'category' => 'Herramientas',
            'assigned_to' => 'Seguridad Industrial',
            'location' => 'Plataforma de Perforación 3',
            'brand_model' => 'MSA Altair 5X',
            'serial_number' => 'DG1234590',
            'status' => 'Disponible',
        ],
        [
            'id' => 4,
            'scheduled_at' => '12/4/2025',
            'description' => 'Generador Eléctrico Diesel',
            'category' => 'Equipos',
            'assigned_to' => 'Operaciones de Campo',
            'location' => 'Plataforma de Producción A',
            'brand_model' => 'Caterpillar C32',
            'serial_number' => 'GE987656421',
            'status' => 'En Uso',
        ],
        [
            'id' => 5,
            'scheduled_at' => '30/6/2025',
            'description' => 'Compresor de Aire',
            'category' => 'Equipos',
            'assigned_to' => 'Departamento de Perforación',
            'location' => 'Plataforma de Perforación 1',
            'brand_model' => 'Atlas Copco XATS 800',
            'serial_number' => 'CA76543219',
            'status' => 'Fuera de Servicio',
        ],
        [
            'id' => 6,
            'scheduled_at' => '11/9/2025',
            'description' => 'Equipo de Soldadura',
            'category' => 'Equipos',
            'assigned_to' => 'Taller de Fabricación',
            'location' => 'Taller Base',
            'brand_model' => 'Lincoln Electric Power MIG 260',
            'serial_number' => 'ES9875432',
            'status' => 'Disponible',
        ],
        [
            'id' => 7,
            'scheduled_at' => '1/12/2025',
            'description' => 'Lubricante Industrial',
            'category' => 'Consumibles',
            'assigned_to' => 'Departamento de Mantenimiento',
            'location' => 'Almacén Central',
            'brand_model' => 'Mobil SHC 600',
            'serial_number' => 'N/A',
            'status' => 'En Almacenamiento',
        ],
        [
            'id' => 8,
            'scheduled_at' => '1/12/2025',
            'description' => 'Filtros para Compresores',
            'category' => 'Consumibles',
            'assigned_to' => 'Departamento de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand_model' => 'Mann Filter P1650',
            'serial_number' => 'N/A',
            'status' => 'En Almacenamiento',
        ],
        [
            'id' => 9,
            'scheduled_at' => '1/12/2025',
            'description' => 'Electrodos de Soldadura',
            'category' => 'Consumibles',
            'assigned_to' => 'Taller de Fabricación',
            'location' => 'Taller Base',
            'brand_model' => 'Lincoln Electric E7018',
            'serial_number' => 'N/A',
            'status' => 'En Uso',
        ],
    ];

    /**
     * Devuelve todos los activos de prueba para la DEMO
     */
    public static function all() {
        return self::$maintenance;
    }

    public static function pending() {
        return self::$pending;
    }

    public static function upcoming() {
        return self::$upcoming;
    }

    public static function find($id) {
        return self::$maintenance[$id - 1];
    }

}