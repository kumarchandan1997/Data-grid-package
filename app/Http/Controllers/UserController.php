<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Datagrid\Facades\DataGridFacade;
// use Datagrid\Facades\DataGridF;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        // Define the unique session key
        $sessionKey = config('datagrid.User_SessionKey');
        // Retrieve the selected columns from the session
        $columns = Session::get($sessionKey);
            // Use default columns if session data is not set
        if ($columns === null) {
            $columns = config('datagrid.users_columns');
            Session::put($sessionKey, $columns);
        }

        // Get all available columns
        $columnsAll = config('datagrid.users_columns');

        // Render the data grid
        $dataGrid = DataGridFacade::model(User::class)
            ->columns($columns)
            ->searchColumns($columns)
            ->columnsAll($columnsAll)
            ->paginate(10);

        return view('test', ['dataGrid' => $dataGrid]);
    }
    public function product()
    {
        // Define the unique session key
        $sessionKey = config('datagrid.Product_SessionKey');

        // Retrieve the selected columns from the session
        $columns = Session::get($sessionKey);

        // Use default columns if session data is not set
        if ($columns === null) {
            $columns = config('datagrid.product_columns');
            Session::put($sessionKey, $columns);
        }

        // Get all available columns
        $columnsAll = config('datagrid.product_columns');

        // Render the data grid
        $dataGrid = DataGridFacade::model(Product::class)
            ->columns($columns)
            ->searchColumns($columns)
            ->columnsAll($columnsAll)
            ->paginate(10);
        // ->render();

        return view('test', ['dataGrid' => $dataGrid]);
    }

    public function customer()
    {
        // Define the unique session key
        $sessionKey = config('datagrid.Customer_SessionKey');

        // Retrieve the selected columns from the session
        $columns = Session::get($sessionKey);

        // Use default columns if session data is not set
        if ($columns === null) {
            $columns = config('datagrid.customer_columns');
            Session::put($sessionKey, $columns);
        }

        // Get all available columns
        $columnsAll = config('datagrid.customer_columns');

        // Render the data grid
        $dataGrid = DataGridFacade::model(Customer::class)
            ->columns($columns)
            ->searchColumns($columns)
            ->columnsAll($columnsAll)
            ->paginate(10);

        return view('test', ['dataGrid' => $dataGrid]);
    }
}
