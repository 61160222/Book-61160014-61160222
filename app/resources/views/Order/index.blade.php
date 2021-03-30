@extends('Order.layout')

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
                            <option value="order">Order</option>
                            <option value="orderdetail">Order Detail</option>
                        </select>
                    </div>
                    <br><br>

                    <table border=1 align="center">
                        <font size=7><B><u>Order</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('order.create') }}">Create Order</a>
                        <br><br>
                        <tr align="center">
                            <td width="150">OrderNumber</td>
                            <td width="100">UserID</td>
                            <td width="150">Username</td>
                            <td width="300">Product</td>
                            <td width="100">Price</td>
                            <td width="100">Unit</td>
                            <td width="100">Total</td>
                            <td width="100">Operation</td>
                        </tr>
                        @foreach($order as $OR)
                        <tr align="center">
                            <td>{{ $OR->OrderNumber }}</td>
                            <td>{{ $OR->Mem_ID }}</td>
                            <td>{{ $OR->Username }}</td>

                            <td>{{ $OR->BookName }}</td>
                            <td>{{ $OR->BookPrice }}</td>
                            <td>{{ $OR->OrderUint }}</td>
                            <td>{{ $OR->Total=($OR->BookPrice*$OR->OrderUint) }}</td>
                            <td>
                                <form action="{{ route('order.destroy',$OR->OrderNumber) }}" method="POST">
                                    <a href="{{ route('order.edit',$OR->OrderNumber) }}"><i class='fas fa-edit'></i></a>
                                    <a>&nbsp;</a>
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit"><i class='fas fa-cut'></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">ผลรวม</td>
                            <td align="center">{{ $total }}</td>
                            <td align="center">บาท</td>
                        </tr>
                    </table>
                </font>
            </div>
        </div>
    </div>
</div>
@endsection