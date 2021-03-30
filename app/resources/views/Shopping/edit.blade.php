@extends('Shopping.layout')

@section('content')
@foreach($shopping as $SP)
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
                    <font size=7><B>Edit Shopping</B></font><br>
                    <form action="{{ route('shopping.update',$SP->Mem_ID) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table height="400" width="800">
                            <tr>
                                <td border=1> ID : </td>
                                <td><input type=text name=Mem_ID value="{{ $SP->Mem_ID }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Name : </td>
                                <td><input type=text name=Name value="{{ $SP->Name }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Address : </td>
                                <td><input type=text name=Address value="{{ $SP->Address }}" style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> Telphephon : </td>
                                <td><input type=text name=Telphephon value="{{ $SP->Telphephon }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> E-mail : </td>
                                <td><input type=text name=Email value="{{ $SP->Email }}" style="width:500px; ">
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('shopping.index') }}">Cancel</button>
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