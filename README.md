# TokoLappy API
## About The Project
An API application that will provide computer and notebook data for TokoLappy.

## Built With 
- Composer 2.x
- PHP 8.3.x

## Getting Started
1. Run `composer install` in this project to install dependencies.
```bash
composer install
```

2. Run `php -S [localhost | 0.0.0.0]:[port number]` in `public` folder to publish project and make the project accessible from web browser using specified host IP address and port number.
```bash
To publish project in your local host only, port 8000 (your own computer or device will access the web application):

    php -S localhost:8000

To publish project in your network, port 3000 (another computer or device will access the web application):

    php -S 0.0.0.0:3000
```

3. Access `http://[host address specified]:[port number]` from your browser, make sure `TokoLappy API` text is shown. If `0.0.0.0` is specified, access the web application using computer's IP address that hosts the web application.
```url
http://192.168.0.1:8000
```

## Source Code Project Structure
```
TokoLappy
|-- app
|   |-- Controller
|   |-- Routes
|   \-- View
|    
|-- logs
|   \-- access.log
|    
|-- public
|   \-- index.php
|
\-- test
```

### app Folder
`app` folder consists of logics and source codes related to the TokoLappy API itself. Providing computer and notebook data, manipulation of product data, and authentication logic will be written under this folder. The app folder structures are inspired from `Model-View-Controller` concept.

#### Controller Folder
`Controller` folder consists of actions taken when user accessed specific  HTTP request endpoint and request method in web browser.

#### Routes Folder
`Routes` folder consists of list of linkage between specified HTTP request endpoint and request method to specific function in `Controller` folder.

#### View Folder
`View` folder consists of specific UI or design that will be shown to the user's web browser.

### logs Folder
`logs` folder consists of logging information about incoming request to web application.

### public Folder
`public` folder consists of a file that should be hosted in web server. This serves as a representative files, which would make user cannot hit specific endpoint without defined the endpoint in the `app` folder.

### test Folder
`test` folder consists of logics to do unit tests or feature tests to the source code.