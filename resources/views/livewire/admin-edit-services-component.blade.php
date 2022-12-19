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
                                   Edit Service
                               </div>
                               <div class="col-md-6">
                                   <a href="{{ route('admin.services') }}" style="color: whitesmoke"  class="btn btb-success pull-right"> All Services</a>
                               </div>
                           </div>
                       </div>
                       @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                       @endif
                       <div class="panel-body">
                           <form action="" class="form-horizontal"  wire:submit.prevent="updateService">
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-lable">Service Name</label>
                                   <div class="col-md-8">
                                       <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                       @error('name')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-lable">Service Slug</label>
                                   <div class="col-md-8">
                                       <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                       @error('slug')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror
                                   </div>
                               </div>


                               <div class="form-group">
                                   <label for="" class="col-md-4 control-lable">Service Image</label>
                                   <div class="col-md-8">
                                       <input type="file"  class="input-file" wire:model="newImage">
                                       @if($newImage)
                                           <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">

                                       @else
                                           <img src="{{ asset('assets/images/services') }}/{{ $image }}" width="120" alt="">

                                       @endif
                                       {{-- @error('newImage')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror --}}
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="" class="col-md-4 control-lable">Description</label>
                                   <div class="col-md-12" wire:ignore>
                                       <textarea name="description" id="description" class="description" placeholder="Description" wire:model="description">{!! $description !!}</textarea>
                                       @error('description')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-lable"></label>
                                   <div class="col-md-4">
                                       <Button type="submit" class="btn btn-primary">Update</Button>
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
       $(document).ready(function(){
           $('#description').summernote({
            //    placeholder: 'Add Description',
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
