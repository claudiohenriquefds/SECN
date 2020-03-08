@extends('Secn.secn')

@section('content')
<div class="container">
	<h1 style="font-family: 'Squada One', cursive;" class="display-4 text-black mt-1 mb-2 text-center">Lista de alunos</h1>
	<hr class="divider">
	<div class="container">
		<script type="text/javascript">
			$(document).ready(function() {
    			$('#alunos').DataTable();
			} );
		</script>
		
			<table class="display" id="alunos">
			<thead>
				<tr>
					<th scope="col">Número</th>
					<th scope="col">Nome</th>
      				<th scope="col">Email</th>
      				<th scope="col">Matrícula</th>
      				<th scope="col">Modalidade</th>
      			</tr>
			</thead>
			<tbody  id="value">
				@foreach($alunos as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->nome}}</td>
					<td>{{$a->email}}</td>
					<td>{{$a->matricula}}</td>
					<td>{{$a->modalidade}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<script>
			var list = [];
			function Sortear(){
				var dados = (jQuery("#value tr").length)-1;
				var valid = true;
				while(valid){
					var aleat = (Math.floor(Math.random() * 235)) + 1;
					if(list.includes(aleat) == false){
						list.push(aleat);
						document.getElementById('number').innerHTML = aleat;
						// alert(aleat);
						valid = false;
						$("#ExemploModalCentralizado").modal({
						    show: true
					  	});
					}
				}

			}
		</script>
		<div class="container text-center">
			<hr class="divider">
			<button class="btn btn-outline-dark" onClick="Sortear()">Sortear</button>
			<p class="valor"></p>
		</div>

		
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Numero Sorteado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p id="number"></p>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

@endsection