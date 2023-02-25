<?php

/**
 * UploadAttRespCiv helper
 *
 * @param  $request

 */

function uploadAttRespCiv($file)
{

    // on donne un nom à l'image en temps Unix + extension
    $fileName = time() . '.' . $file->extension();

    // on déplace l'image dans public/images
    $file->move(public_path('uploads/AttRespCiv'), $fileName);

    // on retourne le nom de l'image
    return $fileName;
}
