<?php ?>

@extends('master')




@section ('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['url' => 'foo/bar']) !!}
                
            {!! Form::close() !!}
        </div>
</div>

@stop