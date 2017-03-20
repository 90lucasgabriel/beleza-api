<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Repositories\EstablishmentRepository;
use Illuminate\Http\Request;

class EstablishmentsController extends Controller{    
    private $establishmentRepository;

    public function __construct(
        EstablishmentRepository      $establishmentRepository
    ){
        $this->establishmentRepository   = $establishmentRepository;
    }


    public function index(){
        $establishments = $this
            ->establishmentRepository
            ->skipPresenter(false)
            ->paginate(10);

        return $establishments;
    }


    public function show($id)    {
        $establishment = $this
            ->establishmentRepository         
            ->skipPresenter(false)
            ->find($id);
        
        return $establishment;
    }

    public function search($data){
        $data = '%' . $data . '%';
        //$url = $request->fullUrlWithQuery(['bar' => 'baz']);
        
        $establishments = $this
            ->establishmentRepository
            ->skipPresenter(false)
            ->scopeQuery(function($query) use($data){
                return $query
                    ->where('name', 'like', $data);
            }
        )->paginate(10);

        /*$establishments = $this
            ->establishmentRepository
            ->skipPresenter(false)
            ->findWhere([
                ['name', 'like', $data],
                ['description', 'like', $data]
            ])
        ;*/

        return $establishments;
    }
}
