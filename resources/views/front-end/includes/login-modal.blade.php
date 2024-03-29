<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="title-default-bold mb-none">Login</div>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    {{ Form::open(['route'=>'customer-login','method'=>'POST']) }}
                        <label>Email address *</label>
                        <input name="email" type="text" placeholder="E-mail" />
                        <label>Password *</label>
                        <input name="password" type="password" placeholder="Password" />
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">Remember Me</label>  
                        </div>
                        <button class="default-big-btn" type="submit" value="Login">Login</button>
                        <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                        <label class="lost-password"><a href="#">Lost your password?</a></label>   
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>