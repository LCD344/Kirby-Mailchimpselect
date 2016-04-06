<?php
require_once  'fieldoptions.php';
class MailchimpSelectField extends SelectField 
{
	public function options() 
    {
        return MailchimpFieldOptions::build($this);
    }
}