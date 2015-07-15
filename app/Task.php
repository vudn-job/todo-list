<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Task extends Model 
{

//    protected $table = 'tasks';
//    protected $fillable = ['title', 'description'];
//    protected $guarded = ['id'];
    
    protected $table = 'task';
    protected $fillable = ['task_name', 'dead_line', 'status'];
    protected $guarded = ['id'];

    public function getTaskById($id) {
        
//        dd($id);
        $task = Cache::remember("task_{$id}", 60, function() use ($id) {
                    return self::findOrFail($id);
                });
        
        return $task;
    }
    
    public function saveTask($id, $task) {
        $result = $this->fill($task)->save();
        if ($result !== FALSE) {
//            $id = $this->
            if (Cache::has("task_{$id}")) {
                Cache::forget("task_{$id}");
            }
        }
        
        return $result;
    }

}
