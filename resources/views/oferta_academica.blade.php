<x-layouts.site.layout>
    <x-slot name="title">
        UPQ | Ingeieria Mecatronica
    </x-slot>
    <x-slot name="main">
        <div class="">            
            <x-layouts.oferta_academica.header/>
            <x-layouts.oferta_academica.perfiles :pi="$adProfile"/>
            <x-layouts.oferta_academica.plan_estudios/>
            <x-layouts.oferta_academica.objetivo_plan_estudios/>
            <x-layouts.oferta_academica.ciclos/>
            <x-layouts.oferta_academica.mision_vision/>
            <x-layouts.oferta_academica.footer/>
        </div>        
    </x-slot>
</x-layouts.site.layout>