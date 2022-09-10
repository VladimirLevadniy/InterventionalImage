<?php
require '../homework_5.3/vendor/autoload.php';
//putenv('GDFONTPATH=' . realpath(' . '));
//$font = 'arial';


use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('priemlemo.jpg');
printf($img);

$img->resize(200, null, function (\Intervention\Image\Constraint $constraint) {

    $constraint->aspectRatio();

});

$img->text('Приемлемо',
    60,
    160,
    function (\Intervention\Image\AbstractFont $font) {

        $font->size(20);
        $font->color('#ffffff');
        $font->file('C:\Users\79853\untitled1\homework_5.3\arial.ttf');

    });

$img->save('Priemlemo2.jpg');

echo $img->response('jpg');
