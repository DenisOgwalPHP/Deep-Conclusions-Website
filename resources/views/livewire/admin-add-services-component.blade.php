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
                             <div class="col-md-6">
                                 Add New Service
                             </div>
                             <div class="col-md-6">
                                 <a href="{{ route('admin.services') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Services</a>
                             </div>
                         </div>
                     </div>
                     @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     @endif
                     <div class="panel-body">
                         <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addService">
                             <div class="form-group">
                                 <label for="" class="col-md-4 control-lable">Service Name</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                     @error('name')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="" class="col-md-4 control-lable">Service Slug</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                     @error('slug')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 </div>
                             </div>


                             <div class="form-group">
                                 <label for="" class="col-md-4 control-lable">Service Image</label>
                                 <div class="col-md-4">
                                     <input type="file"  class="input-file" wire:model="image">
                                     @if($image)
                                         <img src="{{ $image->temporaryUrl() }}" width="120" alt="">

                                     @endif
                                     @error('image')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="" class="col-md-4 control-lable">Description</label>
                                 <div class="col-md-12" wire:ignore>
                                     <textarea name="" id="description"  placeholder="Description" wire:model="description"></textarea>
                                     @error('description')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="" class="col-md-4 control-lable"></label>
                                 <div class="col-md-4">
                                     <Button type="submit" class="btn btn-primary">Submit</Button>
                                 </div>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @push('scripts')

   <script>
       $(function(){
           $('#description').summernote({
               placeholder: 'Add Description',
               height: 200,
               toolbar: [
               ['style', ['style']],
               ['font', ['bold', 'underline', 'clear']],
               ['color', ['color']],
               ['para', ['ul', 'ol', 'paragraph']],
               ['table', ['table']],
               ['insert', ['link', 'picture', 'video']],
               ['view', ['fullscreen', 'codeview', 'help']]
               ],
               callbacks: {
                   onChange: function(contents, $editable){
                       @this.set('description', contents);
                   }
               }
           });
       });
     </script>

@endpush
