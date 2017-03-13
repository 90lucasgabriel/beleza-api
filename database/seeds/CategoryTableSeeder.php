<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        factory(Category::class, 10)->create()->each(
        	function($c){
        		//Create 5 services for each category
	            for($i=0; $i<5; $i++){

	            	//return product created
	                $p = $c->services()->save(
	                	factory(Service::class)->make()
            		);

	                //Create 4 images url for each product
	        		//for($j=0; $j<4; $j++){
            		//	$p->productImage()->save(factory(ServiceImage::class)->make());
            		//}
	            }
        	}
    	);
    }
}