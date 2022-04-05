@extends('layouts.base')

@section('pageTitle','home page')

@section('content')

<div class="container" >

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Numero</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic )

                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->Nome}}</td>
                    <td>{{$comic->Numero}}</td>
                </tr>
                
            @endforeach
          
          
        </tbody>
      </table>

</div>
    

@endsection