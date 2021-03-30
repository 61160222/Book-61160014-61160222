@extends('Member.layout')

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
                    <font size=7><B>Create Member</B></font><br>
                    <form action="{{ route('member.store') }}" method="POST">
                        @csrf
                        <table height="400" width="800">
                            <tr>
                                <td border=1> ID : </td>
                                <td><input type=text name=Mem_ID style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Username : </td>
                                <td><input type=text name=Username style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Name : </td>
                                <td><input type=text name=Name style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Address : </td>
                                <td><input type=text name=Address style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> BirthDate : </td>
                                <td><input type=date name=BirthDate style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> Telphephon : </td>
                                <td><input type=text name=Telphephon style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Email : </td>
                                <td><input type=text name=Email style="width:500px; ">
                                </td>
                            </tr>
                            <tr>
                                <td> IDCard : </td>
                                <td><input type=text name=IDCard style="width:500px; ">
                                </td>
                            </tr>
                            
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('member.index') }}">Cancel</button>
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