<?php

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

// use Symfony\Component\Routing\Annotation\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello';
});
Route::get('/hello2', function () {
    return 'Hello2';
});
Route::get('/users', function () {
    return view('userList');
});

//dieu huong tu form1 => form
//Route::redirect('/form1', 'form');

Route::view('/form', 'form');

// Route::get('/form', function () {
//     return view('form');
// });

Route::post('/form', function () {
    echo "vao form";
})->name("post.form");

Route::get('user/{id}/{user}', function ($id = null) {
    if ($id == null) {
        return 'Users';
    } else {
        return 'User ' . $id;
    }

})->name('');

Route::get('/user/{id}/post/{slug}-{post}', function ($idabc, $slugfv, $idpost) {
    return "This is post $slugfv about $idpost of user $idabc";
});

Route::group([
    'prefix' => 'admin',
    'name' => 'admin.',
], function () {
    Route::group([
        'prefix' => 'users',
        'name' => 'users.',
    ], function () {
        Route::get('/', function () {
            echo "Users home";
        })->name('home');
        Route::get('/profile', function () {
            echo "profile";
        })->name('profile');
        Route::get('/edit', function () {
            echo "edit";
        })->name('edit');
        Route::get('/friends', function () {
            echo "friends";
        })->name('friends');
    });
    Route::prefix('lesson')->name('lesson.')->group(function () {
        Route::get('/{id}', function ($id) {
            echo "Lesson " . $id;
        });
        Route::get('/edit', function () {
            echo "edit lesson";
        });
        Route::get('/test', function () {
            echo "test";
        });
        Route::get('/video/{id}', function ($id = null) {
            if ($id == null) {
                return 'videos';
            } else {
                return 'video ' . $id;
            }
        });
    });

});

Route::group([
    'prefix' => 'admin',
    'name' => 'admin.',
], function () {
    Route::group([
        'prefix' => 'category',
        'name' => 'category.',
    ], function () {
        Route::get('/{id?}', function ($id = null) {
            if ($id == null) {
                /// admin/category
                echo "admin/category";
            } else {
                /// admin/category/13
                echo "admin/category/$id";
            }
        });
        Route::get('/{id}/post/{post?}', function ($id = 13, $idpost = null) {
            if ($idpost == null) {
                /// admin/category/13/post
                echo "admin/category/$id/post";
            } else {
                /// admin/category/13/post/45
                echo "admin/category/$id/post/$idpost";
            }
        });

    });
    Route::group([
        'prefix' => 'post',
        'name' => 'post.',
    ], function () {
        Route::get('/{id?}', function ($id = null) {
            if ($id == null) {
                /// admin/post
                echo "admin/post";
            } else {
                /// admin/post/22
                echo "admin/post/$id";
            }
        });
        Route::get('/edit/{idEdit?}', function ($idEdit = null) {
            if ($idEdit == null) {
                /// admin/post/edit
                echo "admin/post/edit";
            } else {
                /// admin/post/edit/3
                echo "admin/post/edit/$idEdit";
            }
        });
    });

});

Route::get('greet', function () {
    $name = 'Giang';
    return view('greeting')->with
        ([
        "name" => $name,
        "age" => 22,
    ]);
});

Route::get('setting', function () {
    return view('admin.setting');
});

Route::get('/child', function () {
    return view('child');
});

// Route::get('/todo', function () {
//     $list = ['hoc lap trinh', 'hoc html', 'hoc css', 'hoc nodejs'];
//     return view('todo')->with('list', $list);
// })->name('todos');

Route::get('/todo2', function () {
    return view('todo2');
});

Route::get('/add', function () {
    return view('add');
})->name('todo.add');

// Route::get('/home','HomeController@index');

// Route::get('/home/{page?}','HomeController@page');

Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/{page?}', 'HomeController@page');
});

////Admin
// Route::get('/admin/setting','Admin\SettingController@index');

// Route::get('/admin/show/{id}', 'Admin\SettingController@show');

// Route::get('/admin/user', 'Admin\UserController@index');



//// gom nhom cach 1
// Route::prefix('/admin')->namespace('Admin')->group(function() {
//     //Admin
//     Route::get('/setting', 'SettingController@index');

//     Route::get('/show/{id}', 'SettingController@show');

//     Route::get('/user', 'UserController@index');

// });



//// gom nhom cach 2
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function () {
    //Admin
    Route::get('/setting', 'SettingController@index');

    Route::get('/show/{id}', 'SettingController@show');

    Route::get('/user', 'UserController@index');

});

Route::resource('todos', 'TodoController');
