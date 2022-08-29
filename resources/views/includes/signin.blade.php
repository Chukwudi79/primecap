<div class="modal team-modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
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