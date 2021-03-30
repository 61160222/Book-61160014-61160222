@extends('Book.layout')

@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;500&family=Prompt:wght@300;400&display=swap"
    rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <font face="Prompt">
                    <br><br>
                    <font size=7><B>Create Book</B></font><br>
                    <form action="{{ route('book.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td border=1> CodeBook : </td>
                                <td><input type=text name=BookCode style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> BookName : </td>
                                <td><input type=text name=BookName style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> BookTypeID : </td>
                                <td><input type=text name=BookTypeCode style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Price : </td>
                                <td><input type=text name=BookPrice style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> Stock : </td>
                                <td><input type=text name=BookStock style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> Author : </td>
                                <td><input type=text name=BooktAuthor style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Note : </td>
                                <td><input type=text name=BookNote style="width:600px; ">
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('book.index') }}">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </font>
            </div>
        </div>
    </div>
</div>
@endsection