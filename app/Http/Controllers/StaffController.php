<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Staff1;
use App\Staff2;
use App\Staff3;
use App\Staff4;
use App\Staff5;
use App\Staff6;
use App\Staff7;
use App\Staff8;

class StaffController extends Controller{
    public function index(){
      $staff1=Staff1::all();
      $staff2=Staff2::all();
      $staff3=Staff3::all();
      $staff4=Staff4::all();
      $staff5=Staff5::all();
      $staff6=Staff6::all();
      $staff7=Staff7::all();
      $staff8=Staff8::all();
      if(Auth::check()){
        return view('staff.adminindex',[
          'staff1'=>$staff1,'staff2'=>$staff2,'staff3'=>$staff3,'staff4'=>$staff4,'staff5'=>$staff5,'staff6'=>$staff6,'staff7'=>$staff7,'staff8'=>$staff8,
        ]);
      }
      else{
        return view('staff.index',[
          'staff1'=>$staff1,'staff2'=>$staff2,'staff3'=>$staff3,'staff4'=>$staff4,'staff5'=>$staff5,'staff6'=>$staff6,'staff7'=>$staff7,'staff8'=>$staff8,
        ]);
      }

    }

    public function imageUploadPost1(Request $request)
  {
    	$this->validate($request, [
            'image' => 'required',
        ]);
        $staff1=Staff1::find(1);
        $imageName=time().$request->image->getClientOriginalName();
        $request->image->move(public_path('img'), $imageName);
        $staff1->picture=$imageName;
        $staff1->save();
        return back()
      		->with('success1','成功');
  }
  public function imageUploadPost2(Request $request)
{
    $this->validate($request, [
          'image' => 'required',
      ]);
      $staff1=Staff2::find(1);
      $imageName=time().$request->image->getClientOriginalName();
      $request->image->move(public_path('img'), $imageName);
      $staff1->picture=$imageName;
      $staff1->save();
      return back()
        ->with('success2','成功');
}
public function imageUploadPost3(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff3::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success3','成功');
}
public function imageUploadPost4(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff4::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success4','成功');
}
public function imageUploadPost5(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff5::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success5','成功');
}
public function imageUploadPost6(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff6::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success6','成功');
}
public function imageUploadPost7(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff7::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success7','成功');
}
public function imageUploadPost8(Request $request)
{
  $this->validate($request, [
        'image' => 'required',
    ]);
    $staff1=Staff8::find(1);
    $imageName=time().$request->image->getClientOriginalName();
    $request->image->move(public_path('img'), $imageName);
    $staff1->picture=$imageName;
    $staff1->save();
    return back()
      ->with('success8','成功');
}

    public function update1(Request $request){
      $staff =Staff1::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update2(Request $request){
      $staff =Staff2::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update3(Request $request){
      $staff =Staff3::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update4(Request $request){
      $staff =Staff4::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update5(Request $request){
      $staff =Staff5::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update6(Request $request){
      $staff =Staff6::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update7(Request $request){
      $staff =Staff7::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
    public function update8(Request $request){
      $staff =Staff8::find(1);
      $staff->summary=$request->summary;
      $staff->save();
      return redirect('/staff');
    }
}
