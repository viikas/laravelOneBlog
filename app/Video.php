<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
  protected $fillable=[
  'title',
  'detail',
  'video_source',
  'status',
  'type'
  ];
}
