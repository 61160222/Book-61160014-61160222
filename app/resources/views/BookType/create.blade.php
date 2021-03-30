@extends('BookType.layout')

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
                    <font size=7><B>Create Book Type</B></font><br>
                    <form action="{{ route('booktype.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td border=1> Book Type Code : </td>
                                <td><input type=text name=BookTypeCode style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Book Type Name : </td>
                                <td><input type=text name=BookTypeName style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Rate : </td>
                                <td><input type="radio" name=Rate value="G">
                                    <label for="G">G</label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name=Rate value="PG">
                                    <label for="PG">PG</label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name=Rate value="R">
                                    <label for="R">R </label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name=Rate value="NC-17">
                                    <label for="NC-17">NC-17</label>
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('booktype.index') }}">Cancel</button>
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