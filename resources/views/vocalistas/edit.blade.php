<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between dark:text-white">
            {{ __('ÁREA DE EDIÇÃO') }} <button
            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="{{ route('vocalistas.index') }}">VOLTAR A LOUVORES CADASTRADOS</a>
        </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('vocalistas.update', $louvor->id) }}" method="POST" class="flex flex-col p-36">
                    @csrf
                    @method('PUT')

                    <label class="text-indigo-950 m-4 dark:text-white text-lg" for="nome_vocalista">Vocalista</label>
                    <input type="text" name="nome_vocalista"
                        value="{{ old('nome_vocalista', $louvor->vocalista->nome_vocalista) }}">

                    <label class="text-indigo-950 m-4 dark:text-white text-lg" for="nome_louvor">Louvor</label>
                    <input type="text" name="nome_louvor" value="{{ old('nome_louvor', $louvor->nome_louvor) }}">

                    <label class="text-indigo-950 m-4 dark:text-white text-lg" for="nome_versao_louvor">Versão</label>
                    <input type="text" name="nome_versao_louvor"
                        value="{{ old('nome_louvor_louvor', $louvor->nome_versao_louvor) }}">

                    <label class="text-indigo-950 m-4 dark:text-white text-lg" for="tonalidade">Tonalidade</label>
                    <select name="tonalidade" value="{{ old('tonalidade', $louvor->tonalidade) }}" for="tonalidade"
                        class="form-select">

                        <option value="C" {{ old('tonalidade', $louvor->tonalidade) == 'C' ? 'selected' : '' }}>
                            C</option>
                        <option value="Cm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Cm' ? 'selected' : '' }}>Cm</option>
                        <option value="C#"
                            {{ old('tonalidade', $louvor->tonalidade) == 'C#' ? 'selected' : '' }}>C#</option>
                        <option value="C#m"
                            {{ old('tonalidade', $louvor->tonalidade) == 'C#m' ? 'selected' : '' }}>C#m</option>

                        <option value="Db"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Db' ? 'selected' : '' }}>Db</option>
                        <option value="D"
                            {{ old('tonalidade', $louvor->tonalidade) == 'D' ? 'selected' : '' }}>D</option>
                        <option value="Dm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Dm' ? 'selected' : '' }}>Dm</option>
                        <option value="D#m"
                            {{ old('tonalidade', $louvor->tonalidade) == 'D#m' ? 'selected' : '' }}>D#m</option>

                        <option value="Ebm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Ebm' ? 'selected' : '' }}>Ebm</option>
                        <option value="Eb"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Eb' ? 'selected' : '' }}>Eb</option>
                        <option value="E"
                            {{ old('tonalidade', $louvor->tonalidade) == 'E' ? 'selected' : '' }}>E</option>
                        <option value="Em"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Ebm' ? 'selected' : '' }}>Em</option>

                        <option value="F"
                            {{ old('tonalidade', $louvor->tonalidade) == 'F' ? 'selected' : '' }}>F</option>
                        <option value="Fm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Fm' ? 'selected' : '' }}>Fm</option>
                        <option value="F#"
                            {{ old('tonalidade', $louvor->tonalidade) == 'F#' ? 'selected' : '' }}>F#</option>

                        <option value="G"
                            {{ old('tonalidade', $louvor->tonalidade) == 'G' ? 'selected' : '' }}>G</option>
                        <option value="Gm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Gm' ? 'selected' : '' }}>Gm</option>
                        <option value="G#"
                            {{ old('tonalidade', $louvor->tonalidade) == 'G#' ? 'selected' : '' }}>G#</option>
                        <option value="G#m"
                            {{ old('tonalidade', $louvor->tonalidade) == 'G#m' ? 'selected' : '' }}>G#m</option>

                        <option value="Ab"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Ab' ? 'selected' : '' }}>Ab</option>
                        <option value="A"
                            {{ old('tonalidade', $louvor->tonalidade) == 'A' ? 'selected' : '' }}>A</option>
                        <option value="Am"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Am' ? 'selected' : '' }}>Am</option>
                        <option value="A#m"
                            {{ old('tonalidade', $louvor->tonalidade) == 'A#m' ? 'selected' : '' }}>A#m</option>

                        <option value="Bbm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Bbm' ? 'selected' : '' }}>Bbm</option>
                        <option value="B"
                            {{ old('tonalidade', $louvor->tonalidade) == 'B' ? 'selected' : '' }}>B</option>
                        <option value="Bm"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Bm' ? 'selected' : '' }}>Bm</option>
                        <option value="Bb"
                            {{ old('tonalidade', $louvor->tonalidade) == 'Bb' ? 'selected' : '' }}>Bb</option>



                    </select>

                    <br>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                    <br>
                    <a href="{{ route('vocalistas.index') }}"
                        class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
