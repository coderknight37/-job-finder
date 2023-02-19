@extends('layouts.guest.master')
@section("content")
<div class="py-5 mb-5 container-xxl bg-dark page-header">
    <div class="container pt-5 pb-4 my-5">
        <h1 class="mb-3 text-white display-3 animated slideInDown">Job List</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">Job List</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<livewire:list-job/>


@stop
