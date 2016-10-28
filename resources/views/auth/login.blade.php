

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
            <div class="modal-body real-spa">
              <div class="login-grids">
                <div class="login">
                  <div class="login-right">
                    <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                       {{ csrf_field() }}
                      <h3>تسجيل الدخول</h3>
                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                               
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                              
                      <input id="password" type="password" class="form-control" name="password" required>

                               
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                              
                      <h4><a href="{{ url('/password/reset') }}">نسيت كلمة المرور</a> / <a href="#">انشاء كلمة مرورو جديدة</a></h4>
                      <div class="single-bottom">
          
  <input type="checkbox"  id="brand" value="">
                        <label for="brand"><span></span>تذكرني</label>
                      </div>
                      <input type="submit" value="تسجيل الدخول" >
                    </form>
                  </div>
                </div>
                <p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
          
</div>

            </div>
          </div>
        </div>
      </div>
      <!--signin-->
   