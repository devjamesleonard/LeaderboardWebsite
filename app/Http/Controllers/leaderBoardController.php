<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leaderboardGroup;
use App\Models\categoryGroup;
use App\Models\listItem;
use App\Models\newuser;
use Illuminate\Support\Str;
use App\Models\tags;
class leaderBoardController extends Controller
{
//use functions to build the item and then just reuse them later
    //use a session variable to save sort of data, also keyword search would be a nice faeture
    public function index(){
        //passing values is easwy because views take second parameters
        //listitem::all returns all of them from the table
        if(session()->has('userid')){
            try{
       // return view('welcome',['leaderboardGroups' => leaderboardGroup::all(),'username'=> newuser::find(session()->get('userid'))->username,'id'=> newuser::find(session()->get('userid'))->id,'role'=> newuser::find(session()->get('userid'))->role]);   //for all
       return view('welcome',['leaderboardGroups' => leaderboardGroup::all()->sortBy('name'),'user'=> newuser::find(session()->get('userid'))]);   //for all
        //MAKE SURE TO NOT PASS THROUGH USER PASSWORD WITH ITEM AND INSTEAD PASS ALL THE INFORMATION SEPERATELY ON A DIFFERENT OBJECT
    }catch(e){
        return redirect('/');
    }
        }else{
        return view('login');
        }
      
     // return view('welcome',['listItems' => ListItem::where('isComplete',0)->get()]);'username'=> newuser::find(session()->get('userid'))->username,'userid'=> newuser::find(session()->get('userid'))->userid 
    }


    public function signout(){
        session()->forget('userid');
        return redirect('/');
        
    }
    public function login(Request $request){
        
        if(newuser::whereRaw('BINARY `username` = ?', [$request->username])->whereRaw('BINARY `password` = ?', [$request->password])->exists()){
            $NewUser = newuser::whereRaw('BINARY `username` = ?', [$request->username])->whereRaw('BINARY `password` = ?', [$request->password])->get()[0];

            session()->put('userid',$NewUser->id);
            return redirect('/');
        }else{
            return view('login',['errorMessage'=> 'Invalid Credentials']);
        }
      
    }
    public function registerportal(){
        return view('register');
    }
    public function loginportal(){
        return view('login');
    }
    public function register(Request $request){
       if($request->confirm_password == $request->password ){
        if(!newuser::where('username', $request->username)->exists()){

            
            try{
                if (preg_match('/^[a-zA-Z0-9!@#$%^&*()_+]+$/', $request->username) && preg_match('/^[a-zA-Z0-9!@#$%^&*()_+]+$/', $request->password)) {
            $newUser = new newuser;
            $newUser->username = $request->username;
      //      $newUser->password = preg_replace('/\s/g', '', $request->password;);
        //    $newUser->username =   $request->username;
            $newUser->password =  $request->password;
            $newUser->role = 1;
            $newUser->save();
            return redirect('/');
                }else{
                    return view('register',['errorMessage'=> 'Invalid characters used']);
                }
            }catch(\Exception $e){
                return view('register',['errorMessage'=> 'Connection to database failed']);
            }
           
        }else{
            return view('register',['errorMessage' => 'Username already exists']);
        }
    }else{
        return view('/register',['errorMessage' => 'Passwords do not match']);
    }
}
    public function saveItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $newListItem = new leaderboardGroup;
        $newListItem->name = $request->leaderboardName;

        $newListItem->uuid = session()->get('userid');
        $newListItem->save();
        //saveItemtodatabase
        return redirect('/');
        //return view('welcome',['listItems' => ListItem::all()]);
        //make sure it's passed to both that use default route
    }
    public function openTagOption($id, Request $request){
        $tagString = "";
        $s = $request->tags;
        if($s != null){
            /*
        foreach ($s as $tag) {
            if($tag != null || $tag != ""){
            if(!tags::where('name',$tag)->exists()){
                $newTag = new tags();
                $newTag->name = $tag;
                $newTag->leaderboardid = $pieces[1];
                $newTag->save();
            }
            
            $tagString = $tagString."".$tag.", ";
               
            }
        }
        $tagString = rtrim($tagString, ", ");*/
        return view('tagsOption',['categories' => categoryGroup::where('leaderboardid',$id)->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortBy('title'), 'name' => leaderboardGroup::find($id), 'tagsList' =>  $s, 'tags' =>  tags::all()->sortBy('name')]);
    
    }else{
        $tagString = "%NoTagsListed%";
        return redirect()->route('openTags',$id.'%0');
        //moorehouse
    
    }

        
        //   $pieces = Str::of($id)->explode('%');
       //Moorhouz
    //    \Log::info(json_encode($request->all()));
     
    }
    public function openTagOptionRedo($id){
        if(Str::length($id) == 5){
        $pieces = explode("%", $id);

        }else{
            $pieces = explode("%", $id);
            $pieces[0] = Str::before($id, '!');
            $pieces[1] = Str::after($id, '%');

        }
        
        //   $pieces = Str::of($id)->explode('%');
       
    //    \Log::info(json_encode($request->all()));
        if(true){
        return view('tagsOption',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$pieces[0])->get()->sortBy('title'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::find($pieces[1]), 'tagsList' =>  tags::all()->sortBy('name')]);
        }else{
       //     return view('tagsOption',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$pieces[0])->get()->sortByDesc('ranking'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::find($x)]);
 
        }
    }
    public function openBoard($id){
        if(session()->has('userid')){
            try{
  if((session()->get('userid') == leaderboardGroup::find($id)->uuid || newuser::find(session()->get('userid'))->role == 7) ){
        return view('leaderboard',['categories' => categoryGroup::where('leaderboardid',$id)->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortBy('title'), 'name' => leaderboardGroup::find($id), 'tags' =>  tags::where('leaderboardid',$id)->get()->sortBy('name')]);
  }else{
        return view('leaderboardview',['categories' => categoryGroup::where('leaderboardid',$id)->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortBy('title'), 'name' => leaderboardGroup::find($id), 'tags' =>  tags::where('leaderboardid',$id)->get()->sortBy('name')]);
  }
}catch(e){
    return redirect('/');
}
}else{
    return redirect('/');
}
        

    }
    public function openRankings($id){
        if(session()->has('userid')){
            try{
        if(session()->get('userid') == leaderboardGroup::find($id)->uuid || newuser::find(session()->get('userid'))->role == 7 ){
              return view('rankings',['categories' => categoryGroup::where('leaderboardid',$id)->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortBy('title'), 'name' => leaderboardGroup::find($id), 'tags' =>  tags::all()->sortBy('name')]);
        }else{
              return view('rankings',['categories' => categoryGroup::where('leaderboardid',$id)->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortBy('title'), 'name' => leaderboardGroup::find($id), 'tags' =>  tags::all()->sortBy('name')]);
        }
    }catch(e){
        return redirect('/');
    }
              
    }else{
        return redirect('/');
    }
          }

          public function openTags($id){
            $pieces = explode("%", $id);
            if($pieces[1] == 0){
            if(session()->has('userid')){
            try{    
            if(session()->get('userid') == leaderboardGroup::find($pieces[0])->uuid || newuser::find(session()->get('userid'))->role == 7 ){
                  return view('tags',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$pieces[0])->get()->sortBy('title'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::all()->sortBy('name')]);
            }else{
                  return view('tags',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$pieces[0])->get()->sortBy('title'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::all()->sortBy('name')]);
            }
        }catch(e){
            return redirect('/');
        }
        }else{
            return redirect('/');
        } 
    }else{
        if(session()->has('userid')){
            try{    
            if(session()->get('userid') == leaderboardGroup::find($pieces[0])->uuid || newuser::find(session()->get('userid'))->role == 7 ){
                  return view('tags',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$pieces[0])->get()->sortByDesc('ranking'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::all()->sortBy('name')]);
            }else{
                  return view('tags',['categories' => categoryGroup::where('leaderboardid',$pieces[0])->get()->sortBy('name'), 'listItems' => listItem::where('leaderboardid',$id)->get()->sortByDesc('ranking'), 'name' => leaderboardGroup::find($pieces[0]), 'tags' =>  tags::all()->sortBy('name')]);
            }
        }catch(e){
            return redirect('/');
        }
        }else{
            return redirect('/');
        } 
    }
    
          
              }
    public function deleteLeaderboard($id){
        //$pieces = explode("%", $id);
        
        $listItem = leaderboardGroup::find($id)->delete();
        //$listItem = ListItem::where('leaderboardid',$pieces[1])->where('categoryid',$pieces[0])->delete();
        return redirect('/');
    }
    public function saveCategory($id, Request $request){


        $newCategory = new categoryGroup();
        $newCategory->name = $request->CategoryName;
        $newCategory->leaderboardid = $id;
        $newCategory->save();

        
        //return view('leaderboard',['categories' => categoryGroup::all(), 'listItem' => listItem::all(), 'name' => leaderboardGroup::find($id)]);
        return redirect()->route('openBoard', $id);
        

    }

    public function addItem($id,Request $request){

        $pieces = explode("%", $id);
        $fixed= $request->listItemLink;
        $tagString = "";
        $newListItem = new listItem();
        $newListItem->title = $request->listItemName;
        $newListItem->ranking = $request->listItemRanking;
        $newListItem->summary = preg_replace('/\n/', '<br>', $request->listItemSummary);
        if(!strlen(str_replace(' ', '', $request->listItemLink)) == 0){
            if(Str::contains($request->listItemLink,"https://")){
                $fixed= str_replace('https://', '', $request->listItemLink);
            } else if(Str::contains($request->listItemLink,"http://")){
                $fixed= str_replace(' ', '', $request->listItemLink);
            }   
        $newListItem->url =  $fixed;
        $newListItem->visit = 1;
    }else{
        $newListItem->url = '';
        $newListItem->visit = 0;
    }

        $newListItem->leaderboardid = $pieces[1];
        $newListItem->categoryid = $pieces[0];
        $s = $request->tags;
        if($s != null){
        foreach ($s as $tag) {
            if($tag != null || $tag != ""){
            if(!tags::where('name',$tag)->exists()){
                $newTag = new tags();
                $newTag->name = $tag;
                $newTag->leaderboardid = $pieces[1];
                $newTag->save();
            }
            
            $tagString = $tagString."".$tag.", ";
               
            }
        }
        $tagString = rtrim($tagString, ", ");
    }else{
        $tagString = "%NoTagsListed%";
    }
        $newListItem->tags = $tagString;
        $newListItem->save();

        
        //return view('leaderboard',['categories' => categoryGroup::all(), 'listItem' => listItem::all(), 'name' => leaderboardGroup::find($id)]);
        return redirect()->route('openBoard', $pieces[1]);
        

    }
    public function deleteItem($id){
        //$pieces = explode("%", $id);
        $x = ListItem::find($id)->leaderboardid;
        $listItem = ListItem::find($id)->delete();
        //$listItem = ListItem::where('leaderboardid',$pieces[1])->where('categoryid',$pieces[0])->delete();
        return redirect()->route('openBoard', $x);
    }
    public function deleteCategory($id){
        //$pieces = explode("%", $id);
        $x = categoryGroup::find($id)->leaderboardid;
        $listItem = ListItem::where('categoryid',$id)->delete();
        $y = categoryGroup::find($id)->delete();
        //$listItem = ListItem::where('leaderboardid',$pieces[1])->where('categoryid',$pieces[0])->delete();
        return redirect()->route('openBoard', $x);
    }
    public function editTitle($id,Request $request ){
        $x = ListItem::find($id);
        $y = $x->leaderboardid;
        $x->title = $request->title;
        $fixed = $request->newListItemLink;
        if(!strlen(str_replace(' ', '', $request->newListItemLink)) == 0){
            if(Str::contains($request->newListItemLink,"https://")){
                $fixed= str_replace('https://', '', $request->newListItemLink);
            } else if(Str::contains($request->newListItemLink,"http://")){
                $fixed= str_replace(' ', '', $request->newListItemLink);
            }   
        $x->url =  $fixed;
        $x->visit = 1;
    }else{
        $x->url = '';
        $x->visit = 0;
    }
        $x->save();
        return redirect()->route('openBoard', $y);
       }

       public function editItemCat($id,Request $request ){
        $x = ListItem::find($id);
        $y = $x->leaderboardid;
        $x->categoryid = $request->NewCategory;
        $x->save();
        return redirect()->route('openBoard', $y);
       }
    public function editCategory($id,Request $request ){
       $newCategory = categoryGroup::find($id);
        $newCategory->name = $request->CategoryName;
        $x = $newCategory->leaderboardid;
        $newCategory->save();

        return redirect()->route('openBoard', $x);
    }
    public function editLeaderboard($id,Request $request ){
        $newCategory = leaderboardGroup::find($id);
         $newCategory->name = $request->LeaderboardName;
         $newCategory->save();
         return redirect('/');
     }
    public function editRanking($id,Request $request ){
        $x = ListItem::find($id);
        $y = $x->leaderboardid;
        $x->ranking = $request->ranking;
        $x->save();
        return redirect()->route('openBoard', $y);
       }
       public function editSummary($id,Request $request ){
        $x = ListItem::find($id);
        $y = $x->leaderboardid;
        $x->summary = preg_replace('/\n/', '<br>', $request->summary);
        $x->save();
        return redirect()->route('openBoard', $y);
       }
       public function editTags($id,Request $request ){
        $x = ListItem::find($id);
        $tagString = "";
        $s = $request->tags;
        if($s != null){
        foreach ($s as $tag) {
            if($tag != null || $tag != ""){
            if(!tags::where('name',$tag)->exists()){
                $newTag = new tags();
                $newTag->name = $tag;
                $newTag->leaderboardid = $id;
                $newTag->save();
            }
            
            $tagString = $tagString."".$tag.", ";
               
        }
    }
    $tagString = rtrim($tagString, ", ");
    }else{
        $tagString = "%NoTagsListed%";
    }
        $y = $x->leaderboardid;
        $x->tags = $tagString;
        $x->save();
        return redirect()->route('openBoard', $y);
       }

}
