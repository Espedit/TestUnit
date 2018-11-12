<?php


class ControlMail ()


{
	
	public function isEmail ($string)
	
	{
		
		if(preg_match('/@/',$string))
			
			{
				
				
				return true;
				
			}
else{
	
	
	return false;
	
	
	
}

	}



















?>