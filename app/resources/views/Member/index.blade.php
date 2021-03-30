@extends('Member.layout')

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
                            <option value="member">Member</option>
                            <option value="shopping">Shopping</option>
                        </select>
                    </div>
                    <br><br>
                    <table border=1 align="center">
                        <font size=7><B><u>Member</u></B></font>
                        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="btn btn-primary" href="{{ route('member.create') }}">Create Member</a>
                        <br><br>
                        <tr align="center">
                            <td width="50">ID</td>
                            <td width="100">Username</td>
                            <td width="200">Name</td>
                            <td width="200">Address</td>
                            <td width="100">BirthDate</td>
                            <td width="100">Telphephon</td>
                            <td width="100">E-mail</td>
                            <td width="100">IDCard</td>
                            <td width="100">Operation</td>
                        </tr>
                        @foreach($member as $Mem)
                        <tr align="center">
                            <td>{{ $Mem->Mem_ID }}</td>
                            <td>{{ $Mem->Username }}</td>
                            <td>{{ $Mem->Name }}</td>
                            <td>{{ $Mem->Address }}</td>
                            <td>{{ $Mem->BirthDate }}</td>
                            <td>{{ $Mem->Telphephon }}</td>
                            <td>{{ $Mem->Email }}</td>
                            <td>{{ $Mem->IDCard }}</td>
                            <td>
                                <form action="{{ route('member.destroy',$Mem->Mem_ID) }}" method="POST">
                                    <a href="{{ route('member.edit',$Mem->Mem_ID) }}"><i class='fas fa-edit'></i></a>
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