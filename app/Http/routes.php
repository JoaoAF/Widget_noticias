<?php
Route::get('/', 'WidgetController@Widget');
Route::get('/teste', 'WidgetController@teste');
Route::get('/importWidget', 'WidgetController@montadorWidget');
Route::get('/importWidgetUltimas', 'WidgetController@montadorUltimas');