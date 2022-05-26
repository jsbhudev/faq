# Welcome Faq Api Package 
Faq is a laravel package for quick Faq Api Module setup in laravel..
## Installation
Use the package manager [composer](https://getcomposer.org/) to install Faq.
###### Step – 1 📌
Go To Your Laravel Application Folder
###### Step – 2 📌
go command prompt
###### Step – 3 📌

```bash
composer require jsbhudev/faq
```
###### Step – 4 📌
```bash
php artisan vendor:publish --tag=config
```

###### Step – 5 📌
```bash
Go to file config\faq.php
```
Follow Path Array Set Your Custom Output

```bash
'path' => [
    'route' => 'api/faq',
    'success_msg' => 'Faq Get Successfully',
    'question' => 'Question',
    'answer' => 'Ans',        
    ],
```

###### Step – 6 📌
Set .env File As You Can Use Regularly
###### For new Setup : 

```bash
php artisan migrate:fresh
```
###### For existing Setup : 

```bash
php artisan migrate
```

###### Step – 7 📌

Get A List Of Registered Route Follow Command
```bash
php artisan route:list
```
###### Step – 8 📌

Following Route Is Exist Or Not
```bash
URI         | Name          | Action
api/faq     | api.faq.index | jsbhudev\faq\Http\Controllers\Api\FaqController@index
```

###### 🙏 Thank You for your intrest. 🙏
