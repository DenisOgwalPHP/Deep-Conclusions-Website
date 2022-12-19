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
                        <h4>Contact Messages</h4>
                     </div>
                     <div class="panel-body">
                         @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                         @endif
                         <table class="table table-striped">
                             <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                 </tr>
                             </thead>
                             <tbody>
                                @php
                                $i = 1;
                            @endphp
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->comment }}</td>
                                    <td>{{ $contact->created_at }}</td>

                                    <td>
                                        <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteContact({{ $contact->id }})" style="margin-left: 10px"><i class="fa fa-times fa-1x text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                             </tbody>
                         </table>
                             {{ $contacts->links() }}

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
