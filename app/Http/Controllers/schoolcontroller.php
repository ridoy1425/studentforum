<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\sinfo;
use Storage;
class schoolcontroller extends Controller
{
	public function about()
	{
		return view('school.about');
	}
	public function teacherlist()
	{
		return view('school.teacherlist');
	}
	public function students()
	{
		return view('school.students');
	}
	public function contact()
	{
		return view('school.contact');
	}
	// student data store
	public function store(Request $request)
	{
			$validatedData = $request->validate([
			's_name' => 'required',
			's_pass' => 'required',
			's_num' => 'required|unique:sinfos|max:11',
			]);
			$data= new sinfo();
			$data->s_name= $request->get('s_name');
			$data->s_add= $request->get('s_add');
			$data->s_prof= $request->get('s_prof');
			$data->s_pass= $request->get('s_pass');
		
			if($request->hasfile('s_img')){
				$file=$request->file('s_img');
				$extension=$file->getClientOriginalExtension();
				$filename=time().'.'.$extension;
				$file->move('public/uploads/s_image/',$filename);
				$data->s_img=$filename;
			}
			else{
				return $request;
				$data->s_img='';
			}
			$data->s_num= $request->get('s_num');
			$data->save();
			return redirect()->back();
	}
		// student data show
		
	public function studentlist()
	{
			$sinfo=sinfo::paginate(3);
			return view('school.studentlist',compact('sinfo'));
	}
	public function edit($id)
	{
		$data=sinfo::findorfail($id);
		return view('school.editform',compact('data'));
	}
	public function update(Request $request, $id)
	{
		
			$data=sinfo::findorFail($id);
			$data->s_name= $request->get('s_name');
			$data->s_add= $request->get('s_add');
			$data->s_prof= $request->get('s_prof');
			$data->s_pass= $request->get('s_pass');			
			if($request->hasfile('s_img'))
			{
				$file=$request->file('s_img');
				$extension=$file->getClientOriginalExtension();
				$filename=time().'.'.$extension;
				$file->move('public/uploads/s_image/',$filename);
				$oldImage=$data->s_img;
				$data->s_img=$filename;
				unlink(public_path().'/uploads/s_image/'.$oldImage );
			}				
			$data->s_num= $request->get('s_num');
			$data->save();
			return redirect()->to('/school/studentlist');
			
	}
	public function delete($id)
	{
			$data=sinfo::findorFail($id);
			$oldImage=$data->s_img;
			// Storage::delete($oldImage);
			unlink(public_path() . '/uploads/s_image/'.$oldImage );
			$data->delete();
			return redirect()->to('/school/studentlist');
	}
	public function view($id)
	{
		$data=sinfo::findorfail($id);
		return view('school.viewdata',compact('data'));
	}
}