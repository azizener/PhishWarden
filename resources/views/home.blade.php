@extends('layouts.Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col-md-12">
                <h4>Admin panel</h4>
            </div>
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
            <h4><small>Feedbacks</small></h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>URL/Message</th>
                            <th>Result</th>
                            <th class="text-right">User feedback</th>
                            <th class="text-right">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td class="text-center">{{$row->id}}</td>
                            <td>{{$row->url}}</td>
                            <td>{{$row->result}}</td>
                            <td>{{$row->feedback}}</td>
                            <td>{{$row->created_at}}</td>
                        </tr> 
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
