<?php

class MailchimpFieldOptions extends FieldOptions 
{
	public function __construct($field) 
	{
		$this->field = $field;
    	
		require_once "mailchimp.php";
		$Mailchimp = new MailChimp(c::get('mailchimpAPI'));
		$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

		$start = 0;
		do{
	 		$lists = $Mailchimp_Lists->getList([],$start)['data'];
	 		foreach ($lists as $list){
		        	$this->options[$list['id']] = $list['name'];		
			}
			$start++;
		} while(count($lists) > 0);
	}
}