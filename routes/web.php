<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Dolore labore ullamco occaecat est quis magna ipsum sint amet magna cupidatat irure enim. Nisi do deserunt consectetur in culpa id labore culpa ea nostrud ex deserunt do est. Id pariatur veniam non eu consectetur aliqua qui irure dolore irure ullamco consequat irure qui. Culpa occaecat nulla elit Lorem. Amet aliquip proident elit voluptate irure amet. Voluptate commodo ex ut minim non Lorem reprehenderit velit nulla elit exercitation. Nulla non dolore Lorem consequat dolor elit enim anim sint fugiat officia.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Dolore labore ullamco occaecat est quis magna ipsum sint amet magna cupidatat irure enim. Nisi do deserunt consectetur in culpa id labore culpa ea nostrud ex deserunt do est. Id pariatur veniam non eu consectetur aliqua qui irure dolore irure ullamco consequat irure qui. Culpa occaecat nulla elit Lorem. Amet aliquip proident elit voluptate irure amet. Voluptate commodo ex ut minim non Lorem reprehenderit velit nulla elit exercitation. Nulla non dolore Lorem consequat dolor elit enim anim sint fugiat officia.'
            ]
        ],
    ]);
});
