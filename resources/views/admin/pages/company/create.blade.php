@extends('admin.layout.master')

@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">New Company</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatibus iusto, similique quas vero consequatur doloremque officia maiores. Neque magni culpa quaerat aliquam tempora autem. Veritatis, tenetur. Commodi, laudantium vel? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea porro voluptates blanditiis totam pariatur minus tempore possimus tenetur necessitatibus vitae at, enim, adipisci eos provident officiis architecto alias iusto eligendi.</p>



    <!-- DataTales Example -->
    <form method="POST" action ="{{ route('admin.company.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">Create New company</h6>
        </div>
        <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="name" class="form-control" id="exampleInputEmail1">
                  <small id="emailHelp" class="form-text text-muted">Insert your name.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input name="address" type="name" class="form-control" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Insert your address.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">website</label>
                    <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input name="phone" type="number" class="form-control" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Insert number phone.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">logo</label>
                    <input name="logo" type="file" class="form-control-file" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Insert your logo.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cover liter</label>
                    <input name="cover" type="file" class="form-control-file" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Insert file cover.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input name="description" type="name" class="form-control" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Insert your description.</small>
                  </div>

                  <input style="margin-top: 20px;" type="submit" class="btn btn-primary" value="Save">
              </form>
        </div>
    </div>
</form>
</div>
@endsection


