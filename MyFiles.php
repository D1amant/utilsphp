<?php
/**
 * Created by PhpStorm.
 * User: diamante
 * Date: 05/02/16
 * Time: 14:20
 */




class MyFiles
{





    public static function UploadArquivo($files,$destino,$name){

        if(!file_exists($destino)){
            @mkdir($destino,0777);
            @chmod($destino,0777);
        }
        $format = explode('.' ,$files->getClientOriginalName());

        $filename = $name.".".$format[1];



        $upload_success = $files->move($destino, $filename);

/*        $ini_x_size = getimagesize($destino.$filename )[0];
        $ini_y_size = getimagesize($destino.$filename)[1];
        //the minimum of xlength and ylength to crop.
        $crop_measure = min($ini_x_size, $ini_y_size);


        $im = imagecreatefromjpeg($destino.$filename);

        $to_crop_array = array('x' =>0 , 'y' =>0, 'width' => $crop_measure, 'height'=> $crop_measure);
        $thumb_im = imagecrop($im, $to_crop_array);

        $novo_caminho = $destino.$filename;

        imagejpeg($thumb_im, $novo_caminho, 100);*/

        $retorno = '';

        if ($upload_success) {
            $retorno .= $filename ;

        }

        return $retorno;
    }


}