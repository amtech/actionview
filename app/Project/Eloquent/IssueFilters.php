<?php

namespace App\Project\Eloquent;

use Jenssegers\Mongodb\Eloquent\Model;

class IssueFilters extends Model
{
    //
    protected $table = 'user_issue_filters';

    protected $fillable = array(
        'project_key',
        'user',
        'filters'
    );
}
