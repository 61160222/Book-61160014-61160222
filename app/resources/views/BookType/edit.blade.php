@extends('BookType.layout')

@section('content')
@foreach($booktype as $BT)
@endforeach

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;500&family=Prompt:wght@300;400&display=swap"
    rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <font face="Prompt">
                    <br><br>
                    <font size=7><B>Edit Book Type</B></font><br>
                    <form action="{{ route('booktype.update',$BT->BookTypeCode) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table height="400" width="800">
                            <tr>
                                <td border=1> Book Type Code : </td>
                                <td><input type=text name=BookTypeCode value="{{ $BT->BookTypeCode }}"
                                        style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> BookTypeName : </td>
                                <td><input type=text name=BookTypeName value="{{ $BT->BookTypeName }}"
                                        style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Rate : </td>
                                <td><input type="radio" name=Rate value="{{ $BT->Rate }}">
                                    <label for="G">General </label>
                                    <input type="radio" name=Rate value="{{ $BT->Rate }}">
                                    <label for="PG">Parental Guidance</label>
                                    <input type="radio" name=Rate value="{{ $BT->Rate }}">
                                    <label for="R">Restricted </label>
                                    <input type="radio" name=Rate value="{{ $BT->Rate }}">
                                    <label for="NC">No one 17 and under admitted</label>
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('booktype.index') }}">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </font>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection