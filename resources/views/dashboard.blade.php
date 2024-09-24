<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-4xl mb-5"><i class="fas fa-home mr-3"></i>Inicio</h2>
                    <p>Panel de Inicio de demo de software de gestión de activos.</p>
                    <p>Todos los datos son de muestra y ninguna acción es permanente.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-4xl mb-5">Demo. Gestión de Activos.</h2>
                    <p>Esta demo es la base conceptual de un sistema de gestión de activos. Se diseñó como una aplicación que, además de llevar el inventario de herramientas, máquinas e insumos y planificar tareas de mantenimiento,  permite la asignación de responsabilidades del personal, con el fin de controlar de manera más precisa el estado de cada herramienta.
                    <br>
                    <br>
                    La asignación de responsabilidad, busca tener un <b>control inmediato de los activos,</b> pero a la vez, busca <b>promover el uso correcto y responsable del material de trabajo.</b>
                    <br>
                    <br>
                    El sistema permite organizar y asignar Activos a <b>Proyectos, equipos de trabajo</b> y <b>personas</b> como individuos responsables.
                    <br>
                    <br>
                    La información de cada proyecto, permite conocer los tiempos de ocupación de los activos, y los distintos niveles jerárquicos de responsabilidad. 
                    <br>
                    <br>
                    Cada persona responsable de un activo, deberá utilizar la aplicación Gestión de Activos, con la cual reportará el estado y la situación de la herramienta asignada. Esto permite tener un <b>control en tiempo real de todos los activos</b>, permitiendo obtener en forma automática un <b>Parte diario</b> sobre el estado de los activos. Al mismo tiempo que motiva a cada trabajador a utilizar de manera responsable las herramientas que tiene a su cargo. 
                    <br>
                    <br>
                    Por otro lado, una sección dedicada a la <b>planificación de mantenimiento</b>, según el tipo de herramienta, para prolongar la vida útil de cada activo.
                    <br>
                    <br>
                    Este sistema, es una base desde la cual se pueden vincular con otras áreas de la empresa, como compras, presupuestos, finanzas, personal, etc.  
                    <br>
                    <br>
                    </p>
                    <hr class="border-t-2 border-gray-300 my-4">
                    <ul>
                        <h3 class="text-xl">Contacto</h3>
                        <br>
                        <p>Gustavo Latini | Founder</p>
                        <a class="text-blue-700" href="mailto:gustavo@latinidesign.com">gustavo@latinidesign.com</a>
                        <p>WA:<a class="text-blue-700" target="_blank" href="https://wa.me/5492804505920">+5492804505920<a/></p>
                        <a class="text-blue-700" target="_blank" href="https://latinidesign.com">https://latinidesign.com<a/>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
