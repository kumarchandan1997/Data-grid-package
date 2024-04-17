<?php

namespace Datagrid\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datagrid extends Model
{
    use HasFactory;

    public static $dataGridColumns = ["first_name", "last_name", "email", "password", "created_at"];
}
