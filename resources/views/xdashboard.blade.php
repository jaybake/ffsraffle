<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Extra Entries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <table>
                      <tr>
                      <th>id</th><th>item</th><th>item #</th><th>location</th>
                    </tr>
                    @foreach($extras as $extra)
                    <tr>
                      <td>{{ $extras }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
