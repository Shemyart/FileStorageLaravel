@extends('layout')
@section('title')
Хранилище
@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
                <form method="post" action="/filestorage/public/insert" enctype="multipart/form-data" >
                    @csrf
                    <label for="exampleFormControlFile1">Выберите файл</label>
                    <input type="file" class="form-control-file" id="file" name="file">
                    <br>
                    <button type="submit" class="btn btn-primary mb-2" value="send">Отправить</button>
                </form>

            </div>
            <div class="col-md-12">

                <br>
                <form method="get" action="/filestorage/public/search">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="search" name="search" value="{{request()->search}}" placeholder="Поиск...">
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                        </div>
                    </div>
                </form>

            </div><!-- ./col-md-12-->

        </div><!-- ./row-->
        <div class="row mt-3 mb-3">
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Название</th>
                            <th scope="col">Автор</th>
                            <th scope="col">Дата добавления</th>
                            <th scope="col">Файл</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($file as $elem)
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

        </div><!-- ./row-->
    </div><!-- ./container-->

@endsection
