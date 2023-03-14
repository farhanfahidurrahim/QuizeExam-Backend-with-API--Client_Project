<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryEnglish;
use App\Models\CategoryEnglishLiterature;
use App\Models\CategoryBanglaGrammer;
use App\Models\CategoryBanglaLiterature;
use App\Models\CategoryMath;
use App\Models\CategoryInternationalAffair;
use App\Models\CategoryBangladeshAffair;
use App\Models\CategoryGeographyEnvironment;
use App\Models\CategoryComputerIct;
use App\Models\CategoryMentalSkill;
use App\Models\CategoryEthicsValueGoverance;
use App\Models\Learn;
use App\Models\LearnEnglishLiterature;
use App\Models\LearnBanglaGrammer;
use App\Models\LearnBanglaLiterature;
use App\Models\LearnMath;
use App\Models\LearnInternationalAffair;
use App\Models\LearnBangladeshAffair;
use App\Models\LearnGeographyEnvironment;
use App\Models\LearnComputerIct;
use App\Models\LearnMentalSkill;
use App\Models\LearnEthicsValueGoverance;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Str;

class LearnController extends Controller
{   
    public function indexEnglishGrammer()
    {   
        $data=Learn::where('subject_name','=','English Grammer')->orderBy('topic_name', 'desc')->get();
        $category=CategoryEnglish::all();
        return view('Learn.EnglishGrammer.index',compact('category','data'));
    }

    public function storeIndexEnglishGrammer(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/english_grammer/'),$filename);
                    // path
                    $path="file/pdf/learn/english_grammer/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    Learn::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Learn::findOrFail($id);
        @unlink($data->pdf_file_path);
        $data->delete();

        return redirect()->back();
    }

    ///////////////////////////English Literature/////////////////////////////////

    public function indexEnglishLiterature()
    {   
        $data=LearnEnglishLiterature::where('subject_name','=','English Literature')->orderBy('topic_name', 'desc')->get();
        $category=CategoryEnglishLiterature::all();
        return view('Learn.EnglishLiterature.index',compact('category','data'));
    }

    public function storeIndexEnglishLiterature(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/english_literature/'),$filename);
                    // path
                    $path="file/pdf/learn/english_literature/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnEnglishLiterature::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    ///////////////////////Bangla Grammer////////////////////////////////

    public function storeIndexBnGram(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/bangla_grammer/'),$filename);
                    // path
                    $path="file/pdf/learn/bangla_grammer/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnBanglaGrammer::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexBnGram()
    {
        $data = LearnBanglaGrammer::where('subject_name','=','Language Grammer')->get();
        $category=CategoryBanglaGrammer::all();
        return view('Learn.BanglaGrammer.index',compact('data','category'));
    }

    ///////////////////////Bangla Literature////////////////////////////////

    public function storeIndexBnLit(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/bangla_literature/'),$filename);
                    // path
                    $path="file/pdf/learn/bangla_literature/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnBanglaLiterature::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexBnLit()
    {
        $data = LearnBanglaLiterature::where('subject_name','=','Bangla Literature')->get();
        $category=CategoryBanglaLiterature::all();
        return view('Learn.BanglaLiterature.index',compact('data','category'));
    }

    /////////////////////// Math ////////////////////////////////

    public function storeIndexMath(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/math/'),$filename);
                    // path
                    $path="file/pdf/learn/math/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnMath::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexMath()
    {
        $data = LearnMath::get();
        $category=CategoryMath::all();
        return view('Learn.Math.index',compact('data','category'));
    }

    ////////////////////////International Affairs///////////////////////////////

    public function storeIndexIntAff(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/international_affairs/'),$filename);
                    // path
                    $path="file/pdf/learn/international_affairs/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnInternationalAffair::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexIntAff()
    {
        $data = LearnInternationalAffair::get();
        $category=CategoryInternationalAffair::all();
        return view('Learn.InternationalAffairs.index',compact('data','category'));
    }


    ////////////////////////Bangladesh Affairs///////////////////////////////

    public function storeIndexBdAff(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/bangladesh_affairs/'),$filename);
                    // path
                    $path="file/pdf/learn/bangladesh_affairs/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnBangladeshAffair::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexBdAff()
    {
        $data = LearnBangladeshAffair::all();
        $category=CategoryBangladeshAffair::all();
        return view('Learn.BangladeshAffairs.index',compact('data','category'));
    }

    ////////////////////////Geography Environment///////////////////////////////

    public function storeIndexGeoEnv(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/geography_environment/'),$filename);
                    // path
                    $path="file/pdf/learn/geography_environment/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnGeographyEnvironment::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexGeoEnv()
    {
        $data = LearnGeographyEnvironment::all();
        $category=CategoryGeographyEnvironment::all();
        return view('Learn.GeographyEnvironment.index',compact('data','category'));
    }

    ////////////////////////Computer Ict///////////////////////////////

    public function storeIndexCompIct(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/computer_ict/'),$filename);
                    // path
                    $path="file/pdf/learn/computer_ict/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnComputerIct::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexCompIct()
    {
        $data = LearnComputerIct::all();
        $category=CategoryComputerIct::all();
        return view('Learn.ComputerIct.index',compact('data','category'));
    }

    ////////////////////////Mental Skill///////////////////////////////

    public function storeIndexMentSkill(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/mental_skill/'),$filename);
                    // path
                    $path="file/pdf/learn/mental_skill/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnMentalSkill::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexMentSkill()
    {
        $data = LearnMentalSkill::all();
        $category=CategoryMentalSkill::all();
        return view('Learn.MentalSkill.index',compact('data','category'));
    }

    ////////////////////// EthicsValueGoverance : EVG /////////////////////////

    public function storeIndexEvg(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/learn/ethics_value_goverance/'),$filename);
                    // path
                    $path="file/pdf/learn/ethics_value_goverance/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    LearnEthicsValueGoverance::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function indexEvg()
    {
        $data = LearnEthicsValueGoverance::all();
        $category=CategoryEthicsValueGoverance::all();
        return view('Learn.EthicsValueGoverance.index',compact('data','category'));
    }

    ///////////////////////////////////////////////////////

    public function bankStore(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
              'title' => 'required',
              'pdf_file_path' => 'required|mimes:pdf'
        ]);

        $slug=Str::slug($request->title, '-');

        if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
        }else{

              if($request->file('pdf_file_path')) {

                    $file = $request->file('pdf_file_path');
                    //$filename = $file->hashName();
                    $filename = $slug.'.'.$file->getClientOriginalExtension();;
                    // Upload file
                    $file->move(public_path('file/pdf/computerIct/'),$filename);
                    // path
                    $path="file/pdf/computerIct/$filename";

                    // Insert record
                    $insertData_arr = array(
                        'subject_name' => $request->subject_name,
                        'topic_name' => $request->topic_name,
                        'title' => $request->title,
                        'pdf_file_path' => $path,
                    );
                    //dd($insertData_arr);
                    Learn::create($insertData_arr);

                    // Session
                    Session::flash('alert-class', 'alert-success');
                    Session::flash('message','Record inserted successfully.');

                }else{

                    // Session
                    Session::flash('alert-class', 'alert-danger');
                    Session::flash('message','Record not inserted');
            }

        }

        return redirect()->back();
    }

    public function bankEnglish()
    {
        $data = Learn::where('subject_name','=','English')->get();
        return view('Bank.english',compact('data'));
    }

    public function bankMath()
    {
        $data = Learn::where('subject_name','=','Math')->get();
        return view('Bank.math',compact('data'));
    }

    public function bankBangla()
    {
        $data = Learn::where('subject_name','=','Bangla')->get();
        return view('Bank.bangla',compact('data'));
    }

    public function bankComputer()
    {
        $data = Learn::where('subject_name','=','Computer Ict')->get();
        return view('Bank.computer',compact('data'));
    }

    ///////////////////////////////////////////////////////

    // public function bankStore(Request $request){
    //     //dd($request->all());
    //     $validator = Validator::make($request->all(), [
    //           'title' => 'required',
    //           'pdf_file_path' => 'required|mimes:pdf'
    //     ]);

    //     $slug=Str::slug($request->title, '-');

    //     if ($validator->fails()) {
    //       return redirect()->Back()->withInput()->withErrors($validator);
    //     }else{

    //           if($request->file('pdf_file_path')) {

    //                 $file = $request->file('pdf_file_path');
    //                 //$filename = $file->hashName();
    //                 $filename = $slug.'.'.$file->getClientOriginalExtension();;
    //                 // Upload file
    //                 $file->move(public_path('file/pdf/computerIct/'),$filename);
    //                 // path
    //                 $path="file/pdf/computerIct/$filename";

    //                 // Insert record
    //                 $insertData_arr = array(
    //                     'subject_name' => $request->subject_name,
    //                     'topic_name' => $request->topic_name,
    //                     'title' => $request->title,
    //                     'pdf_file_path' => $path,
    //                 );
    //                 //dd($insertData_arr);
    //                 Learn::create($insertData_arr);

    //                 // Session
    //                 Session::flash('alert-class', 'alert-success');
    //                 Session::flash('message','Record inserted successfully.');

    //             }else{

    //                 // Session
    //                 Session::flash('alert-class', 'alert-danger');
    //                 Session::flash('message','Record not inserted');
    //         }

    //     }

    //     return redirect()->back();
    // }

    public function caBangladesh()
    {
        $data = Learn::where('topic_name','=','Bangladesh')->get();
        return view('CurrentAffairs.bangladesh',compact('data'));
    }

    public function caInternational()
    {
        $data = Learn::where('subject_name','=','Computer Ict')->get();
        return view('CurrentAffairs.international',compact('data'));
    }

    public function caMIsc()
    {
        $data = Learn::where('subject_name','=','Computer Ict')->get();
        return view('CurrentAffairs.misc',compact('data'));
    }

}
