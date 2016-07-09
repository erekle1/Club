@extends('layouts.admin.master')
@section('content')

    <form  action="{{url('admin/category')}}" method="post">
        <div class="col-md-12">
            <!-- Block Tabs Animated Fade -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    @foreach($locales as $key => $locale)
                        @if($key==0)
                    <li class="active">
                        <a href="#language{{$locale->id}}">{{$locale->title}}</a>
                    </li>
                        @else
                            <li>
                                <a href="#language{{$locale->id}}">{{$locale->title}}</a>
                            </li>
                        @endif
                    @endforeach

                </ul>

                <div class="block-content tab-content">
                    @foreach($locales as $key => $locale)
                        @if($key==0)
                    <div class="tab-pane fade in active" id="language{{$locale->id}}">

                    <input type="text" name="title[]">

                    </div>
                            @else

                        @endif
                    @endforeach



                </div>
            </div>
            <!-- END Block Tabs Animated Fade -->


        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label  class="form-control" for="parent">Parent</label>
                <select name="parent" class="form-control" id="parent">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{!! $category->firstTrans()->title !!}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" value="Save">
        </div>
    </form>

@stop