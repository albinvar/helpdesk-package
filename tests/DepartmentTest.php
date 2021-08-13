<?php

namespace Albinvar\Helpdesk\Tests;

use Albinvar\Helpdesk\Helpdesk;
use Illuminate\Database\Eloquent\Collection;

class DepartmentTest extends TestCase
{
    public function test_if_deparment_all_method_works()
    {
    	$departments = new Helpdesk();
		$departments->department()->all();
    
	    $this->assertInstanceOf(Collection::class , $departments->department()->all());
    }
}
