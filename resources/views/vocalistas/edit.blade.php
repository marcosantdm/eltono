<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            {{ __('EDITE AS INFORMAÇÕES') }} <button><a href="{{ route('vocalistas.index') }}">Voltar a
                    Listagem</a></button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('vocalistas.update', $vocalista->id) }}" method="POST" class="flex flex-col p-36">
                    @csrf
                    @method('PUT')

                    <label class="text-indigo-950 m-4" for="nome_vocalista">Vocalista</label>
                    <input type="text" name="nome_vocalista"
                        value="{{ old('nome_vocalista', $vocalista->nome_vocalista) }}">

                    <label class="text-indigo-950 m-4" for="nome_louvor">Louvor</label>
                    <input type="text" name="nome_louvor" value="{{ old('nome_louvor', $vocalista->nome_louvor) }}">

                    <label class="text-indigo-950 m-4" for="nome_versao_louvor">Versão</label>
                    <input type="text" name="nome_versao_louvor"
                        value="{{ old('nome_louvor_louvor', $vocalista->nome_versao_louvor) }}">

                    <label class="text-indigo-950 m-4" for="tonalidade">Tonalidade</label>
                    <select name="tonalidade" value="{{ old('tonalidade', $vocalista->tonalidade) }}" for="tonalidade"
                        class="form-select">

                        <option value="C" {{ old('tonalidade', $vocalista->tonalidade) == 'C' ? 'selected' : '' }}>
                            C</option>
                        <option value="Cm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Cm' ? 'selected' : '' }}>Cm</option>
                        <option value="C#"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'C#' ? 'selected' : '' }}>C#</option>
                        <option value="C#m"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'C#m' ? 'selected' : '' }}>C#m</option>

                        <option value="Db"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Db' ? 'selected' : '' }}>Db</option>
                        <option value="D"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'D' ? 'selected' : '' }}>D</option>
                        <option value="Dm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Dm' ? 'selected' : '' }}>Dm</option>
                        <option value="D#m"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'D#m' ? 'selected' : '' }}>D#m</option>

                        <option value="Ebm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Ebm' ? 'selected' : '' }}>Ebm</option>
                        <option value="Eb"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Eb' ? 'selected' : '' }}>Eb</option>
                        <option value="E"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'E' ? 'selected' : '' }}>E</option>
                        <option value="Em"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Ebm' ? 'selected' : '' }}>Em</option>

                        <option value="F"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'F' ? 'selected' : '' }}>F</option>
                        <option value="Fm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Fm' ? 'selected' : '' }}>Fm</option>
                        <option value="F#"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'F#' ? 'selected' : '' }}>F#</option>

                        <option value="G"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'G' ? 'selected' : '' }}>G</option>
                        <option value="Gm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Gm' ? 'selected' : '' }}>Gm</option>
                        <option value="G#"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'G#' ? 'selected' : '' }}>G#</option>
                        <option value="G#m"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'G#m' ? 'selected' : '' }}>G#m</option>

                        <option value="Ab"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Ab' ? 'selected' : '' }}>Ab</option>
                        <option value="A"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'A' ? 'selected' : '' }}>A</option>
                        <option value="Am"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Am' ? 'selected' : '' }}>Am</option>
                        <option value="A#m"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'A#m' ? 'selected' : '' }}>A#m</option>

                        <option value="Bbm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Bbm' ? 'selected' : '' }}>Bbm</option>
                        <option value="B"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'B' ? 'selected' : '' }}>B</option>
                        <option value="Bm"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Bm' ? 'selected' : '' }}>Bm</option>
                        <option value="Bb"
                            {{ old('tonalidade', $vocalista->tonalidade) == 'Bb' ? 'selected' : '' }}>Bb</option>



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
