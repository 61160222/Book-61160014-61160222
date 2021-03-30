@extends('Order.layout')

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
                    <font size=7><B>Create Order</B></font><br>
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td> Member : </td>
                                <td><input type=text name=Mem_ID style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> OrderNumber : </td>
                                <td><input type=text name=OrderNumber style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> CodeBook : </td>
                                <td><input type=text name=BookCodeO style="width:500px;"></td>
                            </tr>
                            <!-- <tr>
                                <td> BookName : </td>
                                <td><input type=text name=BookName style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Price : </td>
                                <td><input type=text name=BookPrice style="width:500px;"></td>
                            </tr> -->
                            <tr>
                                <td> Unit : </td>
                                <td><input type=text name=OrderUint style="width:500px;"></td>
                            </tr>
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('order.index') }}">Cancel</button>
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