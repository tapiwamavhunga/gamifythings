@extends('layouts.v_template')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Badge {{ $badge->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/badges') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/badges/' . $badge->id . '/edit') }}" title="Edit Badge"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/badges' . '/' . $badge->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Badge" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $badge->id }}</td>
                                    </tr>
                                    <tr><th> Badge </th>
                                        <td> <img src="{{asset('/folder/images/'.$badge->image)}}" style="width: 100px;">

                                       

                                         </td>
                                    </tr>
                                    <tr><th> Title </th>
                                        <td> {{ $badge->title }} </td>
                                    </tr>
                                    <tr><th> Content </th>
                                        <td> {{ $badge->content }} </td></tr>
                                 
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
