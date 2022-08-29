@extends('layout.layout')
@section('title') About @endsection
@section('pageName')
Member Login
@endsection
@section('content')

<script language=javascript>
            function checkform() {
                if (document.mainform.username.value == '') {
                    alert("Please type your username!");
                    document.mainform.username.focus();
                    return false;
                }
                if (document.mainform.password.value == '') {
                    alert("Please type your password!");
                    document.mainform.password.focus();
                    return false;
                }
                return true;
            }
        </script>


        <div class="inside_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-container loginpage">
                            <center>
                                <img src="styles/images/loginicon.png">
                            </center>
                            <form method=post name=mainform onsubmit="return checkform()" action="{{route('loginauth')}}">
                                @csrf
                                <input type="hidden" name="form_id" value="16295454579613">
                                
                                <input type="hidden" name="form_token" value="ebffb4101ebd12ee840c7a7ef79a1a0d">
                                    <input type=hidden name=a value='do_login'>
                                    <input type=hidden name=follow value=''>
                                    <input type=hidden name=follow_id value=''>
                                    <table cellspacing=4 cellpadding=4 border=0 width="100%">
                                        <tr>
                                            <td><span class="user"><input type="text" name=username value='' class=inpts size=30 autofocus="autofocus" placeholder="Username"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="password"><input type=password name=password value='' class=inpts size=30 placeholder="Password"></span></td>
                                        </tr>

                                        <tr>
                                            <td align="center">
                                                <input type=submit value="Login" class=sbmt>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="45" align="center" valign="bottom">
                                                <span style="color:red">{{$errors->first()}}</span>
                                                <div class="existing_user"><a href="index8083.html?a=forgot_password">Forgot your password?</a></div>
                                            </td>
                                        </tr>
                                    </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection