<x-app-layout>
    @php
        $component = 'alert2';

            $Color='purple';
        if ($Color == '') {
            $Color = 'gray';
        }
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                {{--COMPONENTES DE CLASE--}}
                <div class="container py-3 mx-auto">
                    <h1 class="mb-3 text-2xl">Componentes de clase:</h1>
                    <x-alert :bgColor="$Color" class="mb-4">
                        <x-slot name="texto">
                            <strong>Éxito:</strong>
                        </x-slot>
                        Hola Mundo, JOJOJOJOJOJOJ
                    </x-alert>

                    <x-alert class="mb-20">
                        <x-slot name="texto">
                            <strong>Mensaje 1:</strong>
                        </x-slot>
                        Hola Mundo, JAJAJAJAJJAJ
                    </x-alert>
                    <x-alert bgColor="indigo">
                        <x-slot name="texto">
                            <strong>Mensaje 1:</strong>
                        </x-slot>
                        Hola Mundo, JAJAJAJAJJAJ
                    </x-alert>
                </div>

                {{--COMPONENTES ANONIMOS--}}
                <div class="container py-3 mx-auto">
                    <h1 class="mb-3 text-2xl">Componentes de Anonimos:</h1>
                    <x-alert2 color='blue'>
                        Hola Mundo !!!!!!!!

                        <x-slot name='texto'>
                            HOLA VIDA !!!!
                        </x-slot>
                    </x-alert2>

                    <x-alert2 :color="$Color" class="my-4"/>

                    <x-alert2/>
                </div>

                {{--COMPONENTES DINAMICOS--}}
                <div class="container py-3 mx-auto">
                    <h1 class="mb-3 text-2xl">Componentes de Anonimos:</h1>
                    <x-dynamic-component :component="$component">
                        <x-slot name="texto">Dynamic Component!!!</x-slot>
                    </x-dynamic-component>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
