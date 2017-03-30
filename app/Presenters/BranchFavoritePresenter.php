<?php

namespace App\Presenters;

use App\Transformers\BranchFavoriteTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class BranchFavoritePresenter
 *
 * @package namespace App\Presenters;
 */
class BranchFavoritePresenter extends FractalPresenter
{

    public function getTransformer()
    {
        return new BranchFavoriteTransformer();
    }
}
