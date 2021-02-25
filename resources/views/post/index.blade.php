@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-12 text-center">
            <h1>Laravel test</h1>
    </div>
</div>

<div class="row">
    <div class="table table-responsive">
        <table class="table table-bordered" id="posts_table">
            <tr>
                <th class="text-center" style="width: 150px">No</th>
                <th class="text-center">Title</th>
                <th class="text-center">Body</th>
                <th class="text-center">Create At</th>
                <th class="text-center">
                    <a href="#"  class="create-modal btn btn-sm btn-success">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </th>
            </tr>
            @csrf
       
            @foreach ($posts as $key => $value)
                <tr class="post{{$value->id}}">
                    <td class="text-center" >{{ $value->id }}</td>
                    <td class="text-center" >{{ $value->title }}</td>
                    <td class="text-center" >{{ $value->body }}</td>
                    <td class="text-center" >{{ $value->created_at }}</td>
                    <td class="text-center" >

                        <a href="#" class="show-modal btn btn-info btn-sm ml-1" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        
    </div>
    {{ $posts->links() }}
</div>
{{--form create Post--}}
<div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-justify">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" >
                    <div class="form-group row add">
                        <label for="title" class="control-label col-sm-2">Title :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Your Title Here" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="control-label col-sm-2">Body :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="body" name="body" placeholder="Your Body Here" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit" id="add">
                    <span class="glyphicon glyphicon-plus"></span>Save Post
                </button>

                <button class="btn btn-warning" type="button" data-dismiss="modal" id="cancel_modal">
                    <span class="glyphicon glyphicon-remove"></span>Close
                </button>
            </div>
        </div>
    </div>
</div>






{{--form delete and edit  Post--}}
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-justify">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="modal">

                    <div class="form-group">
                        <label for="id" class="control-label col-sm-2">ID :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fid" disabled>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group row add">
                        <label for="title" class="control-label col-sm-2">Title :</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="t" name="title2" placeholder="Your Title Here" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="control-label col-sm-2">Body :</label>
                        <div class="col-sm-10">
                            <textarea type="name" class="form-control" id="b" name="body" placeholder="Your Body Here" required></textarea>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>

                <div class="deletecontent">
                    Are you sure to delete "<strong class="title"></strong>" ?
                    <span class="hidden id"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn actionBtn" type="button" data-dismiss="modal" >
                    <span id="footer_action_button" class="glyphicon"></span>
                </button>

                <button class="btn btn-warning" type="button" data-dismiss="modal" id="cancel_modal">
                    <span class="glyphicon glyphicon"></span>Close
                </button>
            </div>
        </div>
    </div>
</div>




{{--form show  Post--}}
<div id="show" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-justify">
                <h4 class="">Post N° : <span class="modal-title"></span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">

                <p id="show-title"></p>
                <p id="show-body"></p>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal" id="cancel_modal">
                    <span class="glyphicon glyphicon"></span>Close
                </button>
            </div>
        </div>
    </div>
</div>












@endsection