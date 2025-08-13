@extends('layout')

@section('title', 'Importação')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-4 mb-4">Importação</h1>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('instalacaofisica.importar') }}" enctype="multipart/form-data" class="card p-4 shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="arquivo" class="form-label">Escolha o arquivo CSV</label>
                <input class="form-control" type="file" id="arquivo" name="arquivo" accept=".csv" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Importar Planilha</button>
        </form>
    </div>
</div>
@endsection
