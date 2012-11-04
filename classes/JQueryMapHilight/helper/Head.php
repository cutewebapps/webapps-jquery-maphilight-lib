<?php

class JQueryMapHilight_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
            $this->getView()->broker()->headScript()->append(
                $this->getView()->staticpath() . '/jquery-maphilight/js/jquery.maphilight.min.js', 'jquery' );
    }
}
