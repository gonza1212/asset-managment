<?php

namespace App\DataFakers;


class ProjectFaker
{
    private static $projects = [
        [
            'id' => '1',
            'code' => 'PJT - 001',
            'name' => 'Perforación y extracción en pozo X',
            'description' => 'Perforación y extracción en pozo X',
            'status' => 'En ejecución',
            'started_at' => '01/05/2024',
            'finished_at' => '31/12/2024',
            'project_manager' => 'Ing. Juan Pérez',
            'deputy_manager' => 'Enrique Fernández',
            'team' => 'Ver equipo designado',
            'assets' => '12 activos',
            'location' => 'Plataforma costera afuera A',
            'priority' => 'Alta',
            'progress_percentage' => '45%',
            'last_report_at' => '01/01/2019',
        ],
        [
            'id' => '2',
            'code' => 'PJT - 002',
            'name' => 'Mantenimiento Planta Y',
            'description' => 'Mantenimiento de válvulas y equipos',
            'status' => 'Pausado',
            'started_at' => '01/03/2024',
            'finished_at' => '01/06/2024',
            'project_manager' => 'María González',
            'deputy_manager' => 'Pedro Rodríguez',
            'team' => 'Ver equipo designado',
            'assets' => '8 activos',
            'location' => 'Planta de procesamiento Y',
            'priority' => 'Media',
            'progress_percentage' => '80%',
            'last_report_at' => '01/07/2021',
        ],
        [
            'id' => '3',
            'code' => 'PJT - 003',
            'name' => 'Instalación de sensores',
            'description' => 'Colocación de sensores en oleoducto',
            'status' => 'En planificación',
            'started_at' => '15/07/2024',
            'finished_at' => '31/08/2024',
            'project_manager' => 'Roberto Ramírez',
            'deputy_manager' => 'Luis Gómez',
            'team' => 'Ver equipo designado',
            'assets' => '5 activos',
            'location' => 'Oleoducto A',
            'priority' => 'Baja',
            'progress_percentage' => '10%',
            'last_report_at' => '01/06/2023',
        ],
    ];

    /**
     * Devuelve todos los activos de prueba para la DEMO
     */
    public static function all() {
        return self::$projects;
    }

    public static function find($id) {
        return self::$projects[$id - 1];
    }

}