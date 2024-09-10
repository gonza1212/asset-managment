<?php

namespace App\DataFakers;


class AssetFaker
{
    private static $assets = [
        [
            'id' => '1',
            'code' => 'H001',
            'description' => 'Martillo Neumático',
            'category' => 'Herramientas',
            'assigned_to' => 'Equipo de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand' => 'DeWalt',
            'model' => 'D25980',
            'serial_number' => 'MN2345678',
            'status' => 'En Mantenimiento',
        ],
        [
            'id' => '2',
            'code' => 'H002',
            'description' => 'Llave de Torque Hidráulica',
            'category' => 'Herramientas',
            'assigned_to' => 'Taller Mecánico',
            'location' => 'Base Operativa Central',
            'brand' => 'Enerpac',
            'model' => 'S1500',
            'serial_number' => 'LH9876543',
            'status' => 'En Uso',
        ],
        [
            'id' => '3',
            'code' => 'H003',
            'description' => 'Detector de Gases Portátil',
            'category' => 'Herramientas',
            'assigned_to' => 'Seguridad Industrial',
            'location' => 'Plataforma de Perforación 3',
            'brand' => 'MSA',
            'model' => 'Altair 5X',
            'serial_number' => 'DG1234590',
            'status' => 'Disponible',
        ],
        [
            'id' => '4',
            'code' => 'E001',
            'description' => 'Generador Eléctrico Diesel',
            'category' => 'Equipos',
            'assigned_to' => 'Operaciones de Campo',
            'location' => 'Plataforma de Producción A',
            'brand' => 'Caterpillar',
            'model' => 'C32',
            'serial_number' => 'GE987656421',
            'status' => 'En Uso',
        ],
        [
            'id' => '5',
            'code' => 'E002',
            'description' => 'Compresor de Aire',
            'category' => 'Equipos',
            'assigned_to' => 'Departamento de Perforación',
            'location' => 'Plataforma de Perforación 1',
            'brand' => 'Atlas Copco',
            'model' => 'XATS 800',
            'serial_number' => 'CA76543219',
            'status' => 'Fuera de Servicio',
        ],
        [
            'id' => '6',
            'code' => 'E003',
            'description' => 'Unidad de Bombeo',
            'category' => 'Equipos',
            'assigned_to' => 'Operaciones en Pozo',
            'location' => 'Pozo Petrolero G3',
            'brand' => 'Weatherford',
            'model' => '160D',
            'serial_number' => 'UB65432109',
            'status' => 'En Reparación',
        ],
        [
            'id' => '7',
            'code' => 'E004',
            'description' => 'Equipo de Soldadura',
            'category' => 'Equipos',
            'assigned_to' => 'Taller de Fabricación',
            'location' => 'Taller Base',
            'brand' => 'Lincoln Electric',
            'model' => 'Power MIG 260',
            'serial_number' => 'ES9875432',
            'status' => 'Disponible',
        ],
        [
            'id' => '8',
            'code' => 'C001',
            'description' => 'Lubricante Industrial',
            'category' => 'Consumibles',
            'assigned_to' => 'Departamento de Mantenimiento',
            'location' => 'Almacén Central',
            'brand' => 'Mobil',
            'model' => 'SHC 600',
            'serial_number' => 'N/A',
            'status' => 'En Almacenamiento',
        ],
        [
            'id' => '9',
            'code' => 'C002',
            'description' => 'Filtros para Compresores',
            'category' => 'Consumibles',
            'assigned_to' => 'Departamento de Mantenimiento',
            'location' => 'Plataforma de Perforación 2',
            'brand' => 'Mann',
            'model' => 'Filter P1650',
            'serial_number' => 'N/A',
            'status' => 'En Almacenamiento',
        ],
        [
            'id' => '10',
            'code' => 'C003',
            'description' => 'Electrodos de Soldadura',
            'category' => 'Consumibles',
            'assigned_to' => 'Taller de Fabricación',
            'location' => 'Taller Base',
            'brand' => 'Lincoln Electric',
            'model' => 'E7018',
            'serial_number' => 'N/A',
            'status' => 'En Uso',
        ],
    ];

    /**
     * Devuelve todos los activos de prueba para la DEMO
     */
    public static function all() {
        return self::$assets;
    }

    public static function find($id) {
        return self::$assets[$id - 1];
    }

}