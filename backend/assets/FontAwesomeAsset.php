<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Joao Marques<joao@jjmf.com>
 */


class FontAwesomeAsset extends AssetBundle {
    //put your code here
    # sourcePath points to the composer package.

    public $sourcePath = '@vendor/fortawesome/font-awesome';

    # CSS file to be loaded.
    public $css = [
        'css/font-awesome.min.css',
    ];


    /**
     * Sets the publishOptions property.
     * Needed because it's necessary to 
     *concatenate 
     * the namespace value.
     */
    public function init()
    {
        $this->publishOptions = [
            'forceCopy' => YII_DEBUG,
            'beforeCopy' => __NAMESPACE__ . '\FontAwesomeAsset::filterFolders'
        ];

        parent::init();
    }
    
    public static function filterFolders($from, $to)
    {
        $validFilesAndFolders = [
            'css',
            'fonts',
            'font-awesome.css',
            'font-awesome.min.css',
            'FontAwesome.otf',
            'fontawesome-webfont.eot',
            'fontawesome-webfont.svg',
            'fontawesome-webfont.ttf',
            'fontawesome-webfont.woff',
        ];

        $pathItems = array_reverse(explode(DIRECTORY_SEPARATOR, $from));

        if (in_array($pathItems[0], $validFilesAndFolders)) return true;
        else return false;
    }
}

