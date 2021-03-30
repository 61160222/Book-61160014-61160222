@extends('Order.layout')

@section('content')
@foreach($order as $OR)
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
                    <font size=7><B>Edit Order</B></font><br>
                    <form action="{{ route('order.update',$OR->OrderNumber) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table height="400" width="800">
                            <tr>
                                <td> Member : </td>
                                <td><input type=text name=Mem_ID value="{{ $OR->Mem_ID }}" style="width:500px;" readonly></td>
                            </tr>
                            <tr>
                                <td> Order Number : </td>
                                <td><input type=text name=OrderNumber value="{{ $OR->OrderNumber }}" style="width:500px;" readonly></td>
                            </tr>
                            <tr>
                                <td> Book Code : </td>
                                <td><input type=text name=BookCodeO value="{{ $OR->BookCodeO }}"
                                        style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Book Name : </td>
                                <td><input type=text value="{{ $OR->BookName }}" style="width:500px;" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td> Book Price : </td>
                                <td><input type=text value="{{ $OR->BookPrice }}" style="width:500px;" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td> Order Uint : </td>
                                <td><input type=text name=OrderUint value="{{ $OR->OrderUint }}" style="width:500px;"></td>
                            </tr>

                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('order.index') }}">Cancel</button>
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