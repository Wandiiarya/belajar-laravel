@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Brand') }}</div>

                <div class="card-body">
                    <a href="{{route('brand.create')}}"class="btn btn-primary">Add Data</a>

                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Name Brand</th>
                                <th scope="col">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ( $brand as $data )
                             <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->name_brand}}</td>
                                <td>
                                   <a href=""><button type="button" class="btn btn-outline-success">Edit</button></a>
                                   <a href="{{route('brand.show',$data->id)}}"><button type="button" class="btn btn-outline-warning">Show</button></a>
                                    <a href=""><button type="button" class="btn btn-outline-danger">Delet</button></a>

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
