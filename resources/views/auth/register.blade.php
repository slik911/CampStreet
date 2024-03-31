<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Register</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,700,800" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="container-fluid">
    <div class="row signin">
        <div class="col-md-6 logo">
            <div class="container p-md-5">
                <form action="{{route('register')}}" method="post">
                @csrf
                <div class="row p-md-5">
            <center><img src="{{asset('assets/Logo.png')}}" alt=""></center>

                <div class="col-12 text-center mt-4">
                    <h3 style="font-weight:bold">Register</h3>
                    <p>Kindly register your campus street account</p>
                </div>
                <div class="col-6 mt-3">
                    <label for="">First Name</label>
                     <input type="text" class="form-control" id="first_name" name="first_name" placeholder="John">
                </div>
                 <div class="col-6 mt-3">
                    <label for="">Last Name</label>
                     <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Doe">
                </div>
                <div class="col-6 mt-4">
                    <label for="">Email Address</label>
                     <input type="email" class="form-control" id="first_name" name="first_name" placeholder="example@email.com">
                </div>
                 <div class="col-6 mt-4">
                    <label for="">Phone Number</label>
                     <input type="text" class="form-control" id="first_name" name="first_name" placeholder="+1 587 394 7424">
                </div>
                <div class="col-6 mt-4">
                        <label for="">Province</label>
                        <select class="form-select" name="" id="">
                            <option selected>Select one</option>
                            <option value="AB">Alberta</option>
                            <option value="BC">British Columbia</option>
                            <option value="MB">Manitoba</option>
                            <option value="NB">New Brunswick</option>
                            <option value="NL">Newfoundland and Labrador</option>
                            <option value="NS">Nova Scotia</option>
                            <option value="NT">Northwest Territories</option>
                            <option value="NU">Nunavut</option>
                            <option value="ON">Ontario</option>
                            <option value="PE">Prince Edward Island</option>
                            <option value="QC">Quebec</option>
                            <option value="SK">Saskatchewan</option>
                            <option value="YT">Yukon</option>
                        </select>
                </div>
                 <div class="col-6 mt-4">
                    <label for="">City</label>
                    <select class="form-select" name="" id="">
                        <option selected>Select one</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">Newfoundland and Labrador</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="NT">Northwest Territories</option>
                        <option value="NU">Nunavut</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="YT">Yukon</option>
                    </select>
                </div>
                <div class="col-6 mt-4">
                    <label for="">Password</label>
                     <input type="password" class="form-control" id="password" name="password">
                </div>
                 <div class="col-6 mt-4">
                    <label for="">Retype Password</label>
                     <input type="password" class="form-control" id="retype_password" name="retype_password">
                </div>
                <div class="col-12 mt-4">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for=""> Agree to <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #01b1e3">
                            Terms and condition?
                        </a> </label>

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="font-weight: 400">Terms and Condtion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="font-size:12px;">
                                        Welcome to Campus Street! These terms and conditions govern your use of our marketplace platform. By accessing or using our platform, you agree to be bound by these terms and conditions. Please read them carefully before using our services.
                                    </p>

                                    <dl style="font-size:12px;">
                                        <dt>Acceptance of Terms</dt>

                                        <dd>By accessing or using Campus Street, you agree to comply with and be bound by these terms and conditions. If you do not agree to these terms, you may not use our platform.</dd>

                                        <dt>Registration</dt>

                                        <dd>In order to access certain features of the platform, you may be required to register an account. You must provide accurate and complete information during the registration process.</dd>

                                        <dd>You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account</dd>

                                        <dt>User Conduct</dt>

                                        <dd>You agree not to use the platform for any unlawful purpose or in any way that violates these terms and conditions.</dd>

                                        <dd>You are solely responsible for your interactions with other users of the platform. We reserve the right, but are not obligated, to monitor disputes between users.</dd>

                                        <dt>Listings and Transactions</dt>

                                        <dd>Sellers are solely responsible for the accuracy and legality of the items they list on the platform.</dd>

                                        <dd>Buyers agree to pay the listed price for items purchased through the platform.</dd>

                                        <dd>Campus Street is not responsible for any disputes between buyers and sellers, but we may provide dispute resolution services at our discretion.</dd>

                                        <dt>Fees and Payments</dt>

                                        <dd>Campus Street may charge fees for certain services, such as listing items or processing transactions. By using these services, you agree to pay any applicable fees.</dd>

                                        <dd>All payments made through the platform are subject to our payment processing provider's terms and conditions.</dd>

                                        <dt>Intellectual Property</dt>

                                        <dd>Campus Street and its licensors retain ownership of all intellectual property rights associated with the platform.</dd>

                                        <dd>By using the platform, you grant Campus Street a non-exclusive, royalty-free license to use, reproduce, and display any content you post on the platform.</dd>

                                        <dt>Privacy</dt>

                                        <dd>Campus Street collects and uses personal information in accordance with our Privacy Policy. By using the platform, you consent to the collection and use of your personal information as described in the Privacy Policy.</dd>

                                        <dt>Limitation of Liability</dt>

                                        <dd>Campus Street is not liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with your use of the platform.</dd>

                                        <dt>Indemnification</dt>

                                        <dd>You agree to indemnify and hold Campus Street and its affiliates, officers, directors, employees, and agents harmless from any claims, losses, damages, liabilities, and expenses (including legal fees) arising out of or in any way connected with your use of the platform.</dd>

                                        <dt>Termination</dt>

                                        <dd>Campus Street may terminate or suspend your access to the platform at any time, with or without cause, and without prior notice.</dd>

                                        <dt>Governing Law</dt>

                                        <dd>These terms and conditions are governed by the laws of Cananda, without regard to its conflict of laws principles.</dd>

                                        <dt>Changes to Terms and Conditions</dt>

                                        <dd>Campus Street reserves the right to modify these terms and conditions at any time. Any changes will be effective immediately upon posting on the platform.</dd>

                                        <dt>Contact Us</dt>

                                        <dd>If you have any questions or concerns about these terms and conditions, please contact us using the information on our contact page.</dd>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn mainColor" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 mt-4 buttonBlock">
                    <button type="submit" class="btn btn-block mainColor">Register</button>
                    <p class="mt-2">I have a campus street account? <a href="{{route('login')}}" style="text-decoration: none" class="text-color">Login now</a></p>
                </div>

            </div>
             </form>
            </div>
        </div>
        <div class="col-md-6 d-none d-sm-none d-md-block signin-image">
        </div>
    </div>
</div>
</body>
</html>
