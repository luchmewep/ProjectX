@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h3 class="font-weight-bold">Linear Programming</h3>
	</div>
	<form class="row justify-content-center" id="linear">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<div class="card-title"><h4>About the Problem</h4></div>
					<div class="form-row">
						<!-- Problem Title -->
						<div class="col-12">
							<div class="md-form md-outline">
								<input type="text" id="title" class="form-control mr-sm-2 text-center" min="1">
								<label for="title">Title</label>
							</div>
						</div>
						{{-- Problem Type --}}
						<div class="col-md-6 select-outline">
							<select id="type" class="mdb-select md-form md-outline colorful-select dropdown-primary">
								<option value="1">Maximize</option>
								<option value="2">Minimize</option>
							</select>
							<label>Type</label>
						</div>
						{{-- Method --}}
						<div class="col-md-6 select-outline">
							<select id="type" class="mdb-select md-form md-outline colorful-select dropdown-primary">
								<option value="Simplex">Simplex</option>
								<option value="Two-Phase">Two-Phase</option>
								<option value="Big M">Big M</option>
								<option value="Dual Simplex">Dual Simplex</option>
							</select>
							<label>Method</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<div class="card-title"><h4>Data Input</h4></div>
					<div class="form-row">
						{{-- No. of Variables --}}
						<div class="col-md-6">
							<div class="md-form md-outline">
								<input type="number" id="vars" class="form-control mr-sm-2 text-center" min="2">
								<label for="vars">Variables</label>
							</div>
						</div>
						{{-- No. of Constraints --}}
						<div class="col-md-6">
							<div class="md-form md-outline">
								<input type="number" id="cons" class="form-control mr-sm-2 text-center" min="2">
								<label for="cons">Constraints</label>
							</div>
						</div>
					</div>
					{{-- Table --}}
					<div class="table-responsive-xl table-bordered">
						<table class="table table-hover">
							<thead>
								<tr class="bg-success">
									{{-- <th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th> --}}
								</tr>
							</thead>
							<tbody>
								{{-- <tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td colspan="2">Larry the Bird</td>
									<td>@twitter</td>
								</tr> --}}
							</tbody>
						</table>
					</div>
					{{-- Submit --}}
					<div class="form-row">
						<button class="btn btn-info">Next</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection
