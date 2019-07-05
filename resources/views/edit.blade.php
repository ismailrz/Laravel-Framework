@extends('master')

@section('content')

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{Route('update',$student->id)}}" method="post" enctype="multipart/form-data">

  {{ csrf_field() }}

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName"   value="{{$student->fname}}"name="fname"class="form-control" placeholder="First name" required>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" value="{{$student->lname}}"name="lname"class="form-control" placeholder="Last name" required>
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" value="{{$student->email}}"name="email"class="form-control mb-4" placeholder="E-mail" required>

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" value="{{$student->password}}" name="password"class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" value="{{$student->mobile}}"name="mobile"class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Registration</button>

    <!-- Social register -->
    <p>or sign up with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->

@endsection
