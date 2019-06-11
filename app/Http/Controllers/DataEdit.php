<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MengisiProfil;
use App\Models\PakanTernak;
use App\Models\TableIsian;
use App\Models\EditEvent;
use App\Models\EventHistory;
use App\User;
use Illuminate\Support\Facades\Auth;

class DataEdit extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $isian = TableIsian::where('user_id',$user_id)->first();
        $mengisi = MengisiProfil::where('user_id',$user_id)->first();
        $pakan = PakanTernak::where('user_id',$user_id)->first();
        return view('inputdata',compact('isian','mengisi','pakan'));
    }

    public function containsOnlyNull($input)
    {
        return empty(array_filter($input, function ($a) { return $a !== null;}));
    }

    public function isian_edit(Request $request)
    {
        $table_name = 'TABEL ISIAN';
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $data = $request->all();
        $flag = false;
        unset($data['_token']);
        $flag = $this->containsOnlyNull($data);
        
        $data['user_id'] = $user_id;
        $isisan = TableIsian::where('user_id',$user_id)->first();        
        if($isisan){
            $database_data = $isisan->toArray();            
        }
        if($flag){
            if($isisan){
                unset($database_data['id'],$database_data['user_id'],$database_data['created_at'],$database_data['updated_at']);
                if(!$this->containsOnlyNull($database_data)){
                    $isisan->update($data);
                    $event = EditEvent::where('id',4)->first();
                    $event_name = $event->event_name;
                    $event_type = $event->event_type;
                    $event_name = str_replace('uuu',$user_name,$event_name);
                    $event_name = str_replace('ttt',$table_name,$event_name);
                    EventHistory::create([
                        'user_id' => $user_id,
                        'history_name' => $event_name,
                        'history_type' => $event_type
                    ]);
                    return $event_name;
                }
            }
        }else{
            if($isisan){
                unset($database_data['id'],$database_data['created_at'],$database_data['updated_at']);
                $diff = count(array_diff_assoc($data,$database_data));                
                    if($diff > 0){
                        $isisan->update($data);
                        $event = EditEvent::where('id',3)->first();
                        $event_name = $event->event_name;
                        $event_type = $event->event_type;
                        $event_name = str_replace('uuu',$user_name,$event_name);
                        $event_name = str_replace('ttt',$table_name,$event_name);
                        EventHistory::create([
                            'user_id' => $user_id,
                            'history_name' => $event_name,
                            'history_type' => $event_type
                        ]);
                        return $event_name;
                    }
                
            }else{
                TableIsian::create($data);
                $event = EditEvent::where('id',2)->first();
                $event_name = $event->event_name;
                $event_type = $event->event_type;
                $event_name = str_replace('uuu',$user_name,$event_name);
                $event_name = str_replace('ttt',$table_name,$event_name);
                EventHistory::create([
                    'user_id' => $user_id,
                    'history_name' => $event_name,
                    'history_type' => $event_type
                ]);
                return $event_name;
            }
        }        
        
    }

    public function mengisi_edit(Request $request)
    {
        $table_name = 'SUMBER DATA UNTUK MENGISI PROFIL KELURAHAN';
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $data = $request->all();
        $flag = false;
        unset($data['_token']);
        $flag = $this->containsOnlyNull($data);
        $data['user_id'] = $user_id;
        $isisan = MengisiProfil::where('user_id',$user_id)->first();
        if($isisan){
            $database_data = $isisan->toArray();            
        }

        if($flag){
            if($isisan){
                unset($database_data['id'],$database_data['user_id'],$database_data['created_at'],$database_data['updated_at']);
                if(!$this->containsOnlyNull($database_data)){
                    $isisan->update($data);
                    $event = EditEvent::where('id',4)->first();
                    $event_name = $event->event_name;
                    $event_type = $event->event_type;
                    $event_name = EditEvent::where('id',4)->first()->event_name;
                    $event_name = str_replace('uuu',$user_name,$event_name);
                    $event_name = str_replace('ttt',$table_name,$event_name);
                    EventHistory::create([
                        'user_id' => $user_id,
                        'history_name' => $event_name,
                        'history_type' => $event_type
                    ]);
                    return $event_name;
                }
            }
        }else{
            if($isisan){
                unset($database_data['id'],$database_data['created_at'],$database_data['updated_at']);
                $diff = count(array_diff_assoc($data,$database_data)); 
                    if($diff > 0){
                        $isisan->update($data);
                        $event = EditEvent::where('id',3)->first();
                        $event_name = $event->event_name;
                        $event_type = $event->event_type;
                        $event_name = str_replace('uuu',$user_name,$event_name);
                        $event_name = str_replace('ttt',$table_name,$event_name);
                        EventHistory::create([
                            'user_id' => $user_id,
                            'history_name' => $event_name,
                            'history_type' => $event_type
                        ]);
                        return $event_name;
                    }

            }else{
                MengisiProfil::create($data);
                $event = EditEvent::where('id',2)->first();
                $event_name = $event->event_name;
                $event_type = $event->event_type;
                $event_name = str_replace('uuu',$user_name,$event_name);
                $event_name = str_replace('ttt',$table_name,$event_name);
                EventHistory::create([
                    'user_id' => $user_id,
                    'history_name' => $event_name,
                    'history_type' => $event_type
                ]);
                return $event_name;
            }
        }        
    }

    public function pakan_edit(Request $request)
    {
        $table_name = 'KETERSEDIAAN HIJAUAN PAKAN TERNAK';
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $data = $request->all();
        $flag = false;
        unset($data['_token']);
        $flag = $this->containsOnlyNull($data);
        $data['user_id'] = $user_id;
        $isisan = PakanTernak::where('user_id',$user_id)->first();
        if($isisan){
            $database_data = $isisan->toArray();            
        }
        
        if($flag){
            if($isisan){
                unset($database_data['id'],$database_data['user_id'],$database_data['created_at'],$database_data['updated_at']);
                if(!$this->containsOnlyNull($database_data)){
                    
                    $isisan->update($data);
                    $event = EditEvent::where('id',4)->first();
                    $event_name = $event->event_name;
                    $event_type = $event->event_type;
                    $event_name = str_replace('uuu',$user_name,$event_name);
                    $event_name = str_replace('ttt',$table_name,$event_name);
                    EventHistory::create([
                        'user_id' => $user_id,
                        'history_name' => $event_name,
                        'history_type' => $event_type
                    ]);
                    return $event_name;
                }
            }
        }else{
            if($isisan){
                unset($database_data['id'],$database_data['created_at'],$database_data['updated_at']);
                $diff = count(array_diff_assoc($data,$database_data));
 
                    if($diff > 0){
                        $isisan->update($data);
                        $event = EditEvent::where('id',3)->first();
                        $event_name = $event->event_name;
                        $event_type = $event->event_type;
                        $event_name = str_replace('uuu',$user_name,$event_name);
                        $event_name = str_replace('ttt',$table_name,$event_name);
                        EventHistory::create([
                            'user_id' => $user_id,
                            'history_name' => $event_name,
                            'history_type' => $event_type
                        ]);
                        return $event_name;
                    }

            }else{
                PakanTernak::create($data);
                $event = EditEvent::where('id',2)->first();
                $event_name = $event->event_name;
                $event_type = $event->event_type;
                $event_name = str_replace('uuu',$user_name,$event_name);
                $event_name = str_replace('ttt',$table_name,$event_name);
                EventHistory::create([
                    'user_id' => $user_id,
                    'history_name' => $event_name,
                    'history_type' => $event_type
                ]);
                return $event_name;
            }
        }        
        
    }
}
