+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method   | URI                    | Name             | Action                                                                 | Middleware   |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD | /                      |                  | App\Http\Controllers\MainController@index                              | web          |
|        | GET|HEAD | api/user               |                  | Closure                                                                | api,auth:api |
|        | POST     | crearGenero            |                  | App\Http\Controllers\GenreController@save                              | web          |
|        | GET|HEAD | genres                 |                  | App\Http\Controllers\GenreController@index                             | web          |
|        | GET|HEAD | genres/create          |                  | App\Http\Controllers\GenreController@create                            | web          |
|        | GET|HEAD | genres/{id}            |                  | App\Http\Controllers\GenreController@oneGenre                          | web          |
|        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | GET|HEAD | movies                 |                  | App\Http\Controllers\MovieController@index                             | web          |
|        | GET|HEAD | movies/create          |                  | App\Http\Controllers\MovieController@create                            | web          |
|        | GET|HEAD | movies/edit/{id}       |                  | App\Http\Controllers\MovieController@edit                              | web          |
|        | POST     | movies/edit/{id}       |                  | App\Http\Controllers\MovieController@update                            | web          |
|        | GET|HEAD | movies/{id}            |                  | App\Http\Controllers\MovieController@show                              | web          |
|        | POST     | movies/{id}            |                  | App\Http\Controllers\MovieController@addActor                          | web          |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | GET|HEAD | vistaPrincipal         |                  | Closure                                                                | web          |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
