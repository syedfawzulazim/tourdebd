@extends('frontend.layouts.logreg')

@section('content')


<div class="pa-md-9 pa-5 mb-7 mx-auto theme--light elevation-0 border border-light my-3" style="max-width: 540px;">


  <form class="" action="index.html" method="post">

    <div class=" mt-5">

             <div class="text-center">
               <button type="button" class="btn btn-indigo py-3 my-2 mx-4 md-4" style="color:white;">
                 <i class="fab fa-facebook-f pr-1"></i>
                 <span>Log In with Facebook!!</span>
               </button>
             </div>

           </div>


    <br>

    <h5 class="text-center"> OR </h5>

    <br>

    <div class="input-group">
      <input type="text" aria-label="First name" class="form-control" placeholder="First Name">
      <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name">
    </div>
    <div class="input-group">
      <input type="email" aria-label="email" class="form-control" placeholder="E-mail">
    </div>
    <div class="input-group">
      <input type="password" aria-label="password" class="form-control" placeholder="Password">
    </div>

    <div class="text-center mt-1">
        <button type="button" class="btn btn-mdb-color">Sign Up</button>
    </div>


  </form>
<div class="text-center">
  <p class="caption pt-3">
    <label for="termsOfUse"><small>By proceeding, you agree to our</small> <a href="/terms" class=""><u><small>Terms of Use</small></u></a></label>
    <label for="privacyPolicy"> <small>and confirm you have read our</small> <a href="/privacy" class=""><u><small>Privacy Policy</small></u></a></label>
  </p>
</div>

<p class="body-2 text-center"> Already have an account?
  <a href="/login" class=""><u><b>Sign In</b></u></a>
</p>

</div>



@endsection
