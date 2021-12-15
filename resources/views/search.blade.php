@extends('layout')

@section('content')
    <div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-12">

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                    </thead>
                    <tbody>
                    <h1 class="my-4">Результаты поиска по:
                        <small>{{$s}}</small>
                    </h1>
                    @foreach($search as $elem)
                        <tr>
                            <td>{{$elem->name}}</td>
                            <td>{{$elem->author}}</td>
                            <td>{{$elem->created_at}}</td>
                            <td><a download href="storage/{{$elem->file}}"><img  src="{{url('/file2.png')}}" width="20" class="img-fluid" ></a>
                                <a  href="storage/{{$elem->file}}"><img src="{{url('/file1.jpg')}}" width="20" class="img-fluid" ></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div><!-- ./table-responsive-->

        </div><!-- ./col-md-12-->
    </div>
    </div><!-- ./row-->
@endsection
