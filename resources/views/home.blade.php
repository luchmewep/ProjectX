@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row my-2 justify-content-center">
		<h3 class="font-weight-bold">Linear Programming</h3>
	</div>
	<div class="row justify-content-center">
		<div class="col-8 my-2">
			<div class="card">
				<div class="card-body">
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
							</div>
						</div>
						<!-- Submit -->
						<div class="form-row">
							<button type="submit" class="btn btn-info">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-8">
			<!-- Editable table -->
			<div class="card">
				<div class="card-body">
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
					<div class="form-row">
						<button class="btn btn-info">Next</button>
					</div>
				</div>
			</div>
			<!-- Editable table -->
		</div>
	</div>

</form>
</div>
</div>
</div>
@endsection
