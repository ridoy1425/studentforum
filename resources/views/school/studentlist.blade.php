@extends('welcome')
@section('content')
<div class="jumbotron">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Adress</th>                    
                    <th scope="col">Profession</th>
                    <th scope="col">Passing Year</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sinfo as $row)
                <tr>
                    <td>{{$row->s_name}}</td>
                    <td>{{$row->s_add}}</td>                    
                    <td>{{$row->s_prof}}</td>
                    <td>{{$row->s_pass}}</td>
                    <td><img src="{{ asset('public/uploads/s_image/'.$row->s_img) }}" style="height: 50px; width:70px;"></td>
                    <td>
                        {{-- <a href="{{route('school.view',[$row->id])}}" class="btn btn-secondary">View</a> --}}
                        <a href="{{route('school.edit',[$row->id])}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('school.delete',[$row->id])}}" class="btn btn-secondary">Delete</a>
                        
                    </td>
                </tr>
                @endforeach

               
            </tbody>
        </table>
         {{$sinfo->links()}} {{-- for pagination --}}
    </div>
</div>
@endsection