<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function __construct(){
        
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users['users'] = User::all();
        return view('emails.envioMail', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $data = request()->validate([	            
        //     'email'=>['required','para'],	            
        //     'subject'=>['required','asunto'],	            
        //     'message'=>['required','contenido'],	            
        //     'image'=>['required','mimes:jpg,png,jpeg,gif,svg,pdf'],	       
        // ]);
        
        // $emailData = array(	            
        //     'email'=>$data['email'],	            
        //     'subject'=>$data['subject'],	            
        //     'message'=>$data['message'],	            
        //     'image'=>$data['image']	        
        // );

        // view()->share(compact('emailData'));	        
        // $url = $request->file('file');

        // $sendMail = Mail::send('vistaEmail',$emailData,function ($message) use($data,$url){	            
        //     $email = $data['email'];	            
        //     $subject = $data['subject'];	            
        //     $message->to($email);	            
        //     $message->subject($subject);	            
        //     $message->attach(	                
        //         $url->getRealPath(),array(	                    
        //             'as'=>$url->getClientOriginalName(),	                    
        //             'mime'=>$url->getMimeType()	                
        //             )	            
        //         );	            
        //         $message->from(env('MAIL_USERNAME'));	        
        //     });	        
        // if ($sendMail){	            
        //     Alert::error('Error');	            
        //     return redirect()->back();	        
        // }	        
        // else{	            
        //     Alert::success('Success');	            
        //     return redirect()->back();	        
        // }	    

        $data = [
            'emailto' => $request->get('para'),
            'subject' => $request->get('asunto'),
            'content' => $request->get('contenido'),
            // 'file' => $request->file('file'),
        ];
        $url = $request->file('file');
        Mail::send('vistaEmail', $data, function ($message) use($data,$url) {
            // $pdf = \PDF::loadFile($data['file']->$_GET->pathinfo);
            $message->from('albertuki115@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
            // $message->attach($data['file']);
            // $message->attach(\PDF::loadFile($data['file']));
        });

        echo "<script>alert('El e-mail fue enviado correctamente');</script>";

        // return $request->get('file');
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
