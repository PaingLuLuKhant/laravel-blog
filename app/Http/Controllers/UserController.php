<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        // $users = User::get();
        // $users = User::with('profile')->get();

        // $user = User::with('profile')->find(1);
        // $user->profile->bio;

        // $users = User::with('profile')->get();
        // dd($users); // user & profile both
        
        // $user = User::with('profile')->find(3);
        // $profile = $user->profile;
        // dd($profile); // profile only

        // $user = User::with('profile')->first();
        // $bio = $user->profile->bio;
        // $user_id = $user->profile->user_id;
        // dd($bio, $user_id);

        $users = User::with('profile')->get();
        $user = $users[0];   
        $bio = $user->profile->bio;
        $user_id = $user->profile->user_id;
        dd($bio, $user_id);
        

        dd($user); // user & profile both
        
        // $user = User::with('profile')->find(3);
        // $profile = $user->profile;
        // dd($profile); // profile only

        // $user = User::with('profile')->first();
        // $bio = $user->profile->bio;
        // $user_id = $user->profile->user_id;
        // dd($bio, $user_id);

        // $users = User::with('profile')->get();
        // $user = $users[1];
        // $bio = $user->profile->bio;
        // $user_id = $user->profile->user_id;
        // dd($bio, $user_id);

    }

    public function postList() {

        $user = User::with('posts')->find(3);
        $posts = $user->posts;


        // $user_posts  = User::find(3)->posts;
        // dd($user_posts);

        $user_posts  = User::find(3)->posts;
        foreach($user_posts as $user_post) {
            $user_post_title[] = $user_post->title;
        }
        dd($user_post_title);
    }
    public function showLatestComment($userId)
    {
        // Using find()
        $user = User::find($userId);

        // Access single comment through hasOneThrough
        $latestComment = $user->latestCommentThroughPost;

        // Show result
        dd($latestComment->comment);
    }

    public function showUserComments($id)
    {
        // get single user
        $user = User::find($id);

        // get all comments through posts
        $comments = $user->commentsThroughPost;

        
        // dd($comments);
        foreach ($comments as $comment) {
            echo $comment->comment . "<br>" ;
        }
    }
}
