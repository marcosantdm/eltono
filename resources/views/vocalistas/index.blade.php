<x-app-layout>
    <x-slot name="header" class="dark">
        <link rel="stylesheet" href="{{ asset('css/selectBox.css') }}">

        @if (auth()->user()->role === 'admin')
        <button
            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="{{ route('vocalistas.create') }}">CADASTRAR NOVO LOUVOR</a> 
            </button>
                @else

                @endif
            </span>




    </x-slot>

    <div class="py-12"> {{-- Div Principal --}}

        {{-- Formulario de pesquisa --}}
        <form action="{{ route('dashboard') }}" method="GET" class="flex my-4 gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <select name="nome_vocalista" id="vocalista"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Vocalista</option>
                @foreach ($vocalistasQuery as $vocalista)
                    <option value="{{ $vocalista->nome_vocalista }}">{{ $vocalista->nome_vocalista }}</option>
                @endforeach
            </select>

            <select name="nome_louvor" id="louvor"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Louvor</option>
                @foreach ($louvoresQuery as $vocalista)
                    <option value="{{ $vocalista->nome_louvor }}">{{ $vocalista->nome_louvor }}</option>
                @endforeach
            </select>

            <button type="submit"
                class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Filtrar</button>
            <a href="{{ route('dashboard') }}"
                class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Limpar
                Filtro</a>





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




                            <td class="border  border-slate-950 px-4 py-2 text-gray-900 dark:text-white ">

                                <div class=" flex-col items-center justify-center overflow-hidden py-2 px-4 z-50">
                                    <div>
                                        <label for="tw-modal {{ $vocalista->id }}"
                                            class="cursor-pointer hover:underline rounded bg-green-500 px-8 py-4 text-white active:bg-slate-400">OUÇA
                                            AGORA</label>
                                    </div>
                                    <input type="checkbox" id="tw-modal {{ $vocalista->id }}"
                                        class="peer fixed appearance-none opacity-0">
                                    <label for="tw-modal {{ $vocalista->id }}"
                                        class="pointer-events-none invisible absolute inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">

                                        <div>
                                            <iframe src="{{ $vocalista->nome_versao_louvor }}"
                                                frameborder="0"></iframe>
                                        </div>

                                    </label>
                                </div>
                            </td>

                            @if (auth()->user()->role === 'admin')
                                <!-- Se o usuário for um administrador, exibir as opções de CRUD -->
                                <td class="border px-4 py-2 ">
                                    <div class="flex justify-center">
                                        <a href="{{ route('vocalistas.edit', $vocalista->id) }}"
                                            class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                        <button
                                            class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Add
                                            a lista</button>
                                        <form action="{{ route('vocalistas.destroy', $vocalista->id) }}" method="POST"
                                            onsubmit="return confirm('Tem certeza que deseja excluir ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 dark:bg-red-700 hover:bg-red-600 dark:hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Apagar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @else
                                <td class="border border-slate-950 py-2 px-4">
                                    <button
                                        class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Add
                                        a lista</button>
                                </td>
                            @endif
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
