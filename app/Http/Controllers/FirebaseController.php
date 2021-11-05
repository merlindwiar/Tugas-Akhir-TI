<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/pantau-air-firebase-adminsdk-26wjt-6bf9017678.json');
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/pantau-air-firebase-adminsdk-26wjt-6bf9017678.json')
        ->withDatabaseUri('https://pantau-air-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $database = $firebase->createDatabase();

        $newPost = $database
        ->getReference('blog/posts')
        ->push([
        'title' => 'Laravel FireBase Tutorial' ,
        'category' => 'Laravel']);
        echo '<pre>';
        print_r($newPost->getvalue());
    }

    public function index(){
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/pantau-air-firebase-adminsdk-26wjt-6bf9017678.json')
        ->withDatabaseUri('https://pantau-air-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $database = $firebase->createDatabase();
        $reference = $database->getReference('blog/posts');

        $snapshot = $reference->getSnapshot();

        $value = $snapshot->getValue();

        dd($value);
    }

}
