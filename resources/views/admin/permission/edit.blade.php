@extends('layouts.admin.master')
@section('content')
    <form action="{{url('permission/'.$per->id)}}" method="post">
        <div class="form-group">
            <input type="text" value="{{$per->name}}" name="name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" value="{{$per->display_name}}" name="display_name" class="form-control">
        </div>
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">

        <div class="form-group">
            <textarea   name="description" class="form-control">{{$per->description}}</textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Update Permission" class="btn btn-success">
        </div>
        <div class="form-group">
            <a href="{{url('permission')}}" class="btn btn-danger">Back</a>
        </div>

    </form>

    @stop