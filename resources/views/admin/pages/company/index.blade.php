@extends('admin.layout.master')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">Company</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatibus iusto, similique quas vero consequatur doloremque officia maiores. Neque magni culpa quaerat aliquam tempora autem. Veritatis, tenetur. Commodi, laudantium vel? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea porro voluptates blanditiis totam pariatur minus tempore possimus tenetur necessitatibus vitae at, enim, adipisci eos provident officiis architecto alias iusto eligendi.</p>


    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">Companys</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>address</th>
                            <th>Date</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compaines as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td><img width="200" height="100" src="{{ asset("Administrator/company/logo/$company->logo") }}" alt=""></td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('admin.company.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                                <a  data-toggle="modal" data-target="#delete-company{{ $company->id }}" class="btn btn-danger">Delete</a>
                                @include("admin.pages.company.delete")
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
