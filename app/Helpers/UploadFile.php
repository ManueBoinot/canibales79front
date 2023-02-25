<?php

/**
 * UploadFile helper
 *
 * @param  $request

 */

function uploadFile($file)
{

    // on donne un nom à l'image en temps Unix + extension
    $fileName = time() . '.' . $file->extension();

    // on déplace l'image dans public/images
    $file->move(public_path('uploads'), $fileName);

    // on retourne le nom de l'image
    return $fileName;
}
