<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <div class="flex justify-between">
            {{ __('AREA DE CADASTRO') }}   <button><a href="{{route('vocalistas.index')}}">Voltar a Listagem</a></button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('vocalistas.store') }}" method="POST" class="flex flex-col p-36">
                    @csrf



                    <label class=" text-indigo-950 m-4" for="nome_vocalista">Qual o seu nome ?</label>
                    <input type="text" name="nome_vocalista">

                    <label class="text-indigo-950 m-4" for="nome_louvor">Louvor</label>
                    <input type="text" name="nome_louvor" >

                    <label class="flex flex-row gap-2 text-indigo-950 m-4" for="nome_versao_louvor" >
                        <i class="fa fa-youtube-play" style="font-size:24px; color:red"></i> Versão
                    </label>
                    <input type="text" name="nome_versao_louvor" placeholder="Cadastre o video link do youtube">

                    <label  class="text-indigo-950 m-4" for="tonalidade">Tonalidade</label>
                    <select name="tonalidade" for="tonalidade">
                        <option value="C">C</option>
                        <option value="Cm">Cm</option>
                        <option value="C#">C#</option>
                        <option value="C#m">C#m</option>

                        <option value="Db">Db</option>
                        <option value="D">D</option>
                        <option value="Dm">Dm</option>
                        <option value="D#">D#</option>
                        <option value="D#m">D#m</option>


                        <option value="Ebm">Ebm</option>
                        <option value="Eb">Eb</option>
                        <option value="E">E</option>
                        <option value="Em">Em</option>

                        <option value="F">F</option>
                        <option value="Fm">Fm</option>
                        <option value="F#">F#</option>

                        <option value="G">G</option>
                        <option value="Gm">Gm</option>
                        <option value="G#">G#</option>
                        <option value="G#m">G#m</option>

                        <option value="Ab">Ab</option>
                        <option value="A">A</option>
                        <option value="Am">Am</option>
                        <option value="A#">A#</option>
                        <option value="A#m">A#m</option>

                        <option value="Bbm">Bbm</option>
                        <option value="B">B</option>
                        <option value="Bm">Bm</option>
                        <option value="Bb">Bb</option>
                    </select>

                    <br>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button> <br>
                    <a href="{{ route('vocalistas.create') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
