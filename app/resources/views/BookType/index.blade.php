@extends('BookType.layout')

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;500&family=Prompt:wght@300;400&display=swap"
    rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <font face="Prompt">
                    <br><br>
                    <div align="center">
                        <label for="page">Choose a page :</label>
                        <select name="form" onchange="location = this.value;">
                            <option value="">- Choose -</option>
                            <option value="member">Member</option>
                            <option value="book">Book</option>
                            <option value="order">Order</option>
                        </select>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <label for="about">Choose a about :</label>
                        <select name="forma" onchange="location = this.value;">
                            <option value="">- About -</option>
                            <option value="book">Book</option>
                            <option value="booktype">Book Type</option>
                        </select>
                    </div>
                    <br><br>
                    <table border=1 align="center">
                        <font size=7><B><u>Book Type</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('booktype.create') }}" align="right">Create
                            BookType</a>
                        <br><br>

                        <tr align="center">
                            <td width="100">BookTypeCode</td>
                            <td width="200">BookTypeName</td>
                            <td width="250">Rate</td>
                            <td width="100"></td>
                            <td width="200">Operation</td>
                        </tr>
                        @foreach($booktype as $BT)
                        <tr align="center">
                            <td>{{ $BT->BookTypeCode }}</td>
                            <td>{{ $BT->BookTypeName }}</td>
                            <td>{{ $BT->Rate }}</td>
                            <td><form action="{{ route('booktype.checkrate') }}" method="POST">
                                    <input type=hidden name=BookTypeCode value="{{ $BT->BookTypeCode }}">
                                    @csrf
                                    @method("GET")
                                    <button type="submit">Check Rate</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('booktype.destroy',$BT->BookTypeCode) }}" method="POST">
                                    <a href="{{ route('booktype.edit',$BT->BookTypeCode) }}"> <i
                                            class='fas fa-edit'></i></a>
                                    <a>&nbsp;</a>
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit"><i class='fas fa-cut'></i></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </font>
            </div>
        </div>
    </div>
</div>
@endsection