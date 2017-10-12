# ☲ ChapChapSQL PHP Library [ v2.0.1 rc ]
**A lightweight PHP library to perform SQL operations swiftly and securely.**
#### Created by Kelvin Kamau

## Important Update
Official maintenance withdrawal & support discontinuance for [ChapChap](https://github.com/kelvinkamau/ChapChapSQL) from October, Friday 13th 2017.

## Features
| Feature              | Description                                                                             |
| :------------------- | :-------------------------------------------------------------------------------------- |
| Negligible size      | chapchapsql is less than 1KB (minified and gzipped).                                        |
| Fast and convenient  | Write only one line of code to perform simple or complex CRUD database operations.      |
| Avoid SQL Injection  | chapchapsql uses prepared statements and escapes user input.                                |
| Error logging        | Track script errors easily.                                                             |
| Extra functionality  | Error minification, custom error codes, enable/disable backtrace                        |
| Error Debugging      | Easily debug your project by viewing the backtrace output in error exception object.    |
| Error Handling       | Handle errors gracefully in your project by taking advantage of the exception class.    |
| Plug & Play          | chapchapsql is pretty simple to use; just include it in your script and you're good to go!  |
| Wide Support         | chapchapsql supports all browsers and servers which can process PHP.                        |

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.
```shell
git clone http://github.com/kelvinkamau/chapchapsql
```

## Prerequisites
You need the following to install and use the project:
- **Web server** - tool for running the PHP scripts, for example, [Apache Web Server](https://httpd.apache.org/download.cgi)
- **Database server** - RDBMS database program, [MySQL](https://dev.mysql.com/downloads/installer/)
- **Web browser** - tool to preview the result, for example, [Google Chrome](https://support.google.com/chrome/answer/95346) or [Mozilla Firefox](https://www.mozilla.org/en-US/firefox/new/)
- **Text Editor** - tool for editing your code, for example, [Atom Text Editor](https://atom.io/), [Sublime Text Editor](https://www.sublimetext.com/3) or [Notepad++](https://notepad-plus-plus.org/download/v7.4.1.html)

**NOTE:** *This document does not contain steps on how to setup or configure the above tools; it is assumed that you're already familiar with this as well as the process of creating a dummy site and deploying it on a local (or online) server.*

## Installing
To use chapchapsql, add the following at the beginning of your PHP code in your working script:
```php
<?php
require_once("chapchapsql.min.php");
?>
```



## Testing (Sandbox)
Build & test your project that uses this library in a controlled & real free environment with this easy to use simulator by visiting the ChapChapSQL SandBox.

```shell
http://www.kelvinkamau.com/sandbox
```

## Running tests locally
To run tests, [visit the online demo](http://github.com/kelvinkamau/ChapChapSQL
or see the [DEMO/README.md](./demo/README.md) file for notes on how to test locally.

## Deployment
To deploy this project on a live system, copy the distribution folder to your working environment:
```shell
git clone http://github.com/kelvinkamau/chapchapsql/dist
cp dist /your/path
```
Next, provide valid database credentials in the [credentials file](dist/credentials.json) as follows:
```json
{
  "database_type"   : "",
  "host_name"       : "",
  "host_username"   : "",
  "host_password"   : "",
  "database"        : ""
}
```
Finally, include chapchapsql in your working scripts, and configure it:
```php
<?php
require_once("dist/chapchapsql.min.php");

// create a new instance
$conn = new chapchapsql();

// provide credentials
$conn->set_credentials_via_json_file("dist/credentials.json");

// (optional) enable error logging
$conn->set_logs_file_path("dist/logs.json");
$conn->set_logs_minify(true);

// your code follows here
// [...]

// destroy instance
$conn->__destruct();
unset($conn);
?>
```

## Usage
For guidelines on how to use ChapChapSQL, see the [USAGE.md](./USAGE.md) file or [visit the project site](https://github.com/kelvinkamau/chapchapsql/blob/master/USAGE.md).

## Built With
- [PHP 7.0](http://php.net/) - The web framework used
- [PDO](http://php.net/manual/en/book.pdo.php) - The framework linking PHP to the Database

## Documentation
ChapChapSQL uses an object-oriented approach highly facilitated by mixed inheritance, a combination of single and multilevel inheritance. For the classes' UML and relationship diagrams, see the [UML.jpg](./UML.jpg) file for more details. A full list of the classes is available in the [UML.md](./UML.md) file, and the [unminified source code](./dist/chapchapsql.php) contains a description of the entire codebase.

## Contributing
ChapChapSQL is an open source software project and I encourage developers to contribute patches and code for us to include in the main package of ChapChapSQL. All contributions will be fully credited - see the [Contributing.md](./CONTRIBUTING.md) file for details on my code of conduct, and the process for submitting pull requests.

## Versioning
This project uses [semver](https://semver.org) for versioning. Current version: v2.0.1 rc

## Authors & Contributors
This project was created & is mantained by [Kelvin Kamau](https://github.com/kelvinkamau).

## Special Thanks
Many thanks to **Flavia Mbuki** for introducing the concept of refactoring ChapChapsql via an Object Oriented approach in the previous version.

I would also like to thank [mimidotsuser](https://github.com/mimidotuser) for the pull request and contributions.

## License
```
Copyright (c) 2017 Kelvin Kamau & Flavia Macharia

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
