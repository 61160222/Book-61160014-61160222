@extends('OrderDetail.layout')

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
                        <font size=7><B><u>Order Datail</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('orderdetail.create') }}">Create OrderDetail</a>
                        <br><br>

                        <tr align="center">
                            <td width="150">Member ID</td>
                            <td width="150">OrderNumber</td>
                            <!-- <td width="150">Total Unit</td> -->
                            <td width="150">Delivered</td>
                            <td width="200">Operation</td>
                        </tr>
                        @foreach($orderdetail as $OD)
                        <tr align="center">
                            <td>{{ $OD->Mem_ID }}</td>
                            <td>{{ $OD->OrderNumber }}</td>
                            <!-- <td>{{ $OD->OrderUint }}</td> -->
                            <td>{{ $OD->Delivered }}</td>
                            <td>
                                <form action="{{ route('orderdetail.indelivered') }}" method="POST">
                                    <input type=hidden name=OrderNumber value="{{ $OD->OrderNumber }}">
                                    @csrf
                                    @method("GET")
                                    <button type="submit">Check Delivered</button>
                                </form>
                            </td>
                           
                          
                            @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection