<?php

namespace App\Models;

use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
  /** @use HasFactory<\Database\Factories\ProjectFactory> */
  use HasFactory;

  public function casts()
  {
    return [
      'tech_stack' => 'array',
      'status' => ProjectStatus::class,
      'ends_at' => 'datetime'
    ];
  }

  public function author()
  {
    return $this->BelongsTo(User::class, 'created_by');
  }

  public function proposals()
  {
    return $this->hasMany(Proposal::class);
  }
}
