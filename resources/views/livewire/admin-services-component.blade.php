<div>
    <div class="text-left iq-breadcrumb-one iq-bg-over black">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 text-left align-self-center">
              <nav aria-label="breadcrumb" class="text-left">
                <h2 class="title">Blogs</h2>
                <ol class="breadcrumb main-bg">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active">Blogs</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-right wow fadeInRight">
              <img
                src="{{ asset('assets/images/about-us/04.png') }}"
                class="img-fluid float-right"
                alt="banner"
              />
            </div>
          </div>
        </div>
    </div>
     <div class="container" style="padding: 30px 0;  margin-top:100px;">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-md-6"><h4>All Service</h4></div>
                             <div class="col-md-6"><a href="{{ route('admin.addservice') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Service</a></div>
                         </div>
                     </div>
                     <div class="panel-body">
                         @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                         @endif
                         <table class="table table-striped">
                             <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Image</th>
                                     <th>Name</th>
                                     <th>Date</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($services as $service)
                                     <tr>
                                         <td>{{ $service->id }}</td>
                                         <td><img src="{{ asset('assets/images/services') }}/{{ $service->image }}" width="60" height="60" alt="{{ $service->name }}"></td>
                                         <td>{{ $service->name }}</td>
                                         <td>{{ date('d F, Y', strtotime( $service->created_at)) }}</td>
                                         <td>
                                             <a href="{{ route('admin.editservice', ['service_slug'=> $service->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                             <a href="#" onclick="confirm('Are you sure, You want to delete this service') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                         </td>

                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>
                             {{ $services->links() }}

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
