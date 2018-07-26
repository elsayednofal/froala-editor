# froala-editor
integrate froala editor with laravel 

## Installation
- run command `composer require elsayednofal/froala-editor:dev-master`
- add service provider to config/app.php `Elsayednofal\FroalaEditor\FroalaEditorServiceProvider::class,`
- run `php artisan vendor:publish`

## Config
add you upload image url  and remove image url in config/froala.php

## Usage 
- call assets `<?= \Elsayednofal\FroalaEditor\Froala::initCss()?>

<?= \Elsayednofal\FroalaEditor\Froala::initJs()?>`

- init editor using `<?= \Elsayednofal\FroalaEditor\Froala::initEditor("name",'id', 'content', $is_required=true)?>`


## Support
 for any questions contact me at : `elsayed_nofal@ymail.com`
