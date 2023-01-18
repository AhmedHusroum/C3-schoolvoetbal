<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
            @auth 
                @if(Auth::user()->isAdmin)
                    <button type="button" class="btn btn-primary btn_create" data-toggle="modal" data-target="#exampleModalCenter1">
                        Uitslag invullen
                    </button>
            @endauth
                @endif
        </h2>
    </x-slot>

    @include('modal.generate.edit')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="match_show">
                    <div class="max-w-xl">
                        <h2 class="text-sm h2_index py-3"><strong>{{$match->team->team_name}}</strong></h2>
                        <h2 class="text-sm h2_index py-3">{{$match->team->won}}</h2>
                        <h2 class="text-sm h2_index py-3">{{$match->team->draw}}</h2>
                        <h2 class="text-sm h2_index py-3">{{$match->team->lost}}</h2>
                        <h2 class="text-sm h2_index py-3"><strong>{{$match->team->wins_chance}}%</strong></h2>
                    </div>

                    <div class="max-w-xl">
                        <h2 class="text-sm h2_index py-3 match_status"><strong>status</strong></h2>
                        <h2 class="text-sm h2_index py-3">Gewonnen</h2>
                        <h2 class="text-sm h2_index py-3">Gelijk</h2>
                        <h2 class="text-sm h2_index py-3">Verloren</h2>
                        <h2 class="text-sm h2_index py-3 match_status"><strong>Win kans</strong></h2>
                    </div>


                    <div class="max-w-xl">
                        <h2 class="text-sm h2_index py-3"><strong>{{$teamB->team->team_name}}</strong></h2>
                        <h2 class="text-sm h2_index py-3">{{$teamB->team->won}}</h2>
                        <h2 class="text-sm h2_index py-3">{{$teamB->team->draw}}</h2>
                        <h2 class="text-sm h2_index py-3">{{$teamB->team->lost}}</h2>
                        <h2 class="text-sm h2_index py-3"><strong>{{$teamB->team->wins_chance}}%</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

