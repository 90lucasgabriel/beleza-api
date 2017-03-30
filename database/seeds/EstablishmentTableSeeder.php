<?php

use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Branch;
use App\Models\BranchImage;
use App\Models\BranchFavorite;

class EstablishmentTableSeeder extends Seeder
{
    public function run()
    {
        //DB::statement('TRUNCATE categories CASCADE');
        Establishment::truncate();
        factory(Establishment::class, 10)->create()->each(
            function($e){
                //Create 3 branches for each establishment
                for($i=0; $i<3; $i++){

                    //return product created
                    $b = $e->branches()->save(
                        factory(Branch::class)->make()
                    );

                    //Create 4 images url for each product
                    for($j=0; $j<4; $j++){
                      $b->branchImages()->save(factory(BranchImage::class)->make());
                    }

                    for($j=0; $j<rand(1,15); $j++){
                        factory(BranchFavorite::class)->create(['branch_id'=>$b->id]);
                    }
                    
                }
            }
        );


    }
}