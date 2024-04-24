<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="{{ route('vocalistas.index') }}">LISTA DE LOUVORES CADASTRADOS</a>
            </span>
            </button>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-center pt-3.5 text-xl font-bold ">
                    {{ __('ÁREA DE CADASTRO') }}
                </div>

                <form action="{{ route('vocalistas.store') }}" method="POST" class="flex flex-col p-36">
                    @csrf


                    <div class="relative z-0 w-full mb-5 group">

                        <input type="text" name="nome_vocalista" id="nome_vocalista"
                            class="block py-2.5 px-3 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="nome_vocalista"
                            class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-4 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-10 ">Qual
                            o seu nome ?</label>
                        <span class="text-red-500 font-medium">
                            {{ $errors->has('nome_vocalista') ? $errors->first('nome_vocalista') : '' }}
                        </span>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">

                        <input type="text" name="nome_louvor" id="nome_louvor"
                            class="block py-2.5 px-3 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="nome_louvor"
                            class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-4 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-10 ">Nome do Louvor</label>
                        <span class="text-red-500 font-medium">
                            {{ $errors->has('nome_louvor') ? $errors->first('nome_louvor') : '' }}
                        </span>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">

                        <input type="text" name="nome_versao_louvor" id="nome_versao_louvor"
                            class="block py-2.5 px-3 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="nome_versao_louvor"
                            class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-4 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-2 peer-focus:scale-75 peer-focus:-translate-y-10 "><i class="fa fa-youtube-play text-center" style="font-size:18px; color:red"></i> Exemplo de link : https://www.youtube.com/embed/id_do_video</label>
                        <span class="text-red-500 font-medium">
                            {{ $errors->has('nome_versao_louvor') ? $errors->first('nome_versao_louvor') : '' }}
                        </span>
                    </div>


                    <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white" for="tonalidade">Tonalidade</label>
                    <span class="text-red-500 font-medium">
                        {{ $errors->has('tonalidade') ? $errors->first('tonalidade') : '' }}
                    </span>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tonalidade" for="tonalidade">
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
                    <button type="submit"
                        class="text-white bg-cyan-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
                    <br>
                    <a href="{{ route('vocalistas.create') }}"
                        class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
