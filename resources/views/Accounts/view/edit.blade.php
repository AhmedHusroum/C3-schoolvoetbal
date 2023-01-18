<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
            <!-- <a href="{{route('view.index')}}" class="btn btn-info" id="btn-account">Bekijk alle accounts</a> -->
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-gray shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <p><i class="fa-solid fa-user"></i> <i><b> {{$account->name}}</b></i></p>
                    <!-- <i class="fa-solid fa-lock"></i>           -->

                    <form action="{{route('view.update', $account->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <x-text-input id="number_players" name="isAdmin" type="number" class="mt-4 block w-full" min="1" max="1" placeholder="Vul hier 1 in om de gebruiker admin te maken"/>
                        <!-- <select name="isAdmin" id="number_players" class="mt-4 block w-full">
                        <option value="">--Status kiezen--</option>
                            <option value="0">{{$account->isAdmin == '0' ? 'selected':''}}</option>
                            <option value="1">{{$account->isAdmin == '1' ? 'selected':''}}</option>
                        </select> -->
                        
                        <button type="submit" class="btn btn-success btn_create mt-4 block" value>Opslaan</button>
                    </form>
                    
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout>
