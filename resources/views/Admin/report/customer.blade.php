@extends('customer.jobs.layout')
@section('content')

<div class="card-body">
    <a href="" class="btn btn-success btn-sm" title="Add New Contact">

    </a>
    <br/>
    <br/>
    <div class="table-responsive">

        <table class="table" style="padding: 10px;">
            <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Name</th>


            </tr>
            </thead>

            @foreach($customer as $data)

                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->name}}</td>

                    <td>

                    </td>
                </tr>
            @endforeach


        </table>
    </div>
@stop
