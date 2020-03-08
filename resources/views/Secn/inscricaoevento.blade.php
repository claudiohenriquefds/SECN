@extends('Secn.secn')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header bg-warning">{{ __('Cadastro') }}</div>
					<div class="card-body">
						<form method="POST" action="{{route('inscricaoeventostore')}}">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Nome</label><br>
								<input class="form-control" type="text" name="nomealuno" id="titulo" required>
							</div>
							<div class="form-group">
								<label>Matrícula</label><br>
								<input class="form-control" type="text" name="matriculaaluno" id="titulo" required>
							</div>
							<div class="form-group">
								<label>Email</label><br>
								<input class="form-control" type="email" name="emailaluno" id="titulo">
							</div>
							<div class="form-group">
								<label>Modalidade</label>
								<select class="form-control" id="modalidade" name="modalidade" required>
									<option selected disabled>Selecione uma opção</option>
									<option value="Médio">Médio</option>
									<option value="Superior">Superior</option>
									<option value="Subsequente">Subsequente</option>
								</select>
							</div>
							<button type="submit" class="btn btn-outline-dark" data-target="#confirmacao" data-toogle="modal">Inscrever</button>
							<a class="btn btn-outline-danger" href="{{route('inicio')}}">Cancelar</a>
						</form>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
@include('sweetalert::alert')
@endsection