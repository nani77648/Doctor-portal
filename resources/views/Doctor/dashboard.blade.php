@section('titlr','dashboard')
@extends('Doctor.Layout.Doc.header')

@section("content")

<div id="mySidenav" class="sidenav">
    <a href="javascript:" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#about">Appointment</a>
    {{-- <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a> --}}
  </div>


  <span onclick="openNav()">open</span>

    <div id="main">
        <table class="table">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Timing</th>
            </tr>
            @php
                $appoint = DB::table('appointment')->get();
                $i = 0;
            @endphp
            @foreach ($appoint as $apt)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$apt->name}}</td>
                    <td>{{$apt->email}}</td>
                    <td>{{$apt->name}}</td>
                    <td>{{$apt->timing}}</td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection

