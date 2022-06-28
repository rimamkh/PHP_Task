<h4>Introduction<h4>

API stands for “Application Programming Interface.” An API is the messenger that delivers your request to the provider that you're requesting it from and then delivers the response back to you.
<h4>Authentication<h4>

Authentication is the process of recognizing a user's identity.It is the mechanism of associating an incoming request with a set of identifying credentials. The credentials provided are compared to those on a file in a database of the authorized user’s information on a local operating system or within an authentication server.
<h4>Autherization<h4>

Authorization happens after a user’s identity has been successfully authenticated. It is about offering full or partial access rights to resources like database, funds, and other critical information to get the job done.

<h2 style="color:orange">POST</h2> <h4>Register request</h4>
<a href="#" style="color:black">http://127.0.0.1:8000/api/register</a>
 
  <table>
  <tr>
    <td>Accept</td>
    <td>application/json</td>
  </tr>
  <tr>
    <td>name</td>
    <td>Rima Mkhalalati</td>
  </tr>
  <tr>
    <td>email</td>
    <td>example@gmail.com</td>
  </tr>
  <tr>
    <td>password</td>
    <td>example12345</td>
  </tr>
  <tr>
    <td>password_confirmation</td>
    <td>example12345</td>
  </tr>
</table>
 
 
<h2 style="color:orange">POST</h2> <h4> Login request</h4>
<a href="#" style="color:black">http://127.0.0.1:8000/api/register</a>
<br>
  <table>
  <tr>
    <td>Accept</td>
    <td>application/json</td>
  </tr>
 
  <tr>
    <td>email</td>
    <td>example@gmail.com</td>
  </tr>
  <tr>
    <td>password</td>
    <td>example12345</td>
  </tr>
 
 </table>
 
<h2 style="color:green">GET</h2> <h4>Product list</h4>
<a href="#" style="color:black">http://127.0.0.1:8000/api/productlist</a>
<br>
<table>
  <tr>
    <th>Authorization</th>
    <th>Bearer Token</th
  </tr>
  <tr>
    <td>Accept</td>
    <td>application/json</td>
  </tr>
</table>
<h2 style="color:green">GET</h2> <h4>Product Types</h4>
<a href="#" style="color:black">http://127.0.0.1:8000/api/productType</a>
<br>
<table>
  <tr>
    <th>Authorization</th>
    <th>Bearer Token</th
  </tr>
  <tr>
    <td>Accept</td>
    <td>application/json</td>
  </tr>
</table>
<h2 style="color:green">GET</h2> <h4>Product Colors</h4>
<a href="#" style="color:black">http://127.0.0.1:8000/api/productColor</a>
<br>
<table>
  <tr>
    <th>Authorization</th>
    <th>Bearer Token</th
  </tr>
  <tr>
    <td>Accept</td>
    <td>application/json</td>
  </tr>
</table>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
