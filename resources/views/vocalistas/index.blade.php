<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/selectBox.css') }}">

        <div class="flex justify-between">
            <button><a href="{{ route('vocalistas.create') }}">CADASTRAR NOVO LOUVOR</a></button>
        </div>

    </x-slot>

    <div class="py-12"> {{-- Div Principal --}}

        {{-- Formulario de pesquisa --}}
        <form action="{{ route('dashboard') }}" method="GET" class="flex my-4 gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <select name="nome_vocalista" id="vocalista" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Vocalista</option>
                @foreach ($vocalistasQuery as $vocalista)
                    <option value="{{ $vocalista->nome_vocalista }}">{{ $vocalista->nome_vocalista }}</option>
                @endforeach
            </select>

            <select name="nome_louvor" id="louvor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Louvor</option>
                @foreach ($louvoresQuery as $vocalista)
                    <option value="{{ $vocalista->nome_louvor }}">{{ $vocalista->nome_louvor }}</option>
                @endforeach
            </select>

            <button type="submit" class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Filtrar</button>
            <a href="{{ route('dashboard') }}" class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Limpar Filtro</a>
        </form>

        {{-- Final Formulario de pesquisa --}}

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">

                    <thead>
                        <th class="px-4 text-center">Vocalista</th>
                        <th class="px-4 text-center">Louvor</th>
                        <th class="px-4 text-center">Tonalidade</th>
                        <th class="px-4 text-center">Versão</th>

                    </thead>


                    @foreach ($vocalistas as $vocalista)
                        <tr>


                            <td class="border border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $vocalista->nome_vocalista }}
                            </td>
                            <td class="border border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $vocalista->nome_louvor }}
                            </td>
                            <td class="border  border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $vocalista->tonalidade }}
                            </td>
                            <td class="border  border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                <a href=" {{ $vocalista->nome_versao_louvor }}" target="_blank">Ouça Agora</a>
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">
                                    <a href="{{ route('vocalistas.edit', $vocalista->id) }}"
                                        class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                    <form action="{{ route('vocalistas.destroy', $vocalista->id) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 dark:bg-red-700 hover:bg-red-600 dark:hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Apagar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div> {{-- Final Div Principal --}}

    <script>
        // Função para mostrar/esconder o dropdown
        document.getElementById('dropdownSearchButton').addEventListener('click', function() {
            document.getElementById('dropdownSearch').classList.toggle('hidden');
        });
    </script>

</x-app-layout>
