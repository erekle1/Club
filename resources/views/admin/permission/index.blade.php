@extends('layouts.admin.master')
@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pers as $per)
        <tr>
            <td>{{$per->name}}</td>
            <td>{{$per->display_name}}</td>
            <td>{{$per->description}}</td>
            <td><a href="{{url('permission/'.$per->id.'/edit')}}">Edit</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>

    @stop

