<x-app-layout>
    <x-slot name="header" class="dark">
        <link rel="stylesheet" href="{{ asset('css/selectBox.css') }}">

        @if (Auth::user()->isAdmin())
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
                class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Filtrar
            </button>

            <a href="{{ route('dashboard') }}"
                class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Limpar
                Filtro</a>

            <td class="border  border-slate-950 px-4 py-2 text-gray-900 dark:text-gray-900 ">


                <div class="flex-col items-center justify-center overflow-hidden py-2 px-4 z-50">
                    <div>
                        <label for="tw-modal {{ isset($vocalista) ? $vocalista->id : '' }}"
                            class="cursor-pointer hover:underline rounded bg-green-700 px-8 py-4 text-white active:bg-slate-400 ">
                            LISTA DO DIA
                        </label>

                    </div>



                    <input type="checkbox" id="tw-modal {{ isset($vocalista) ? $vocalista->id : '' }}"
                        class="peer fixed appearance-none opacity-0">
                    <label for="tw-modal {{ isset($vocalista) ? $vocalista->id : '' }}"
                        class="pointer-events-none invisible absolute inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">

                        <!-- Lista do dia -->
                        <div class="bg-white p-4 md:p-5 space-y-4" id="lista-do-dia">
                            <table>
                                <tbody>
                                    <thead>
                                        <th class="px-4 text-center">Vocalista</th>
                                        <th class="px-4 text-center">Louvor</th>
                                        <th class="px-4 text-center">Tonalidade</th>
                                    </thead>
                            </table>

                            </tbody>
                        </div>

                    </label>
                </div>

            </td>
            <a href="{{ 'gerar-pdf' }}" class="bg-yellow-300 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded">
                GERAR PDF
            </a>

        </form>


        {{-- Final Formulario de pesquisa com filtro --}}

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">

                    <thead>
                        <th class="text-white px-4 text-center text-xl">Vocalista</th>
                        <th class="text-white px-4 text-center text-xl">Louvor</th>
                        <th class="text-white px-4 text-center text-xl">Tonalidade</th>
                        <th class="text-white px-4 text-center text-xl">Versão</th>
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
                                            class="cursor-pointer hover:underline  bg-green-700 px-8 py-4 rounded text-white active:bg-slate-400">OUÇA
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

                            @if (Auth::user()->isAdmin())
                                <!-- Se o usuário for um administrador, exibir as opções de CRUD -->
                                <td class="border border-slate-950 px-4 py-2 ">
                                    <div class="flex justify-center">
                                        <a href="{{ route('vocalistas.edit', $vocalista->id) }}"
                                            class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>

                                            <button
                                            class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base btn-add-lista"
                                            data-id="{{ $vocalista->id }}"
                                            nome_vocalista="{{ $vocalista->nome_vocalista }}"
                                            nome_louvor="{{ $vocalista->nome_louvor }}"
                                            nome_versao_louvor="{{ $vocalista->nome_versao_louvor }}"
                                            tonalidade="{{ $vocalista->tonalidade }}">
                                            Add a lista
                                        </button>

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
                                            class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base btn-add-lista"
                                            data-id="{{ $vocalista->id }}"
                                            nome_vocalista="{{ $vocalista->nome_vocalista }}"
                                            nome_louvor="{{ $vocalista->nome_louvor }}"
                                            nome_versao_louvor="{{ $vocalista->nome_versao_louvor }}"
                                            tonalidade="{{ $vocalista->tonalidade }}">
                                            Add a lista
                                        </button>
                                </td>
                            @endif
                    @endforeach

                </table>

            </div>
        </div>
    </div> {{-- Final Div Principal --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function adicionarMusicaListaDoDia(botao) {
                let listaDoDia = document.querySelector('#lista-do-dia table tbody');
                if (listaDoDia) {
                    let nome_vocalista = botao.getAttribute('nome_vocalista');
                    let nome_louvor = botao.getAttribute('nome_louvor');
                    let tonalidade = botao.getAttribute('tonalidade');

                    // Verificar se o louvor já foi adicionado
                    let louvorJaAdicionado = Array.from(listaDoDia.querySelectorAll('tr')).some(row => {
                        return (
                            row.cells[0].textContent === nome_vocalista &&
                            row.cells[1].textContent === nome_louvor &&
                            row.cells[2].textContent === tonalidade
                        );
                    });

                    // Se o louvor já foi adicionado, mostra mensagem e retorna
                    if (louvorJaAdicionado) {
                        console.log("Essa música já foi adicionada à lista.");
                        return;
                    }

                    // Criar uma nova linha (<tr>) com os dados do louvor
                    let novaLinha = listaDoDia.insertRow();

                    // Criar as células (<td>) com os dados do louvor
                    let cellVocalista = novaLinha.insertCell(0);
                    let cellLouvor = novaLinha.insertCell(1);
                    let cellTonalidade = novaLinha.insertCell(2);
                    let cellRemover = novaLinha.insertCell(3);

                    // Adiciona os dados às células
                    cellVocalista.textContent = nome_vocalista;
                    cellLouvor.textContent = nome_louvor;
                    cellTonalidade.textContent = tonalidade;

                    // Adiciona classes às células
                    cellVocalista.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');
                    cellLouvor.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');
                    cellTonalidade.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');

                    // Botão de Remover
                    let botaoRemover = document.createElement('button');
                    botaoRemover.textContent = 'Remover';
                    botaoRemover.classList.add('btn-remove', 'px-4', 'py-2', 'bg-red-500', 'text-white', 'rounded', 'hover:bg-red-600');
                    cellRemover.appendChild(botaoRemover);

                    // Evento de Remover
                    botaoRemover.addEventListener('click', function() {
                        removerMusicaListaDoDia(novaLinha);
                        botao.style.display = 'inline-block'; // Exibe o botão "Adicionar à Lista" novamente
                    });

                    // Salvar os dados no localStorage
                    salvarListaNoLocalStorage();
                } else {
                    console.error("Elemento lista-do-dia não encontrado.");
                }
            }

            function salvarListaNoLocalStorage() {
                let listaDoDia = document.querySelector('#lista-do-dia table tbody');
                if (listaDoDia) {
                    let listaDeMusicas = [];
                    for (let i = 0; i < listaDoDia.rows.length; i++) {
                        let musica = {
                            vocalista: listaDoDia.rows[i].cells[0].textContent,
                            louvor: listaDoDia.rows[i].cells[1].textContent,
                            tonalidade: listaDoDia.rows[i].cells[2].textContent
                        };
                        listaDeMusicas.push(musica);
                    }
                    localStorage.setItem('listaDeMusicas', JSON.stringify(listaDeMusicas));
                }
            }

            function carregarListaDoLocalStorage() {
                let listaDoDia = document.querySelector('#lista-do-dia table tbody');
                let listaDeMusicas = localStorage.getItem('listaDeMusicas');
                if (listaDeMusicas) {
                    listaDeMusicas = JSON.parse(listaDeMusicas);
                    listaDeMusicas.forEach(function(musica) {
                        let novaLinha = listaDoDia.insertRow();
                        let cellVocalista = novaLinha.insertCell(0);
                        let cellLouvor = novaLinha.insertCell(1);
                        let cellTonalidade = novaLinha.insertCell(2);
                        let cellRemover = novaLinha.insertCell(3);
                        cellVocalista.textContent = musica.vocalista;
                        cellLouvor.textContent = musica.louvor;
                        cellTonalidade.textContent = musica.tonalidade;

                        // Botão de Remover
                        let botaoRemover = document.createElement('button');
                        botaoRemover.textContent = 'Remover';
                        botaoRemover.classList.add('btn-remove', 'px-4', 'py-2', 'bg-red-500', 'text-white', 'rounded', 'hover:bg-red-600');
                        cellRemover.appendChild(botaoRemover);

                        // Evento de Remover
                        botaoRemover.addEventListener('click', function() {
                            removerMusicaListaDoDia(novaLinha);
                        });

                        cellVocalista.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');
                        cellLouvor.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');
                        cellTonalidade.classList.add('border', 'border-slate-950', 'px-4', 'py-2', 'text-gray-900', 'dark:text-black');
                    });
                }
            }

            function removerMusicaListaDoDia(linha) {
                linha.remove();
                salvarListaNoLocalStorage();
                atualizarBotoesAdicionar();
            }

            function atualizarBotoesAdicionar() {
                let listaDoDia = document.querySelector('#lista-do-dia table tbody');
                if (listaDoDia) {
                    let botoesAddLista = document.querySelectorAll('.btn-add-lista');
                    botoesAddLista.forEach(function(botao) {
                        let nome_vocalista = botao.getAttribute('nome_vocalista');
                        let nome_louvor = botao.getAttribute('nome_louvor');
                        let tonalidade = botao.getAttribute('tonalidade');

                        let louvorJaAdicionado = Array.from(listaDoDia.querySelectorAll('tr')).some(row => {
                            return (
                                row.cells[0].textContent === nome_vocalista &&
                                row.cells[1].textContent === nome_louvor &&
                                row.cells[2].textContent === tonalidade
                            );
                        });

                        if (louvorJaAdicionado) {
                            botao.style.display = 'none'; // Esconde o botão "Add a lista" se a música já estiver na lista
                        } else {
                            botao.style.display = 'inline-block'; // Exibe o botão "Adicionar à Lista" se a música não estiver na lista
                        }
                    });
                }
            }

            carregarListaDoLocalStorage();

            let botoesAddLista = document.querySelectorAll('.btn-add-lista');
            botoesAddLista.forEach(function(botao) {
                botao.addEventListener('click', function() {
                    adicionarMusicaListaDoDia(botao);
                    botao.style.display = 'none'; // Esconde o botão "Adicionar à Lista" após adicionar
                });
            });

            // Verificar se as músicas já estão na lista ao carregar a página
            atualizarBotoesAdicionar();
        });


    </script>










</x-app-layout>
