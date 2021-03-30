@extends('Book.layout')

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
                        <select name="fom" onchange="location = this.value;">
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
                            <option value="booktype">BookType</option>
                        </select>
                    </div>

                    <br><br>
                    <table border=1 align="center">
                        <font size=7><B><u>Book</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('book.create') }}">Create Book</a>
                        <br><br>

                        <tr align="center">
                            <td width="100">CodeBook</td>
                            <td width="200">BookName</td>
                            <td width="100">TypeCode</td>
                            <td width="50">Price</td>
                            <td width="50">Stock</td>
                            <td width="150">Author</td>
                            <td>Note</td>
                            <td width="100">Operation</td>
                        </tr>
                        @foreach($book as $B)
                        <tr align="center">
                            <td>{{ $B->BookCode }}</td>
                            <td>{{ $B->BookName }}</td>
                            <td>{{ $B->BookTypeCode }}</td>
                            <td>{{ $B->BookPrice }}</td>
                            <td>{{ $B->BookStock }}</td>
                            <td>{{ $B->BooktAuthor }}</td>
                            <td align="left">{{ $B->BookNote }}</td>
                            <td>
                                <form action="{{ route('book.destroy',$B->BookCode) }}" method="POST">
                                    <a href="{{ route('book.edit',$B->BookCode) }}"><i class='fas fa-edit'></i></a>
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