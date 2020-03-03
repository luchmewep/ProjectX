@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">

				<!-- Card image -->
			{{-- <div class="view overlay">
				<img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
				alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div> --}}

			<!-- Card content -->
			<div class="card-body">

				<!-- Title -->
				<h4 class="card-title text-center">Simplex Algorithm</h4>
				<!-- Text -->
				<p class="card-text"></p>
				<div class="row">
					<div class="col-3">
						<label for="vars"># of Variables</label>
						<div class="def-number-input number-input safari_only">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
							<input id="vars" class="quantity" min="0" name="quantity" value="1" type="number">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
						</div>
					</div>
					<div class="col-3">
						<label for="cons"># of Constraints</label>
						<div class="def-number-input number-input safari_only">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
							<input id="cons" class="quantity" min="0" name="quantity" value="1" type="number">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<table class="table table-sm">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
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
								</tr>
							</tbody>
						</table>

					</div>
				</div>
				<!-- Button -->
				<a href="#" class="btn btn-primary">Button</a>

			</div>

			<!-- Card footer -->
			<div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
				<ul class="list-unstyled list-inline font-small">
					<li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
					<li class="list-inline-item pr-2"><a href="#" class="white-text"><i
						class="far fa-comments pr-1"></i>12</a></li>
						<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
						</i>21</a></li>
						<li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
					</ul>
				</div>

			</div>
			<!-- Card -->
		</div>
	</div>
</div>
@endsection
