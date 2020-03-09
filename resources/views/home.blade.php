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
					<div class="card-title"><h4>Create Input Table</h4></div>
					<form>
						<div class="form-row">
							<!-- No. of Variables -->
							<div class="col">
								<div class="md-form md-outline">
									<input type="number" id="vars" class="form-control mr-sm-2 text-center" min="1">
									<label for="vars">Variable Count</label>
								</div>
							</div>
							<!-- No. of Constraints -->
							<div class="col">
								<div class="md-form md-outline">
									<input type="number" id="cons" class="form-control mr-sm-2 text-center" min="1">
									<label for="cons">Constraint Count</label>
								</div>
							</div>
						</div>
						<!-- Submit -->
						<div class="form-row">
							<button class="btn btn-info">Next</button>
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
					<div id="table" class="table-editable">
						<table class="table table-bordered table-responsive-md table-striped text-center">
							<thead>
								<tr>
									<th class="text-center">Person Name</th>
									<th class="text-center">Age</th>
									<th class="text-center">Company Name</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="pt-3-half" contenteditable="true">Madrid</td>
									<td class="pt-3-half">
										<span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
										<span class="table-down">
											<a href="#!" class="indigo-text">
												<i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i>
											</a>
										</span>
									</td>
									<td>
										<span class="table-remove">
											<button type="button"
											class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
										</span>
									</td>
								</tr>
								<!-- This is our clonable table line -->
							</tbody>
						</table>
					</div>
					<!-- Submit -->
					<div class="form-row">
						<button class="btn btn-info">Next</button>
					</div>
				</div>
			</div>
			<!-- Editable table -->
		</div>
		<div class="col-8 my-2">
			<div class="card">
				<div class="card-body text-center">
					<div class="card-title text-left"><h4>Choose Method</h4></div>
					<button type="button" class="btn btn-primary btn-rounded">Primary</button>
					<button type="button" class="btn btn-default btn-rounded">Default</button>
					<button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
					<button type="button" class="btn btn-success btn-rounded">Success</button>
					<button type="button" class="btn btn-info btn-rounded">Info</button>
					<button type="button" class="btn btn-warning btn-rounded">Warning</button>
					<button type="button" class="btn btn-danger btn-rounded">Danger</button>
				</div>
			</div>
		</div>
	</div>

</form>
</div>
</div>
</div>
@endsection
