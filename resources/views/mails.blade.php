@extends('layouts.app')

@section('content')
<main>
    <div class="container-fluid mb-5">
      <!--Grid row-->
      <div class="row" {{-- style="margin-top: -100px;" --}}>
        <div class="col-8 offset-2">
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

    </div>

  </main>
@endsection
