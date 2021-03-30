@extends('OrderDetail.layout')
@section('content')
@foreach($orderdetail as $OD)
@endforeach
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
                    <font size=7><B>Create Order Detail</B></font><br>
                    <form action="{{ route('orderdetail.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td> Order Number : </td>
                                <td><input type=text name=OrderNumber value="{{ $OD->OrderNumber }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Delivered : </td>
                                <td><input type="radio" name=Delivered value="{{ $OD->Delivered }}">
                                    <label for="Y">Delivered</label>
                                    <input type="radio" name=Delivered value="{{ $OD->Delivered }}">
                                    <label for="N">Not-Delivered</label>
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary"
                                        href="{{ route('orderdetail.index') }}">Cancel</button>
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