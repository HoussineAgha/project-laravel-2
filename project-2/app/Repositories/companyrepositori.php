<?php

namespace App\Repositories;

use App\Models\company;

class companyrepositori
{
    public function all(){
        return company::all();
}
}

?>
