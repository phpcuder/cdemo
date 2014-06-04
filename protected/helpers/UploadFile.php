<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadFile
 *
 * @author User
 */
class UploadFile
{
    public function __construct() {

    }

    public function upload($dir = '', $fileData) {

        $returnData = array(
            'error' => array(),
            'uploaded_file' => '',
        );

        if(!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        if (empty($fileData)) {
            $returnData['error'][] = 'No file to upload';
            return $returnData;
        }

        foreach ($fileData as $key => $file) {
            if (!empty($file['name'])) {
                if (!preg_match('/[^\\s]+(\\.(?i)(jpg|png|gif))$/i', $file['name'])) {
                    $returnData['error'][$key] = 'File type is not allowed';
                    continue;
                }

                if (Yii::app()->params['max_file_size'] < $file['size']) {
                    $returnData['error'][$key] = 'File size is exceed';
                    continue;
                }

                if ($file['error'] > 0) {
                    $returnData['error'][$key] = 'File error';
                    continue;
                }

                $name = $this->_checkName($file['name']);
                $name = str_replace(" ", "-", preg_replace("@[^a-z0-9|\. ]@", "", strtolower($name)));
                $filepath = $dir . DIRECTORY_SEPARATOR . $name;
                
                if (!@move_uploaded_file($file['tmp_name'], $filepath)) {
                    $returnData['error'][$key] = 'File cannot upload';
                    continue;
                } else {
                    @chmod($file, 0666);
                    $returnData['uploaded_file'][$key] = $filepath;
                }
            }
        }

        return $returnData;
    }

    /**
     * Return true if requeired action allowed to file/folder
     *
     * @param  string  $path    file/folder path
     * @param  string  $action  action name (read/write/rm)
     * @return void
     * */
    protected function _isAllowed($path, $action) {

        switch ($action) {
            case 'read':
                if (!is_readable($path)) {
                    return false;
                }
                break;
            case 'write':
                if (!is_writable($path)) {
                    return false;
                }
                break;
            case 'rm':
                if (!is_writable(dirname($path))) {
                    return false;
                }
                break;
        }
    }

    /**
     * Check new file name for invalid simbols. Return name if valid
     *
     * @return string  $n  file name
     * @return string
     * */
    protected function _checkName($n) {
        $n = strip_tags(trim($n));

        if ('.' == substr($n, 0, 1)) {
            return false;
        }

        return preg_match('|^[^\\/\<\>:]+$|', $n) ? $n : false;
    }

}