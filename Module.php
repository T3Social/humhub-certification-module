<?php

namespace humhub\modules\certified;

/**
 *
 * @property mixed $configUrl
 * @property string $name
 */
class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return ('Certified');
    }

    /**
     * @inheritdoc
     */
    public function getPermissions($contentContainer = null)
    {

        if($contentContainer instanceof Space){
            return [
                new permissions\ManageCertifications(),
                new permissions\CertifiedAdmin(),
            ];
        };
        return [];


    }

}