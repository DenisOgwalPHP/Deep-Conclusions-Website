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
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                            <div class="col-md-6 nav-link active"><h3> All Categories</h3></div>
                            <div class="col-md-4" style="float: right;"><a href="{{ route('admin.addcategory') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Category</a></div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcategory', ['category_slug'=> $category->slug]) }}" ><i class="fas fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left: 20px"><i class="fas fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $categories->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
