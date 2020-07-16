@extends('admin.index')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Congratulations</strong> it's an another project
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('project_edit_save',$project_data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Text Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input value="{{$project_data->title}}" type="text" id="text-input" name="title" placeholder="Text" class="form-control" required >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Text Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input value="{{$project_data->url}}" type="text" id="text-input" name="url" placeholder="Text" class="form-control" required >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    {{$project_data->image}}
                                        <input value="" type="file" id="file-input" name="image" class="form-control-file" required >
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection