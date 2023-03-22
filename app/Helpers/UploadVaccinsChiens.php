<?php

/**
 * UploadVaccinsChiens helper
 *
 * @param  $request

 */

function uploadVaccinsChiens($file)
{
    // on donne un nom à l'image en temps Unix + extension
    $fileName = time() . '.' . $file->extension();

    // on déplace l'image dans public/images
    $file->move(public_path('uploads/vaccinsChiens'), $fileName);

    // on retourne le nom de l'image
    return $fileName;
}
