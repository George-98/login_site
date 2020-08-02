<?php

    Route::set('', function() {
        echo 'Home';
    });
    Route::set('about-us', function() {
        AboutUs::test();
      AboutUs::CreateView('AboutUs');
    });
    Route::set('contact-us', function() {
        AboutUs::CreateView('ContactUs');
    });
    Route::set('login', function() {
        LoginScreen::CreateView('LoginScreen');
    });
    Route::set('login-user', function() {
        if ( isset( $_POST['submit'] ) ) {
            LoginScreen::LoginUser();
        }
    });
