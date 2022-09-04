<?php

namespace App\Http\Controllers;

use App\Tenant;
use Stancl\Tenancy\Database\TenantCollection;

class HomeController extends Controller
{
    /**
     * @return TenantCollection
     */
    public function tenant()
    {
        $tenant = new Tenant();
        dd($tenant->scopeHello());
    }
}
