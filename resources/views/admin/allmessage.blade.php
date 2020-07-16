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
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>date</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($message as $message)
                                <tr class="tr-shadow">
                                    <td>
                                        <span class="status--process">{{$message->id}}</span>
                                    </td>
                                    <td>{{$message->name}}</td>
                                    <td class="desc">{{$message->email}}</td>
                                    <td>
                                        <span class="status--process">{{$message->message}}</span>
                                    </td>
                                    <td>
                                        <span class="status--process">{{$message->created_at}}</span>
                                    </td>
                                    <td>
                                        @if($message->status==0)
                                            <span class="status--process">unseen</span>
                                        @else
                                        <span class="status--process">seen</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{route('message_seen',$message->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
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