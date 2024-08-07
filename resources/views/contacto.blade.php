<x-layout>
    <section class="pt-5">
        <div class="pb-5">
            <x-section-title>Contacto</x-section-title>
        </div>
            <form method="" action="#" class="p-4 bg-gray-200 rounded-xl flex flex-col ">
                @csrf
        
                <div class="space-y-12">
                    <div class="border-b border-gray-900 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <x-form-field>
                                <x-form-label for="nombre"> Nombre </x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="nombre" id="nombre" placeholder="Adolfo Medina"/>
                                    <x-form-error name="nombre" />
                                </div>
                            </x-form-field>
                            
                            <x-form-field>
                                <x-form-label for="title">Correo </x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="salary" id="salary" placeholder="veterinaria@happypets.com" />
                                    <x-form-error name="salary" />
                                </div>
                            </x-form-field>
                            
                            <x-form-field>
                                <x-form-label for="title">Telefono </x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="salary" id="salary" placeholder="+507 66202480" />
                                    <x-form-error name="salary" />
                                </div>
                            </x-form-field>
                            
                            <x-form-field>
                                <x-form-label for="title"> Mensaje </x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="salary" id="salary" placeholder="Me gustaría saber el horario de atención" />
                                    <x-form-error name="salary" />
                                </div>
                            </x-form-field>
        
        
                        </div>
        
                    </div>
                </div>
        
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                    <x-buttom>Enviar</x-buttom>
                </div>
            </form>
        
    </section>
</x-layout>
