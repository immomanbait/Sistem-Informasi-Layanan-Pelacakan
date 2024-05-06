@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Daftar Kerusakan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="align-middle text-center">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kerusakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">LP-001</td>
                      <td>
                           <h6 class="mb-0 text-sm">Laptop</h6>                            
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">HP-001</td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Handphone</h6>                           
                          </div>
                        </div>
                      </td>                      
                    </tr>
                    <tr>
                      <td class="align-middle text-center">PR-001</td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Printer</h6>                            
                          </div>
                        </div>
                      </td>                      
                    </tr>     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
