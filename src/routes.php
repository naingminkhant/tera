<?php
Route::get('calculator',function (){
    echo "Hello Calculator";
});

Route::get('add/{a}/{b}',"naingminkhant\calculator\Controllers\CalculatorController@add");