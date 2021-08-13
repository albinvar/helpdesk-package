<?php

namespace Albinvar\Helpdesk\Tests;

use Albinvar\Helpdesk\Helpdesk;
use Albinvar\Helpdesk\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class DepartmentTest extends TestCase
{
    /**
    check if all() method works.
    **/
    public function test_if_deparment_all_method_works()
    {
        $helpdesk = new Helpdesk();
        $departments = $helpdesk->department()->all();
        $this->assertInstanceOf(Collection::class, $departments);
        $this->assertEquals(Department::all(), $departments);
    }

    /**
    check if the collection extracted from get method mathches eloquent model.
    **/
    public function test_if_deparment_get_method_works()
    {
        $department = Department::factory()->create();

        $helpdesk = new Helpdesk();

        $this->assertEquals(Department::find($department->id), $helpdesk->department($department->id)->get());
    }
    
    
    /**
    check if the collection extracted from get method mathches eloquent model.
    **/
    public function test_if_new_deparment_can_be_created()
    {
        $department = Department::factory()->make();
        
        $helpdesk = new Helpdesk();

        $created = $helpdesk->department()->create($department->toArray());
        
        $this->assertInstanceOf(Department::class, $created);
        $this->assertEquals($created->toArray(), $created->toArray());
    }
}
