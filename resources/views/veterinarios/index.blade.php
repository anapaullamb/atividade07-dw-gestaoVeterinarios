<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Veterinarios", 'rota' => "veterinarios.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Veterinarios @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist 
                :titulo="['Veterinario']" 
                :route="['veterinarios']" 
                :header="['ID', 'CRMV', 'NOME', 'ESPECIALIDADE', 'AÇÕES']" 
                :data="$dados"
            />

        </div>
    </div>
@endsection