<?php

namespace App\Presenters;

use App\Transformers\EstablishmentTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EstablishmentPresenter
 *
 * @package namespace App\Presenters;
 */
class EstablishmentPresenter extends FractalPresenter
{

    public function getTransformer()
    {
        return new EstablishmentTransformer();
    }
}
