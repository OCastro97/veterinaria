<x-layout>
    <section class="pt-5">
        <div class="pb-5">
            <x-section-title>Nosotros</x-section-title>
        </div>
        <div class="grid lg:grid-cols-2 gap-5 pt-9">
            <div class="pt-10">
                <div class="pt-10 pb-10">
                    <h2 class="text-xl font-bold"> Nuestra Historia</h2>
                    Happy Pets nació de la pasión por el bienestar animal y el deseo de brindar
                    atención veterinaria de alta calidad en nuestra comunidad. Desde nuestros
                    humildes comienzos, hemos crecido y evolucionado, y hoy somos un equipo
                    comprometido con la salud y la felicidad de tus mascotas.
                </div>

                <div>
                    <h2 class="text-xl font-bold">Nuestra Misión</h2>
                    <div class="items-center">
                        <a class="flex justify-between items-center">
                            En HappyPets, nuestra misión es ofrecer una atención integral y
                            compasiva a cada animal que cruza nuestras puertas. Creemos en proporcionar un cuidado
                            personalizado, basado en el respeto, la empatía
                            y el compromiso con la excelencia. Nuestro objetivo es asegurar que cada mascota reciba el
                            mejor
                            tratamiento posible y que cada dueño se sienta respaldado y bien informado.
                        </a>
                    </div>

                </div>
            </div>
            <div>
                <img src="{{ Vite::asset('resources/images/nosotros.jpg') }}" alt="">
            </div>
        </div>

    </section>
</x-layout>
