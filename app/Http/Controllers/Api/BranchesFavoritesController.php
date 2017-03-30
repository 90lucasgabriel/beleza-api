<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Repositories\BranchFavoriteRepository;
use App\Repositories\BranchFavoriteRepositoryEloquent;
use Illuminate\Http\Request;

class BranchesFavoritesController extends Controller{    
    private $branchFavoriteRepository;

    public function __construct(
        BranchFavoriteRepositoryEloquent      $branchFavoriteRepository
    ){
        $this->branchFavoriteRepository   = $branchFavoriteRepository;
    }


    public function queryByUser($id){
        $branches = $this
            ->branchFavoriteRepository
            ->skipPresenter(false)
            ->scopeQuery(function($query) use($id){
                return $query
                    ->where('user_id', '=', $id);
            })
            ->paginate(10);

        return $branches;
    }


    public function queryByBranch($id)    {
        $users = $this
            ->branchFavoriteRepository         
            ->skipPresenter(false)
            ->findByField('user_id', $id);
            //->paginate(10);
        
        return $users;
    }

    public function search($data){
        $data = '%' . $data . '%';
        //$url = $request->fullUrlWithQuery(['bar' => 'baz']);
        
        $branchesFavorites = $this
            ->branchFavoriteRepository
            ->skipPresenter(false)
            ->scopeQuery(function($query) use($data){
                return $query
                    ->where('name', 'like', $data);
            }
        )->paginate(10);

        /*$branchesFavorites = $this
            ->branchFavoriteRepository
            ->skipPresenter(false)
            ->findWhere([
                ['name', 'like', $data],
                ['description', 'like', $data]
            ])
        ;*/

        return $branchesFavorites;
    }
}
