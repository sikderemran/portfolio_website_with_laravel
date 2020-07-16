@extends('admin.index')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>url</th>
                                    <th>image</th>
                                    <th>date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($project_data as $project_data)
                                <tr class="tr-shadow">
                                    <td>
                                        <span class="status--process">{{$project_data->id}}</span>
                                    </td>
                                    <td>{{$project_data->title}}</td>
                                    <td class="desc">{{$project_data->url}}</td>
                                    <td>{{$project_data->image}}</td>
                                    <td>
                                        <span class="status--process">{{$project_data->created_at}}</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{route('project_edit',$project_data->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="{{route('project_delete',$project_data->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')