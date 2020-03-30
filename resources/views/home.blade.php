@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row my-2 justify-content-center">
		<h3 class="font-weight-bold">Linear Programming</h3>
	</div>
	<form class="row justify-content-center" id="linear">
		<div class="col-8 my-2">
			<div class="card">
				<div class="card-body">
<<<<<<< HEAD
					<div class="card-title"><h4>About the Problem</h4></div>
					<div class="form-row">
						<!-- Problem Title -->
						<div class="col-12">
							<div class="md-form md-outline">
								<input type="text" id="title" class="form-control mr-sm-2 text-center" min="1">
								<label for="title">Title</label>
=======
					<div class="card-title"><h4>Problem Description</h4></div>
					<form id="createTable">
						<div class="form-row">
							<!-- Problem Title -->
							<div class="col-12">
								<div class="md-form md-outline">
									<input type="text" id="title" name="title" class="form-control mr-sm-2 text-center" min="1">
									<label for="title">Title</label>
								</div>
							</div>
							<!-- No. of Variables -->
							<div class="col-md-6">
								<div class="md-form md-outline">
									<input type="number" id="vars" name="vars" class="form-control mr-sm-2 text-center" min="1">
									<label for="vars">Variables</label>
								</div>
							</div>
							<!-- No. of Constraints -->
							<div class="col-md-6">
								<div class="md-form md-outline">
									<input type="number" id="cons" name="cons" class="form-control mr-sm-2 text-center" min="1">
									<label for="cons">Constraints</label>
								</div>
							</div>
							{{-- Problem Type --}}
							<div class="col-md-6 select-outline">
								<select id="type" name="type" class="mdb-select md-form md-outline colorful-select dropdown-primary">
									<option value="Maximize">Maximize</option>
									<option value="Minimize">Minimize</option>
								</select>
								<label>Type</label>
							</div>
							{{-- Method --}}
							<div class="col-md-6 select-outline">
								<select id="method" name="method" class="mdb-select md-form md-outline colorful-select dropdown-primary">
									<option value="Simplex">Simplex</option>
									<option value="Two-Phase">Two-Phase</option>
									<option value="Big M">Big M</option>
									<option value="Dual Simplex">Dual Simplex</option>
								</select>
								<label>Method</label>
>>>>>>> d17573bd8c2e0860f86a725ca57f6bbfe55ade10
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
								<option value="1">Simplex</option>
								<option value="2">Two-Phase</option>
								<option value="3">Big M</option>
								<option value="4">Dual Simplex</option>
							</select>
							<label>Method</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<!-- Editable table -->
			<div id="card_input" class="card">
				<div class="card-body">
<<<<<<< HEAD
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
					<div class="table-responsive table-bordered">
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
=======
                    <div class="card-title"><h4>Input Data</h4></div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
>>>>>>> d17573bd8c2e0860f86a725ca57f6bbfe55ade10
					<div class="form-row">
						<button class="btn btn-info">Next</button>
					</div>
				</div>
			</div>
			<!-- Editable table -->
		</div>
	</form>
</div>
@endsection
