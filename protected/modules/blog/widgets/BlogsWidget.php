<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aopeykin
 * Date: 26.04.12
 * Time: 10:41
 * To change this template use File | Settings | File Templates.
 */
class BlogsWidget extends YWidget
{
    public function run()
    {
        $blogs = Blog::model()->public()->published()->findAll();

        $this->render('blogswidget',array('blogs' => $blogs));
    }
}