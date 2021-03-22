<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->group(function() {
    Route::resource('featured-talents', 'FeaturedTalentController');
    Route::resource('sections', 'SectionController');
});