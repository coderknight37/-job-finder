@extends('admin.layout.master')

@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">New User</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatibus iusto, similique quas vero consequatur doloremque officia maiores. Neque magni culpa quaerat aliquam tempora autem. Veritatis, tenetur. Commodi, laudantium vel? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea porro voluptates blanditiis totam pariatur minus tempore possimus tenetur necessitatibus vitae at, enim, adipisci eos provident officiis architecto alias iusto eligendi.</p>



    <!-- DataTales Example -->
    <form method ="POST" action ="{{ route('admin.user.store') }}">
        @csrf
        @method('POST')
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">Create New Users</h6>
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
                    <label for="exampleInputEmail1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputScientific_Degree">Scientific Degree</label>
                    <select class="form-control" name="science">
                    <option>Choose the Scientific Degree</option>
                    @foreach($sciences as $science)
                        <option value="{{ $science->id }}">{{ $science->name }}</option>
                    @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Insert your Scientific Degree.</small>
                  </div>

                  <input style="margin-top: 20px;" type="submit" class="btn btn-primary" value="Save">
              </form>
        </div>
    </div>
</form>
</div>
@endsection


