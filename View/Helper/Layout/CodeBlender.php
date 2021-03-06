<?php

/**
 * CodeBlender
 *
 * @category   CodeBlender
 * @package    Helper
 * @copyright  Copyright (c) 2000-2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license    http://codeblender.net/license
 */

/**
 * Helper
 *
 * @category   CodeBlender
 * @package    Helper
 * @copyright  Copyright (c) 2000-2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license    http://codeblender.net/license
 */
class CodeBlender_View_Helper_Layout_CodeBlender extends Zend_View_Helper_Abstract
{

    /**
     * Helper
     */
    public function layout_CodeBlender()
    {
        $string = $this->view->layout_Image(array(
                    'alt' => 'CodeBlender PHP application framework',
                    'class' => 'codeBlenderImage',
                    'height' => 40,
                    'path' => $this->view->themePath . '/default/images/template/powered-by-codeblender.gif',
                    'width' => 120,
                    'useAssetPath' => false,
                    'url' => 'http://www.codeblender.net/'
                ));

        return $string;
    }

}
