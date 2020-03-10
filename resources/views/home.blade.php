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
									<input type="text" id="title" class="form-control mr-sm-2 text-center" min="1">
									<label for="title">Title</label>
								</div>
							</div>
							<!-- No. of Variables -->
							<div class="col-md-6">
								<div class="md-form md-outline">
									<input type="number" id="vars" class="form-control mr-sm-2 text-center" min="1">
									<label for="vars">Variables</label>
								</div>
							</div>
							<!-- No. of Constraints -->
							<div class="col-md-6">
								<div class="md-form md-outline">
									<input type="number" id="cons" class="form-control mr-sm-2 text-center" min="1">
									<label for="cons">Constraints</label>
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
					<div id="table" class="table-editable">
						<table id="tableau" class="table table-bordered table-responsive-md table-striped text-center" width="100%">
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
	</div>

</form>
</div>
</div>
</div>
@endsection
