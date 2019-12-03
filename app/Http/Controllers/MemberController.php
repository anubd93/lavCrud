<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberController extends Controller
{
    public function index(){

    	return view('show');
    }

    public function getMembers(){
    	$members = Member::all();

    	return view('show')->with('members', $members);
    }

    public function save(Request $request){
    	$member = new Member;
    	$member->group_id = $request->input('group_id');
    	$member->name = $request->input('name');
    	$member->tbl_name = $request->input('tbl_name');
    	$member->status = $request->input('status');
  		$member->save();

  		$this->createTable($request);

  		return redirect('/');
    }

    public function update(Request $request, $id){
    	$member = Member::find($id);
    	$oldTableName = $member->tbl_name;
        $member->tbl_name = $request->input('tbl_name');
        $member->save();
        Schema::rename($oldTableName, $request->tbl_name);

        return redirect('/');
    }

    public function delete($id)
    {
        $members = Member::find($id);
        $members->delete();

        Schema::dropIfExists($members->tbl_name);

        return redirect('/');
    }

    public function createTable($request)
    {
        $tbl_name = $request->tbl_name;

        Schema::create($tbl_name, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();
        });
        return redirect('/');
    }

    public function renameColumn()
    {
        Schema::table('hello', function(Blueprint $table) {
            $table->renameColumn('details', 'id');
        });
        return redirect('/');
    }

    public function dataTypeChange()
    {
        Schema::table('hello', function(Blueprint $table) {
            $table->string('name',200)->change();
        });
        return redirect('/');
    }

    public function addColumn()
    {
        Schema::table('helloworld', function(Blueprint $table) {
            $table->string('email')->after('name');
        });
        return redirect('/');
    }

    public function deleteColumn()
    {
        Schema::table('helloworld', function (Blueprint $table) {
            $table->dropColumn('email');
            return redirect('/');
        });
    }

}
