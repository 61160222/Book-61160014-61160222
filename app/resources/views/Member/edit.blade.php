@extends('Member.layout')

@section('content')
@foreach($member as $Mem)
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
                    <font size=7><B>Edit Member</B></font><br>
                    <form action="{{ route('member.update',$Mem->Mem_ID) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table height="400" width="800">
                            <tr>
                                <td border=1> ID : </td>
                                <td><input type=text name=Mem_ID value="{{ $Mem->Mem_ID }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Username : </td>
                                <td><input type=text name=Username value="{{ $Mem->Username }}" style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> BoookTypeID : </td>
                                <td><input type=text name=Name value="{{ $Mem->Name }}" style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> Address : </td>
                                <td><input type=text name=Address value="{{ $Mem->Address }}" style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> BirthDate : </td>
                                <td><input type=date name=BirthDate value="{{ $Mem->BirthDate }}" style="width:500px;">
                                </td>
                            </tr>
                            <tr>
                                <td> Telphephon : </td>
                                <td><input type=text name=Telphephon value="{{ $Mem->Telphephon }}"
                                        style="width:500px;"></td>
                            </tr>
                            <tr>
                                <td> E-mail : </td>
                                <td><input type=text name=Email value="{{ $Mem->Email }}" style="width:500px; ">
                                </td>
                            </tr>
                            <tr>
                                <td> IDCard : </td>
                                <td><input type=text name=IDCard value="{{ $Mem->IDCard }}" style="width:500px; ">
                                </td>
                            </tr>
                            
                            <tr align="center">
                                <td colspan=2>
                                    <button class="btn btn-primary" href="{{ route('member.index') }}">Cancel</button>
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