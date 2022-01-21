@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger" >
                            <ul >
                            @foreach($errors->all() as $error)
                                <li >{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    {{--@if($errors->any())--}}
                        {{--<div class="alert alert-danger">--}}
                            {{--<ul class="list-group">--}}
                                {{--@foreach($errors->all() as $error)--}}
                                    {{--<li class="list-group-item">--}}
                                        {{--{{ $error }}--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <form action="{{route('todo/update',$todo->id)}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name_form" value="{{ $todo->name }}" >
                        </div>
                        <div class="form-group">
                            <textarea name="description_form" placeholder="Description" cols="5" rows="5" class="form-control">{{ $todo->description }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
