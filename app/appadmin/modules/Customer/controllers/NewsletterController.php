<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appadmin\modules\Customer\controllers;

use fecshop\app\appadmin\modules\Customer\CustomerController;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class NewsletterController extends CustomerController
{
    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        $data = $this->getBlock()->getLastData();

        return $this->render($this->action->id, $data);
    }


}
