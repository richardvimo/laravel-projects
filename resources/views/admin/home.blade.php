@extends('layouts.app')

@section('title',' | Home ADMIN')


@section('teacherStylesheets')
    <link rel="stylesheet" href="{{ URL::asset('css/teacherStylesheets.css') }}">
@endsection


@include('layouts.partials._navAdmin')


@section('content')
<div class="container">
    <div class="row">
        {{-- barra de navegacion --}}
        <nav id="sideNav">
          <ul>
            <li><a id="targetCategories" href="#">Categories</a></li>
            <li><a id="targetSubCategories" href="#">Subcategories</a></li>
            <li><a id="targetSubject" href="#">Subject</a></li>
            <li><a id="targetManageRoles" href="#">ManageRoles</a></li>
          </ul>
        </nav>

        {{-- icono del menu toogle --}}
        <div id="menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
    </div>


    <div class="row contenido">       
        <div class="panel panel-default">
            <div class="panel-heading">ADMIN Dashboard</div>



            <div class="panel-body"> 
                
                <div id="message" class="alert alert-success alert-dismissible" style="display: none;"></div>
                
                <div id="target" class="row">
                    <div class="col-md-8 categoriesContainer">
                        <h1 class="text-center">Categories</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <div id="load" style="position: relative;">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <button class="edit-modal btn btn-info btn-sm" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-toggle="modal" data-target="#editCategoryModal"><i class="fa fa-edit"></i> Edit</button>
                                                <button class="delete-modal btn btn-danger btn-sm" data-id="{{ $category->id }}" data-name="{{ $category->name }}"><i class="fa fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </div>
                            </tbody>
                        </table>
                        
                        <div class="text-center">
                            {!! $categories->render() !!}    
                        </div>
                    </div> <!-- end of .col-md-8 categoriesContainer-->

                    <div class="col-md-4">
                        <div class="well">
                            {!! Form::open(['action' => 'CategoryController@store','method' => 'POST', 'id' => 'form-insert-categories']) !!}
                                <h2>New Category</h2>
                                {{ Form::label('name', 'Name:') }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}

                                {{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                            
                            {!! Form::close() !!}
                        </div>
                    </div> <!-- end of .col-md-4 -->
                </div> {{-- row#target para la Category --}}
            </div>
        </div>
    </div>
</div>

{{-- Edit modal --}}
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="editCategoryModalLabel">New Category</h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger avatar_alert" role="alert" style="display: none">
                  <ul></ul>
            </div>
            {{ Form::open(['url' => '#','method' => 'post','id' => 'edit-form']) }}
                <div class="control-group">
                    {{ Form::label('name', 'Name', ['class' => 'control-label'])}}
                    <div class="controls">
                        {{ Form::text('name', null, ['class' => 'span5', 'placeholder' => 'Name', 'id' => 'name'])}}
                    </div>
                </div>
            {{ Form::close()}}
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="updateButton">Confirm</button>
            </div>
          </div>
        </div>
    </div>
</div>
{{-- End Edit Modal --}}



<hr>

<div class="container" style="width: 100%;">
    <div class="row">
        @include('.partials._footer')        
    </div>
</div>
@endsection



@section('scripts')

    {!! Html::script('js/scriptCategories.js') !!}

    {!! Html::script('js/teacherScript.js') !!}

@endsection