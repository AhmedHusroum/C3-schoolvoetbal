<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accounts') }}
        </h2>
    </x-slot>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-48 space-y-6">
            <div class="p-4 sm:p-8 bg-grays shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if(session('status'))
                    <h2 class="alert alert-success"><i class="fa-solid fa-check"></i> {{session('status')}}</h2>
                    @endif
                <h2 class="text-lg h2_create py-4"><strong>Geregistreerde accounts</strong></h2>
                    @foreach($accounts as $account)
                   <b></b><a href="{{route('view.edit', $account->id)}}"><h2 class="btn stretched-link"><i class="fa-solid fa-user"></i> {{$account->name}}</h2></a><b>
                    {{$account->isAdmin == '1'}}
    
                    
                    @endforeach
                    
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<h1>Hallo</h1>