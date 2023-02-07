@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/slider">Slider</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Slider

                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto Slider 1</th>
                                    <th>Foto Slider 2</th>
                                    <th>Foto Slider 3</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>
                                            <img src="{{ asset('banner/' . $row->slider1) }}" alt=""
                                                style="width: 200px; height:100px;" >
                                        </td>
                                        <td>
                                            <img src="{{ asset('banner/' . $row->slider2) }}" alt=""
                                                style="width: 200px; height:100px;" >
                                        </td>
                                        <td>
                                            <img src="{{ asset('banner/' . $row->slider3) }}" alt=""
                                                style="width: 200px; height:100px;">
                                        </td>
                                        <td>
                                            <a href="/tampilslider/{{ $row->id }}" class="btn  btn-warning"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
