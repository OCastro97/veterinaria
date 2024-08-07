<x-layout>
    <section class="grid grid-cols-2 pb-1">
        <div class="pl-10">
            <div class="pt-60">
                <h1 class="uppercase text-6xl">La Salud de su Mascota es nuestra Prioridad</h1>
            </div>

            <div class="items-center">
                <p class=" h-5 w-25 text-1.5xl">Nos enorgullece brindarle a usted y a su
                    mascota una atención personalizada.</p>
            </div>
            <div class="pt-5">
                <x-buttom>
                    <a href="/" class="link-btn">Registrate</a>
                </x-buttom>
            </div>
        </div>

        <div class="pr-10">
            <img src=" {{ Vite::asset('resources/images/Veterinary-bro.png') }}" alt="">
        </div>
        </div>
    </section>
</x-layout>
